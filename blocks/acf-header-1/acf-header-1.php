<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
<?php
$link = get_field('link_1');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$link1 = get_field('link_2');
$link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
$link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
$link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
?>
<?php
$link2 = get_field('link_3');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
    <!-- HEADER 1 -->
     <section class="bg-white">
        <div class="h-[180px] md:h-[279px] lg:h-[367px] xl:h-[413px] mt-[117px] md:mt-[106px] lg:mt-[103px] bg-center bg-cover bg-white relative  <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>" style="background-image: url('<?php echo get_field('achtergrond_afbeelding');?>');">
            <div class="absolute top-0 left-0 right-[50%] bottom-0 z-10 bg-gradient-to-r from-[#1D1A18B3] to-transparen hidden md:block"></div>        
            <div class="container flex h-full items-center pt-[41px] md:pt-[35.5px] lg:pt-[34px]">
                <h1 class="text-22 leading-30 max-w-[206px] md:text-40 md:leading-46 md:max-w-[373px] lg:text-55 lg:leading-65 lg:max-w-[569px] xl:text-60 xl:leading-70 xl:max-w-[653px] font-satoshi text-<?php echo get_field('titel_kleur');?> font-semibold z-20"><?php echo get_field('titel');?></h1>
            </div>
        </div>
        <div class="mt-[-30px] md:mt-[-60px] relative z-[21]">
            <div class="container">
                <div class="relative">
                    <div class="w-full bg-white overflow-hidden rounded-[4px] boxshadow p-[25px] flex flex-col justify-between">
                        <div class="grid gap-[35px] lg:gap-[40px] xl:gap-[45px] md:p-[25px]">
                            <h2 class="text-20 leading-28 md:text-21 md:leading-28 lg:text-22 lg:leading-31 xl:text-25 xl:leading-35 font-satoshi text-black font-semibold"><?php echo get_field('subtitel');?></h2>
                            <div class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito text-black font-normal lg:w-[650px] xl:w-[750px] text-editor"><?php echo get_field('tekst');?></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 mt-[30px]">
                            <a href="<?php echo $link_url; ?>" class="h-[52px] bg-[#27A5E2] flex justify-center items-center lg:hover:opacity-80 duration-300" target="<?php echo $link_target; ?>">
                                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito font-bold text-white"><?php echo $link_text; ?></p>
                            </a>
                            <a href="<?php echo $link1_url; ?>" class="h-[52px] bg-[#81BAD9] flex justify-center items-center lg:hover:opacity-80 duration-300" target="<?php echo $link1_target; ?>">
                                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito font-bold text-white"><?php echo $link1_text; ?></p>
                            </a>
                            <a href="<?php echo $link2_url; ?>" class="h-[52px] bg-[#78A6A6] flex justify-center items-center lg:hover:opacity-80 duration-300" target="<?php echo $link2_target; ?>">
                                <p class="text-18 leading-30 md:text-14 md:leading-24 lg:text-15 lg:leading-25 xl:text-18 xl:leading-30 font-nunito font-bold text-white"><?php echo $link2_text; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>