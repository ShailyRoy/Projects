<?php
get_header();
?>

<div class="page-content">

    <!--About Feature-->

    <section class="pu-family">
        <div class="container">
<?php get_sidebar();?>
            <div class="row">
                <div class="pu-family-top col-lg-10 col-lg-offset-1  animated zoomIn">
			<h2><?php the_title(); ?></h2>

     	   
			<?php 
if ( class_exists('bbPress') ) {
      if ( is_bbpress() ) { 
 
wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); 
}}
?> 


					<?php

					  the_post();
 
					  the_content();

					?>
                </div>
            </div>
        </div>
    </section>

    <!--About Feature-->
    
<?php
    get_footer();
?>