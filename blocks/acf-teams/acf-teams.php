<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- TEAMS -->
    <section class="bg-white py-[60px]">
        <div class="container">
           <div class="bg-black w-full h-[600px] flex justify-center items-center">
                <p class="text-white text-center px-[20px]">[HIER KOMT EEN TEAMSECTIE VANUIT HET DASHBOARD]</p>
           </div>
        </div>
    </section>
<?php endif; ?>