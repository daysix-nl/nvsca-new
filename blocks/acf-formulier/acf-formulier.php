<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
   <section class="bg-white <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="container">
            <div class="form-titel mb-[35px] lg:mb-[40px] xl:mb-[45px]">
                <h2 class="pt-2 text-22 leading-33 md:text-21 md:leading-28 lg:text-22 lg:leading-29 xl:text-25 xl:leading-33 font-satoshi text-black font-semibold">Stuur ons een bericht</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] lg:gap-[60px]">
                <div class="form-gravity">
                    <div class="w-full md:w-full contact-form">
                        <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"] '); ?>
                    </div>
                </div>
                <div class="">
                    <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-bold"><?php echo get_field('titel');?></p>
                    <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal text-editor"><?php echo get_field('tekst');?></div>
                </div>
            </div>
        </div>
   </section>
<?php endif; ?>