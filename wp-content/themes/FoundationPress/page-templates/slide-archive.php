<?php
/*
Template Name: slider
*/
get_header(); ?>

<!-- <div class="main-container"> -->
<!-- title -->
<h2 class="front-header_title"><?php the_title(); ?></h2>

<!-- subtitle onaj -->
<?php the_field('sub-title');?>
<!-- content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; ?>
<?php endif; ?>
<?php 
 $args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'slide',
    'post_status'      => 'publish',
);?>
<?php $posts = get_posts($args) ?>
<?php $br=0;?>
<!-- slider -->
    <?php foreach($posts as $post):?>
     <!-- ovo je url do slike <?php echo(get_the_post_thumbnail_url());?> -->
    <?php endforeach;?>

<?php get_footer();

