<!-- side-column -->
<div class="side-column">
	
	
<?php if ( is_active_sidebar( 'sidebar1' ) && !is_bbpress() ) : ?>
  
        <div id="widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar1' ); ?>
        </div><!-- .widget-area -->
  
<?php elseif ( is_active_sidebar( 'bbp-sidebar' ) && is_bbpress() ) : ?>
  
    <div id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'bbp-sidebar' ); ?>
    </div><!-- .widget-area -->
  
<?php endif; ?>
	
</div><!-- /side-column -->

