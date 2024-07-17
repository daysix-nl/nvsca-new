<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- HEADER 4 -->
    <section class="h-[127px] mt-[117px] md:mt-[106px] lg:mt-[103px] <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> bg-white">
        <div class="container h-full flex flex-col justify-center">
            <span class="text-12 leading-20 md:text-12 md:leading-14 lg:text-12 lg:leading-18 xl:text-12 xl:leading-22 text-[#726A63] font-nunito font-semibold"></span>
            <h1 class="text-22 leading-33 md:text-25 md:leading-35 lg:text-31 lg:leading-41 xl:text-35 xl:leading-45 font-satoshi text-<?php echo get_field('titel_kleur');?> font-semibold pt-1"><?php echo get_field('titel');?></h1>
        </div>
    </section>
<?php endif; ?>