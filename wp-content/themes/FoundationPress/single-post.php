<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<?php   
$array_of_templates = array(
  "post-hero-section"=>"",
  "post-subtext-section"=>"", 
  "post-img-section"=>"",
  "post-text-grid-section"=>"",
  "post-video-section"=>"", 
  "post-card-image-section"=>"",
  "post-asymmetric-text-grid-section"=>"",
  "post-above-footer-section"=>"", 
);

  $order = explode(' ',get_field('sections_order'));
  $order = preg_split('/\s+/', get_field('sections_order'));
  if(count($order)!=count($array_of_templates)){
    $order = array_fill(0, count($array_of_templates), '0');
  
  }
$order_counter= 0;
$new_array =[];
foreach($array_of_templates as $key=>$value){
  $value = $order[$order_counter];
  $new_array[$key] = $value;
  $order_counter++; 
}
asort($new_array);

foreach($new_array as $template_name=>$order){
  include('page-templates/sections/'.$template_name.'.php');
}  
?>
<div class="menu-color-blob"> <?php echo(get_field('menu_colour')); ?></div>
<div class="post_navigation main-container"> 
<a href="<?php echo get_home_url();?>">See all projects</a>
<?php if (get_previous_post()):?>
  <!-- <a href="<?php echo (get_permalink(get_previous_post())); ?>">Previous project</a> -->
<?php endif;?>
<?php if (get_next_post()):?>
  <a class="next" href="<?php echo ((get_permalink(get_next_post()))); ?>">Next project <i class="eva eva-arrow-forward"></i></a>
<?php endif;?>
</div>

<script type="text/javascript" src="<?php echo $theme_root;?>/js/post-single.js"></script>

<?php get_footer();
