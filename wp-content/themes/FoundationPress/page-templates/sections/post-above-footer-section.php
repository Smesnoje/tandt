<section class="post-above-footer-section">

    <?php if( get_field('post-above-footer-section-image') ): ?>
        <?php $image_url= get_field('post-above-footer-section-image')['url'];?>
        <div class="post-above-footer-img" style="background-image: url(<?php echo $image_url?>);"></div>
    <?php endif;?>


</section>
