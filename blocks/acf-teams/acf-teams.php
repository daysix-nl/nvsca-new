<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- TEAMS -->
    <section class="bg-white py-[60px]">
        <div class="container">
           <div class="bg-black w-full h-[600px] flex justify-center items-center">
                <iframe class="w-full h-full overflow-auto" src="https://dashboard.schisis-cranio.nl/teamlocator"></iframe>
           </div>
        </div>
    </section>
<?php endif; ?>