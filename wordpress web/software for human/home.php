<?php
/*
 Template Name: Homepage
 */
get_header();
?>
<div class="page-content">
   <!--Banner-->
    <section class="banner-dark"
	 style="background: url(<?php echo wp_get_attachment_url(get_theme_mod('lwp-Zenback-callout-image')); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 pu-banner-art">
                    <h1>Zen VPN – Best Fast App VPN</h1>
                    <p> Secure your internet connection with encrypted privacy and security. </p>
                </div>
                <div class="pu-bnr-lnks">
                    <a href="<?php echo get_site_url();?>/pricing" class="btn pu-glb-btn red-btn">Get Zen VPN <i class="glyphicon glyphicon-arrow-right"></i></a>
                    <div class="clearfix"></div> <span>7-Days Money-Back Guarantee</span>
                </div>
            </div>
        </div>
    </section>
    <!--Banner-->
    <!--Home Feature-->
    <section class="pu-family">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pu-family-top">
                    <h2>Join the Group of 10K Satisfied Users</h2>
                    <p>Join the global family of ten thousands users of Zen VPN. We provide trustworthy performance, Convenient interface, Fast and susceptible customer support.</p>
                </div>
            </div>

         <div class="row pu-row-box clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
					<?php if (get_theme_mod('lwp-post-callout-display')== "Yes"){ ?>                  
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-post-callout-cropped-image'))?> ">
					<?php } ?>
                </div>
				
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h3>Eventual Data Encryption</h3>
                    <p>Be assured that every bit of data that you send or receive over any of your internet enabled gadgets, specially the Smartphone messaging apps, cannot be intercepted by hackers, data priers, and ISP providers.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Home Feature-->
    <!--Privacy-->
    <!--variable background-->
    <section class="pu-privacy"
	 style="background: url(<?php echo wp_get_attachment_url(get_theme_mod('lwp-postb-callout-cropped-image')); ?>)">
		<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                   <h2>Stay Safe With Zen VPN</h2>
                    <p> Zen VPN never inspects user's online browsing activities. Signup for Zen VPN to get complete online security and privacy with a secret IP address and non intercepted internet traffic.</p>
                    <div class="pu-pt-25">
                        <a href="<?php echo get_site_url();?>/pricing" class="btn pu-glb-btn red-btn">Get Zen VPN <i class="glyphicon glyphicon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Privacy-->
<?php
    get_footer();
?>