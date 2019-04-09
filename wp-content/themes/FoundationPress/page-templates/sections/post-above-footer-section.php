<?php if( get_field('post-above-footer-section-image') ): ?>
    <?php $image_url= get_field('post-above-footer-section-image')['url'];?>
<img src="<?php echo $image_url?>" alt="halt">
<?php endif;?>