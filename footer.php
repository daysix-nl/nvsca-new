<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>


<footer>
    <section class="bg-[#f3f3f3]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-[45px] lg:gap-5 xl:gap-6 xl:mx-[15px] pt-4 pb-[45px] md:pt-6 md:pb-4 lg:pt-6 lg:pb-6 xl:pt-[85px] xl:pb-[75px]">
                <div class="col-span-1 flex flex-col">
                    <!-- MENU KOLOM 1 -->
                    <?php
                    if( have_rows('primaire_footer_menu_rij_1_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_1_repeater', 'option') ) : the_row(); ?>
                            <a href="<?php the_sub_field('link', 'option'); ?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col-span-1 flex flex-col lg:ml-2 xl:ml-[14px]">
                    <!-- MENU KOLOM 2 -->
                     <?php
                    if( have_rows('primaire_footer_menu_rij_2_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_2_repeater', 'option') ) : the_row(); ?>
                         <a href="<?php the_sub_field('link', 'option'); ?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col-span-1 flex flex-col lg:ml-1 xl:ml-[15px]">
                    <!-- MENU KOLOM 3 -->
                    <?php
                    if( have_rows('primaire_footer_menu_rij_3_repeater', 'option') ):
                        while( have_rows('primaire_footer_menu_rij_3_repeater', 'option') ) : the_row(); ?>
                         <a href="<?php the_sub_field('link', 'option');?>" class="text-16 leading-36 md:text-17 md:leading-36 lg:text-15 lg:leading-30 xl:text-18 xl:leading-36 font-nunito text-<?php the_sub_field('titel_kleur', 'option');?> font-medium hover:opacity-[0.7] duration-300 w-fit"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                   
                </div>
            </div>
            <div class="border-t-[1px] border-[#C6C6C6] opacity-[0.42] xl:mx-[15px]"></div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-[45px] lg:gap-5 xl:gap-6 xl:mx-[15px] pt-[37px] pb-[30px] md:pt-3 md:pb-[55px] lg:pt-3 lg:pb-[55px] xl:pt-[35px] xl:pb-[55px]">
                <div class="col-span-1 lg:col-span-2 flex flex-col">
                    <a href="/" class="w-[242px] md:w-[242px] lg:w-[166px] xl:w-[187px]"><img src="/wp-content/themes/nvsca-new/img/local/Logo_v3.png" alt=""></a>
                    <p class="text-13 leading-30 md:text-13 md:leading-30 lg:text-10 lg:leading-23 xl:text-13 xl:leading-30 font-nunito text-black lg:pt-2 xl:pt-[25px] hidden lg:block">© <?php echo date("Y"); ?> Nederlandse Vereniging voor Schisis en Craniofaciale Afwijkingen</p>                
                </div>
                <div class="col-span-1 flex flex-col lg:ml-1 xl:ml-[15px]">
                    <div class="grid grid-cols-1 justify-items-start">
                        <div class="text-13 leading-23 md:text-13 md:leading-23 lg:text-10 lg:leading-20 xl:text-13 xl:leading-23 font-nunito text-black">
                            <b>Adresgegevens</b><br>
                            <?php echo get_field('adresgegevens', 'option');?>

                        </div>
                      <div class="grid grid-cols-5 w-[268px] md:w-[268px] lg:w-[239px] xl:w-[268px]  pt-[55px] md:pt-4 lg:pt-3 xl:pt-3">
                            <!-- SOCIAL MEDIA -->
                            <?php if (get_field('facebook', 'option')): ?><a href="<?php echo get_field('facebook', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/facebook.php'; ?></a><?php endif; ?>
                            <?php if (get_field('linkedin', 'option')): ?><a href="<?php echo get_field('linkedin', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a><?php endif; ?>
                            <?php if (get_field('google', 'option')): ?><a href="<?php echo get_field('google', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/google.php'; ?></a><?php endif; ?>
                            <?php if (get_field('instagram', 'option')): ?><a href="<?php echo get_field('instagram', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/instagram.php'; ?></a><?php endif; ?>
                            <?php if (get_field('youtube', 'option')): ?><a href="<?php echo get_field('youtube', 'option');?>" target="_blank" class="col-span-1 max-w-[44px] md:max-w-[44px] lg:max-w-[39px] xl:max-w-[44px] hover:opacity-[0.7] duration-300"><?php include get_template_directory() . '/img/icons/youtube.php'; ?></a><?php endif; ?>
                        </div>
                    </div>
                     <p class="text-13 leading-30 md:text-13 md:leading-30 lg:text-10 lg:leading-23 xl:text-13 xl:leading-30 font-nunito text-black pt-[55px] md:pt-6 block lg:hidden">© <?php echo date("Y"); ?> NVSCA</p>
                </div>
            </div>
        </div>
    </section>
</footer>


<?php wp_footer('my_custom_js'); ?>
</body>
</html>
