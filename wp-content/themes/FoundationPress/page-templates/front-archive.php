<?php
/*
Template Name: front-archive
*/
get_header(); ?>

<header>
	
<h1>Our Work</h1>
<div class="filter filter_tags"></div>
</header>
<?php $posts = get_posts(-1) ?>
<div class="portfoli_container">
<?php foreach($posts as $post):?>
	<?php // echo '<pre>' , var_dump($post) , '</pre>';?>
	<!-- gets post tags -->
	<?php $post_tags = get_field( "tags" );?>
	<div class="post_card <?php echo $post_tags;?>" style="background-image: url(<?php echo(get_the_post_thumbnail_url());?>)">
	<!-- displays post title -->
	<h3 class="post_card_heading"><?php echo($post->post_title);?></h3>
	<!-- gets post featured image -->
	<!-- <?php echo(get_the_post_thumbnail_url());?> -->
	
	<!-- array of tags -->
	<?php $post_tags_array = explode(" ",$post_tags);?>
	<!-- displays post tags if not empty-->
	<?php if($post_tags!=''):?>
	<?php foreach($post_tags_array as $tag):?>
		<a class="post_tag" href="#"><?php echo $tag?></a>
	<?php endforeach;?>
	<?php endif;?>
	</div>
<?php endforeach;?>
</div>


<script type="text/javascript" src="<?php echo $theme_root;?>/js/front-archive.js"></script>
<?php get_footer();
