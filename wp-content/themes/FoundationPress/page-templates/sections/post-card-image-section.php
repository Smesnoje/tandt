
<section class="post-card-image-section">

	<div class="post-card-image-container main-container">

		<div class="post-card-image-content">

			<div class="post-card-image-content_item">
				<?php if( get_field('post-card-image-section-img-1') ): ?>
					<?php $image_url= get_field('post-card-image-section-img-1')['url'];?>
					<div class="post-card-image-content_item--img" style="background-image: url(<?php echo $image_url?>)">
					</div>
				<?php endif;?>
			</div>

			<div class="post-card-image-content_item">
				<?php if( get_field('post-card-image-section-img-2') ): ?>
					<?php $image_url= get_field('post-card-image-section-img-2')['url'];?>
					<div class="post-card-image-content_item--img" style="background-image: url(<?php echo $image_url?>)">
					</div>
				<?php endif;?>
			</div>

			<div class="post-card-image-content_item">
				<?php if( get_field('post-card-image-section-img-3') ): ?>
					<?php $image_url= get_field('post-card-image-section-img-3')['url'];?>
					<div class="post-card-image-content_item--img" style="background-image: url(<?php echo $image_url?>)">
					</div>
				<?php endif;?>
			</div>


		</div>

	</div>

</section>

