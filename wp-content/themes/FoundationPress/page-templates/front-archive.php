<?php
/*
Template Name: front-archive
*/
get_header(); ?>

<!-- <div class="main-container"> -->

  <script>
    AOS.init();
  </script>

<div class="front-header main-container">
	
	<h2 class="front-header_title">Our Work</h2>

	<div class="front-header_filters front-header_filters--tags">
		<span class="front-header_filters--tag">branding</span>
		<span class="front-header_filters--tag">packaging</span>
		<span class="front-header_filters--tag">tvc</span>
		<span class="front-header_filters--tag">soical</span>
		<span class="front-header_filters--tag">web design</span>
		<span class="front-header_filters--tag">category</span>
	</div>
</div>
<div class="posts-container">

	<?php $posts = get_posts(-1) ?>
	<?php foreach($posts as $post):?>
	<?php // echo '<pre>' , var_dump($post) , '</pre>';?>
	<!-- gets post tags -->
	<?php $post_tags = get_field( "tags" );?>
		<div data-aos="fade-up-right" class="post-card <?php echo $post_tags;?>" style="background-image: url(<?php echo(get_the_post_thumbnail_url());?>)">
		<!-- displays post title -->
			<div class="post-card_hover">
				<div class="post-card_title-tag-wrap">
					<h3 class="post-card_title"><?php echo($post->post_title);?></h3>
					<!-- gets post featured image -->
					<!-- <?php echo(get_the_post_thumbnail_url());?> -->
	
					<!-- array of tags -->
					<?php $post_tags_array = explode(" ",$post_tags);?>

					<!-- displays post tags if not empty-->
					<?php if($post_tags!=''):?>
						<?php foreach($post_tags_array as $tag):?>
							<a class="post-card_tag" href="#"><?php echo $tag?></a>
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	<?php endforeach;?>
</div>




<script type="text/javascript" src="<?php echo $theme_root;?>/js/front-archive.js"></script>
<!-- </div> -->
<?php get_footer();
