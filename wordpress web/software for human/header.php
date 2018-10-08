<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 	-->
    <title>
        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
        ?>
    </title>
    <!-- Bootstrap -->
    <link href="<?=bloginfo('template_url')?>/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=bloginfo('template_url')?>/library/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?=bloginfo('template_url')?>/library/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=bloginfo('template_url')?>/library/bootstrap/css/icofont.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!--Custom css -->
    <link href="<?=bloginfo('stylesheet_url')?>" rel="stylesheet">
    <link href="<?=bloginfo('template_url')?>/css/responsive.css" rel="stylesheet">
    <link href="<?=bloginfo('template_url')?>/css/flags.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=bloginfo('template_url')?>/css/pushy.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<header class="pu-header">
    <div class="nav-top-bg">
        <div class="container">
            <div class="navbar-top pull-right">
                <ul class="nav navbar-nav">
				<?php		
				$args = array(
					'theme_location' => 'primary0'
				);
				?>
				<?php wp_nav_menu(  $args ); ?>
                
				<!-- <li><a href="<?php echo get_site_url();?>/blog">Blog</a></li>
                    <li><a href="<?php echo get_site_url();?>/about">About Us</a></li>
					<li><a href="<?php echo get_site_url();?>/contact-us">Contact Us</a></li>
					-->

					</ul>
            </div>
        </div>
        <nav class="navbar navbar-default nav-menu">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo get_site_url();?>">
                      <h1 class="header-title">Zen VPN</h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse pu-main-menu" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
              <?php
				$args = array(
					'theme_location' => 'primary'
				);
				?>
				<?php wp_nav_menu(  $args ); ?>
					<!--   <li><a href="<?php echo get_site_url();?>/why-zenvpn">Why ZenVPN</a></li>
                        <li><a href="<?php echo get_site_url();?>/features">Features</a></li>
                        <li><a href="<?php echo get_site_url();?>/server-location">Server Location</a></li>
                        <li><a href="<?php echo get_site_url();?>/order">Pricing</a></li>
                        <li><a href="<?php echo get_site_url();?>/download">VPN Apps</a></li>
                        <li><a href="<?php echo get_site_url();?>/business-vpn">Business</a></li> --> 
					</ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Pushy Menu -->
    <button class="menu-btn">&#9776;</button>
    <nav class="pushy pushy-left" data-focus="#first-link">
        <div class="pushy-content">
            <ul>
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				?>
				<?php wp_nav_menu(  $args ); ?>
				<?php
				$args = array(
					'theme_location' => 'primary2'
				);
				?>
				<?php wp_nav_menu(  $args ); ?>
		<!--    <li><a href="<?php echo get_site_url();?>/why-zenvpn">Why Zen VPN</a></li>
                <li><a href="<?php echo get_site_url();?>/features">Features</a></li>
                <li><a href="<?php echo get_site_url();?>/server-location">Server Location</a></li>
                <li><a href="<?php echo get_site_url();?>/order">Pricing</a></li>
                <li><a href="<?php echo get_site_url();?>/download">VPN Apps</a></li>
                <li><a href="<?php echo get_site_url();?>/business-vpn">Business</a></li>
                <li><a href="<?php echo get_site_url();?>/blog">Blog</a></li>
				<li><a href="<?php echo get_site_url();?>/about">About Us</a></li>
                <li><a href="<?php echo get_site_url();?>/contact-us">Contact Us</a></li> -->
            </ul>
        </div>
    </nav>
<!-- Site Overlay -->
</header>