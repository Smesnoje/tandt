<?php
/*
Template Name: front-archive
*/
get_header(); ?>

<!-- <div class="main-container"> -->

  <script>
    AOS.init();
  </script>

<div class="front-wrap">


<div class="front-header main-container">
	
	<h2 class="front-header_title">Our Work</h2>

	<div class="front-header_filters front-header_filters--tags">
		
	
	</div>
</div>
<div class="posts-container">
<?php $args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'cat'         => '',
	'category_name'    => '',
	'post_type'        => 'post',
	'post_status'      => 'publish',
);?>
<?php $posts = get_posts($args) ?>
<?php $br=0;?>
	<?php foreach($posts as $post):?>
	<?php $br++;?>
	<?php // echo '<pre>' , var_dump($post) , '</pre>';?>
	<!-- gets post tags -->
	<?php $post_tags = get_field( "tags" );?>
		<div data-aos="<?php echo ($br%2==0?'fade-up-left':'fade-up-right') ?>" class="post-card <?php foreach($post_tags as $tag){$tag = str_replace(' ','_',$tag);echo($tag.' ');}?> <?php echo 'card-' . ($br%2==0?'even':'odd') ?>" style="background-image: url(<?php echo(get_the_post_thumbnail_url());?>)">
		<!-- displays post title -->
			<div class="post-card_hover">
				<div class="post-card_title-tag-wrap">
				
				
					<h3 class="post-card_title"><a href="<?php echo(get_post_permalink())?>"><?php echo($post->post_title);?></h3></a>
					<!-- gets post featured image -->
					<!-- <?php echo(get_the_post_thumbnail_url());?> -->
	
					<!-- array of tags -->
					<!-- displays post tags if not empty-->
					<?php if($post_tags!=''):?>
						<?php foreach($post_tags as $tag):?>
							<a class="post-card_tag" href="#"><?php echo $tag?></a>
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	<?php endforeach;?>
</div>


</div>

<script type="text/javascript" src="<?php echo $theme_root;?>/js/front-archive.js"></script>

<?php get_footer();

