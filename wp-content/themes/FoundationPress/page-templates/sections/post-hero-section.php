<!-- title -->
<?php if( get_field('post-hero-section-title') ): ?>
	<?php the_field('post-hero-section-title');?>
<?php endif;?>
<!-- tags -->
<?php if( get_field('tags') ): ?>
	<?php $post_tags = get_field( "tags" );?>
	<?php foreach($post_tags as $tag):?>
		<span class="post-card_tag" ><?php echo $tag?></span>
	<?php endforeach;?>
<?php endif;?>
<!-- image -->
<?php if( get_field('post-hero-section-image') ): ?>
	<?php $image_url= get_field('post-hero-section-image')['url'];?>
	<img src="<?php echo $image_url?>" alt="halt">
<?php endif;?>
<h2>
<!-- year -->
<?php if( get_field('post-hero-section-year') ): ?>
	<?php the_field('post-hero-section-year');?>
<?php endif;?>
</h2>