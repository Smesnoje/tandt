
<?php if( get_field('post-img-section-img-1') ): ?>
    <?php $image_url= get_field('post-img-section-img-1')['url'];?>
    <img src="<?php echo $image_url?>" alt="halt">
<?php endif; ?>
<?php if( get_field('post-img-section-img-2') ): ?>
    <?php $image_url= get_field('post-img-section-img-2')['url'];?>
    <img src="<?php echo $image_url?>" alt="halt">
<?php endif; ?>