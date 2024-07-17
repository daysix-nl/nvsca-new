<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>
    <!-- CONTENT BLOK 5 -->
    <section class="bg-white <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
        <div class="container min-h-[200px]">
            <?php $allowed_blocks_text = ['acf/acf-element-wysiwyg-editor', 'acf/acf-element-videos', 'acf/acf-element-button' ]; ?> <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>" />
        </div>
    </section>
<?php endif; ?>