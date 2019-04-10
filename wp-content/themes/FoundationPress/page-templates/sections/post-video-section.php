
<section class="post-video-section">
	
	<div class="post-video-container main-container">

		<?php if( get_field('post-video-section') ): ?>
			<div class="post-video-content">
				<?php the_field('post-video-section'); ?>
			</div>
		<?php endif; ?>

		<!-- <?php if( get_field('mp4_video') ): ?>
			<div class="post-video-content">
			<video width="400" controls>
			<source src="<?php echo (get_field('mp4_video')['url']);?>" type="video/mp4">
			</video>
				
			</div>
		<?php endif; ?>
		<?php if( get_field('webm_video') ): ?>
			<div class="post-video-content">
			<video width="400" controls>
			<source src="<?php echo (get_field('webm_video')['url']);?>" type="video/webm">
			</video>

			</div>
		<?php endif; ?> -->

	</div>

</section>
