<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 3 -->
    <section class="bg-white <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="container flex flex-col lg:flex-row items-center justify-between">
            <div class="col-span-1 grid gap-[25px] md:gap-3 lg:gap-4 order-2">
                <h2 class="text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-<?php echo get_field('titel_kleur');?> font-semibold lg:max-w-[439px] xl:max-w-[527px]"><?php echo get_field('titel');?></h2>
                <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:max-w-[439px] xl:max-w-[527px] text-editor"><?php echo get_field('tekst');?></div>                
            </div>
            <div class="col-span-1 block md:hidden lg:block py-2 md:py-0 <?php echo get_field('order');?> w-full lg:max-w-[545px] xl:max-w-[619px]">
                <iframe class="aspect-video w-full" src="https://www.youtube-nocookie.com/embed/<?php echo get_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
            </div>
        </div>
        <div class="hidden md:block lg:hidden mb-[-40px] pt-4 <?php echo get_field('order');?>">
            <iframe class="aspect-video w-full" src="https://www.youtube-nocookie.com/embed/<?php echo get_field('id_youtube');?>?controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen></iframe>
        </div>
    </section>
<?php endif; ?>