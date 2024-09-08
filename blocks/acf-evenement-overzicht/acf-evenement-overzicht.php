<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- TEAMS -->
    <section class="bg-white py-[60px]">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-[15px] md:gap-x-3 lg:gap-x-[25px] xl:gap-x-3 gap-y-[15px] md:gap-y-4 lg:gap-y-[35px] xl:gap-y-3">
                <?php
   
                 
                        $loop = new WP_Query( array(
                            'post_type' => 'events_post',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        )
                        );
                        
                        ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $post_id = get_the_ID();
                        
                        
                $date_string = get_field('begin_datum_event', $post_id);
                $date = new DateTime($date_string);
                $formatted_date = $date->format('d F Y');

                ?>
                    <a href="<?php the_permalink();?>" class="col-span-1 hover:opacity-80 duration-300">
                        <h3 class="font-nunito font-bold text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 text-[#332E2A] pt-[15px] md:pt-2 line-clamp-2"><?php the_title();?></h3>
                        <p class="my-[6px] font-nunito font-normal text-[#6A5E54] text-15 leading-30 md:text-13 md:leading-25 xl:text-15 xl:leading-30"><?php echo strtolower($formatted_date); ?></p>
                        <p class="font-nunito font-normal text-[#332E2A] text-18 leading-30 md:text-15 md:leading-25 xl:text-18 xl:leading-30 line-clamp-3 mr-2"><?php the_field('description_event', $post_id);?></p>
                        <p class="font-satoshi font-semibold text-14 leading-24 uppercase text-[#27A5E2] pt-[15px]">Lees meer</p>
                    </a>
                <?php endwhile; wp_reset_query(); ?>  
            </div>
        </div>
    </section>
<?php endif; ?>