<?php 
get_header();

$current_post_id = get_the_ID();


$loop = new WP_Query(array(
    'post_type' => 'events_post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
));

$count = 0;

// Loop through the posts
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        $post_id = get_the_ID();
        $key = get_field('event_id', $post_id);
        $status = get_field('payment_status', $post_id);

   
        if ($key === $current_post_id &&  $status === 'completed') {
            $count++;
        }
    }

    wp_reset_postdata();
}
?>


<section class="bg-white py-[80px]">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('begin_datum_event'); ?></p>
        <p><?php the_field('begin_tijd_event'); ?></p>
        <p><?php the_field('eind_datum_event'); ?></p>
        <p><?php the_field('eind_tijd_event'); ?></p>
        <p><?php the_field('verval_datum_inschrijving'); ?></p>


        <?php $geen_lid_prijs = get_field('prijs_geen_lid'); ?>
        


        <form id="event-form" class="flex flex-col" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
            <input type="hidden" name="action" value="submit_event_order">
            <input type="hidden" name="event_id" value="<?php echo esc_attr($current_post_id); ?>">
            <input type="hidden" name="amount_paid" id="hidden-total-price">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" required>

    
            <label for="surname">Achternaam</label>
            <input type="text" id="surname" name="surname" required>


            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>


            <label for="phonenumber">Telefoonnummer</label>
            <input type="tel" id="phonenumber" name="phonenumber" required>

 
            <label for="age">Leeftijd</label>
            <input type="number" id="age" name="age" min="0" required>

           
            <label for="address">Adres</label>
            <input type="text" id="address" name="address" required>
            <label for="city">Plaatsnaam</label>
            <input type="text" id="city" name="city" required>


            <label for="description">Reden van Bezoek</label>
            <textarea id="description" name="description" required></textarea>


            <label>
                <input type="checkbox" id="term" name="term" required>
                Ik ga akkoord met de voorwaarden
            </label>

     
            <label>
                <input type="checkbox" id="non_member" name="non_member" class="extra-checkbox" data-price="<?php echo esc_attr($geen_lid_prijs); ?>">
                Inschrijven voor geen lid (&euro;<?php echo esc_html($geen_lid_prijs); ?>)
            </label>

            <?php if (have_rows('extra_rollen')) : ?>
                <h2>Extra Rollen</h2>
                <ul class="extra-roll">
                <?php while (have_rows('extra_rollen')) : the_row(); ?>
                    <li>
                        <label>
                            <input type="checkbox" class="extra-checkbox" data-price="<?php echo esc_attr(get_sub_field('prijs')); ?>" data-name="<?php echo esc_attr(get_sub_field('title')); ?>">
                            <?php echo esc_html(get_sub_field('title')); ?> - &euro;<?php echo esc_html(get_sub_field('prijs')); ?>
                        </label>
                        <p><?php echo esc_html(get_sub_field('omschrijving')); ?></p>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php if (have_rows('extra_toevoegingen')) : ?>
                <h2>Extra Toevoegingen</h2>
                <ul class="extra-additions">
                <?php while (have_rows('extra_toevoegingen')) : the_row(); ?>
                    <li>
                        <label>
                            <input type="checkbox" name="additional_products[]" class="extra-checkbox" value="<?php echo esc_attr(json_encode(array('name' => get_sub_field('title')))); ?>">
                            <?php echo esc_html(get_sub_field('title')); ?> - &euro;<?php echo esc_html(get_sub_field('prijs')); ?>
                        </label>
                        <p><?php echo esc_html(get_sub_field('omschrijving')); ?></p>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

   
            <div>
                <h3>Totaalprijs: &euro;<span id="total-price">0</span></h3>
            </div>

<?php 
$verval_datum_inschrijving = get_field('verval_datum_inschrijving');

if ($verval_datum_inschrijving) {

    $verval_datum_inschrijving = preg_replace('/ \(.+\)$/', '', $verval_datum_inschrijving);
    

    try {
        $verval_date = new DateTime($verval_datum_inschrijving);
        $current_date = new DateTime();

   
        $check_date = $current_date < $verval_date;
    } catch (Exception $e) {
 
        error_log('Error parsing date: ' . $e->getMessage());
        $check_date = false;
    }
} else {
    $check_date = true;
}

$max_participants = (int) get_field('max_aantal_deelnemers');
?>

<!-- Submit Button -->
<?php if ($check_date): ?>
    <?php if ($count < $max_participants) : ?>
        <button type="submit">Inschrijven</button>
    <?php else : ?>
        <button type="submit" disabled>Inschrijven</button>
        <p>Maximaal aantal deelnemers bereikt</p>
    <?php endif; ?>
<?php else: ?>
    <p>Inschrijvingen zijn gesloten</p>
<?php endif; ?>

        </form>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.extra-checkbox');
    const totalPriceElement = document.getElementById('total-price');

    function updateTotalPrice() {
        let totalPrice = 0;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                totalPrice += parseFloat(checkbox.getAttribute('data-price'));
            }
        });
        totalPriceElement.value = totalPrice.toFixed(2);
    }


    function getSelectedProductNames() {
        const selectedProducts = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedProducts.push(checkbox.getAttribute('data-name'));
            }
        });
        return selectedProducts;
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotalPrice);
    });

    updateTotalPrice(); // Initial calculation

    // Assuming you have a form submission handler
    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();
        const selectedProducts = getSelectedProductNames();
        console.log('Selected Products:', selectedProducts);

        // Add the selected products to a hidden input field or handle them as needed
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'selected_products';
        hiddenInput.value = JSON.stringify(selectedProducts);
        this.appendChild(hiddenInput);

        // Submit the form
        this.submit();
    });
});
</script>

<?php get_footer(); ?>
