	
<section class="post-hero-section">
	<?php if( get_field('post-hero-section-image') ): ?>
		<?php $image_url= get_field('post-hero-section-image')['url'];?>
	<?php endif;?>
<div class="post-hero-section_hero" style="background-image: url(<?php echo $image_url?>);">
	<div class="post-hero-section_hero--container main-container">

		<div class="post-hero-section-title-tag-wrap">
			<!-- title -->
			<h1 class="post-hero-section-title">
				<?php if( get_field('post-hero-section-title') ): ?>
					<?php the_field('post-hero-section-title');?>
				<?php endif;?>
			</h1>
			<h5 class="post-hero-section-tag">
				<!-- tags -->
				<?php if( get_field('tags') ): ?>
					<?php $post_tags = get_field( "tags" );?>
					<?php foreach($post_tags as $tag):?>
						<span class="post-card_tag" ><?php echo $tag?></span>
					<?php endforeach;?>
				<?php endif;?>
			</h5>
		</div>
		<h2 class="post-hero-section-year">
			<!-- year -->
			<?php if( get_field('post-hero-section-year') ): ?>
				<?php the_field('post-hero-section-year');?>
			<?php endif;?>
		</h2>
	</div>
</div>
</section>