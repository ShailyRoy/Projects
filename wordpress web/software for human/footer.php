<!--Footer-->

<footer>
    <div class="container">
        <div class="pu-fot-main">
            <section class="pufot-nav col-xs-12">
                <div class="row">
                    <h2>
                        <a class="footer-nav-heading collapsed" data-toggle="collapse" href="#footer-nav-quick" aria-expanded="false" aria-controls="footer-nav-quick">Company</a>
                    </h2>
                    <div id="footer-nav-quick" class="footer-nav-content pull-wide collapse" role="tabpanel" aria-expanded="false">
					<?php			 
					$args = array(
						'theme_location' => 'footer1'
						);
					?>
					<?php wp_nav_menu( $args); ?>
					
						<!-- <ul class="toggle-footer">
                            <li><a href="<?php echo get_site_url();?>/about">About Us</a></li>
                            <li><a href="<?php echo get_site_url();?>/blog">Blog</a></li>
                        </ul>
						-->

                    </div>
                </div>
            </section>
            <section class="pufot-nav col-xs-12">
                <div class="row">
                    <h2>
                        <a class="footer-nav-heading collapsed" data-toggle="collapse" href="#footer-nav-link" aria-expanded="false" aria-controls="footer-nav-link">Legal</a>
                    </h2>
                    <div id="footer-nav-link" class="footer-nav-content pull-wide collapse" role="tabpanel" aria-expanded="false">
					<?php
					$args = array(
						'theme_location' => 'footer2'
						);
					?>
					<?php wp_nav_menu( $args); ?>

					<!--   <ul>
                            <li><a href="<?php echo get_site_url();?>/privacy-policy">Privacy Policy</a></li>
                            <li><a href="<?php echo get_site_url();?>/term">Terms of Usage</a></li>
                        </ul>
						-->
                    
					</div>
                </div>
            </section>
            <section class="pufot-nav col-xs-12">
                <div class="row">
                    <h2>
                        <a class="footer-nav-heading collapsed" data-toggle="collapse" href="#footer-nav-partners" aria-expanded="false" aria-controls="footer-nav-partners">Partners</a>
                    </h2>
                    <div id="footer-nav-partners" class="footer-nav-content pull-wide collapse" role="tabpanel" aria-expanded="false">
					<?php
					$args = array(
						'theme_location' => 'footer3'
						);
					?>
			 		<?php wp_nav_menu( $args); ?>

					<!--  <ul>
                            <li><a href="<?php echo get_site_url();?>/vpn-affiliate">Affiliate Program</a></li>
                            <li><a href="<?php echo get_site_url();?>/rs">White Label Reseller</a></li>
                            <li><a href="<?php echo get_site_url();?>/purevpn-api">Developers (API)</a></li>
                        </ul>
					-->
                    
					</div>
                </div>
            </section>
            <section class="pufot-nav col-xs-12">
                <div class="row">
                    <h2>
                        <a class="footer-nav-heading collapsed" data-toggle="collapse" href="#footer-nav-support" aria-expanded="false" aria-controls="footer-nav-support">Support</a>
                    </h2>
                    <div id="footer-nav-support" class="footer-nav-content pull-wide collapse" role="tabpanel" aria-expanded="false">
						<!--<?php
						$args = array(
							'theme_location' => 'footer4'
							);
						?>
						<?php wp_nav_menu( $args); ?>-->

			            <ul>
                            <li><a href="javascript:void(0);" target="_blank">Live Chat</a></li>
                            <li><a href="<?php echo get_site_url();?>/forums">community</a></li>
                        </ul>

                    </div>
                </div>
            </section>
            <section class="pufot-nav pufot-nav-secnd-last col-xs-12">
                <div class="row">
                    <h2>
                        <a class="footer-nav-heading collapsed" data-toggle="collapse" href="#footer-nav-download" aria-expanded="false" aria-controls="footer-nav-download">Connect with Zen VPN</a>
                    </h2>
                    <div id="footer-nav-download" class="footer-nav-content pull-wide collapse" role="tabpanel" aria-expanded="false">
                        <ul class="pufot-social">
							<li> <a href="#" class="pufot-fb hide-text" target="_blank"> <span class="fa fa-facebook"></span></a> </li>
							<li> <a href="#" class="pufot-twt hide-text" target="_blank"> <span class="fa fa-twitter"></span></a> </li>
							<li> <a href="#" class="pufot-you hide-text" target="_blank"> <span class="fa fa-youtube"></span></a> </li>
							<li> <a href="#" class="pufot-gpl hide-text" target="_blank" rel="Publisher"><span class="fa fa-google-plus"></span></a> </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pu-text-left">
                    &copy; 2017 Zen VPN All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pu-text-right pu-t-R">
                    Company Registration No: 000000
                </div>
            </div>
        </div>
    </div>

<!-- footer-widgets -->
		<div class="footer-widgets clearfix">
			
			<?php if (is_active_sidebar('footer1')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer2')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer3')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer4')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
				</div>

			<?php endif; ?>
			
		</div><!-- /footer-widgets -->



</footer>
<?php wp_footer(); ?>
<!--Footer-->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=bloginfo('template_url')?>/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=bloginfo('template_url')?>/js/custom.js"></script>
<script src="<?=bloginfo('template_url')?>/js/pushy.min.js"></script>
</body>
</html>