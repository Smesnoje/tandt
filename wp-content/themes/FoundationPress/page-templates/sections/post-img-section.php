
<section class="post-img-section">
<div class="post-img-container main-container">
    <div class="post-img-content">

        <?php if( get_field('post-img-section-img-1') ): ?>
            <?php $image_url= get_field('post-img-section-img-1')['url'];?>
            <div class="post-img-content_img-1" style="background-image: url(<?php echo $image_url?>);"></div>
        <?php endif; ?>

        <?php if( get_field('post-img-section-img-2') ): ?>
            <?php $image_url= get_field('post-img-section-img-2')['url'];?>
                <div class="post-img-content_img-2" style="background-image: url(<?php echo $image_url?>);"></div>
            <?php endif; ?>
    </div>
</div>
</section>
