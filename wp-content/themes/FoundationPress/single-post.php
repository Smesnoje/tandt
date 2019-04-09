<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php 
// $sections_array=[];

   
//     $fields = get_field_objects();

//       foreach( $fields as $name => $value ){
        
//         array_push($sections_array,$name);
       
//       }
    //   var_dump($sections_array);
                   
  // var_dump(get_post());
  include('page-templates/sections/post-hero-section.php');
  include('page-templates/sections/post-subtext-section.php');
  include('page-templates/sections/post-img-section.php');
  include('page-templates/sections/post-text-grid-section.php');
  include('page-templates/sections/post-video-section.php');
  include('page-templates/sections/post-card-image-section.php');
  include('page-templates/sections/post-asymmetric-text-grid-section.php');
  include('page-templates/sections/post-above-footer-section.php');

  
  
?>


<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			
		</main>
	</div>
</div>
<?php get_footer();
