<?php
/*
Template Name: slider
*/
get_header(); ?>

<!-- <div class="main-container"> -->

<div class="slider-page-hero main-container">
    <h1 class="slider-page-hero_title"><?php the_title(); ?></h1>

    
    <div class="slider-page-hero_text">
        
        <h3 class="slider-page-hero_text--title"><?php the_field('sub-title');?></h3>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<!-- content -->

<?php 
 $args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'slide',
    'post_status'      => 'publish',
);?>
<?php $posts = get_posts($args) ?>
<?php $br=0;?>
<!-- slider --> 


 <script type="text/javascript">
    (function($) {
	$(document).ready(function(){
      $('.slider').slick({
		arrows: true,
		prevArrow: $ ('.prev-slide'),
		nextArrow: $ ('.next-slide'),
        dots: true,
  		infinite: true,
  		speed: 300,
  		slidesToShow: 1,
  		adaptiveHeight: false
      });
    });
    })(jQuery);
</script>

<div class="slider-container main-container">
        <span class="prev-slide"><i class="eva eva-arrow-ios-back-outline"></i></span>
        <span class="next-slide"><i class="eva eva-arrow-ios-forward-outline"></i></span>
    <div class="slider" >

        <?php foreach($posts as $post):?>
        <div class="slider_content" style="background-image: url(<?php echo(get_the_post_thumbnail_url());?>)">
            <!-- ovo je url do slike <?php echo(get_the_post_thumbnail_url());?> -->
        </div>
        <?php endforeach;?>
    </div>
</div>





<?php get_footer();

