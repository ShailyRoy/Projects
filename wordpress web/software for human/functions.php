<?php
add_theme_support('post-thumbnails');


register_nav_menus(array(
    'primary0' => _('Primary0 Menu'),
	'primary1' => _('Primary1 Menu'),
	'primary2' => _('Primary2 Menu'),
    'footer1'  => _('Footer1 Menu'),
	'footer2'  => _('Footer2 Menu'),
 	'footer3'  => _('Footer3 Menu')
));



//login/out


add_filter( 'wp_nav_menu_items', 'rkk_add_auth_links', 10 , 2 );
function rkk_add_auth_links( $items, $args ) {
 if ( is_user_logged_in() && $args->theme_location == 'max_mega_menu_1') {
 $items .= '<li><a href="'. wp_logout_url() .'">Log Out</a></li>';
 }
 elseif ( !is_user_logged_in() && $args->theme_location == 'max_mega_menu_1') {
 $items .= '<li><a href="'. site_url('wp-login.php') .'">Log In</a></li>';
 $items .= '<li><a href="'. site_url('wp-login.php?action=register') .'">Register</a></li>';
 }
 return $items;
}



// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');

function rkk_widgets_init() {
  
    register_sidebar( array(
        'name' => __( 'bbPress Sidebar', 'rkk' ),
        'id' => 'bbp-sidebar',
        'description' => __( 'A sidebar that only appears on bbPress pages', 'rkk' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
  
add_action( 'widgets_init', 'rkk_widgets_init' );

	

//woocommerce

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
 
function woocommerce_template_product_description() {
woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_description', 20 );

function mb_cart_empty_url($url){
    global $woocommerce;
    return $woocommerce->cart->get_cart_url();
}
add_filter('wpmenucart_emptyurl','mb_cart_empty_url');



add_action( 'template_redirect', 'add_product_to_cart' );
function add_product_to_cart() {
	if ( ! is_admin() ) {
		$product_id = 96;
		$found = false;
		//check if product already in cart
		if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
			foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
				$_product = $values['data'];
				if ( $_product->id == $product_id )
					$found = true;
			}
			// if product not found, add it
			if ( ! $found )
				WC()->cart->add_to_cart( $product_id );
		} else {
			// if no products in cart, add it
			WC()->cart->add_to_cart( $product_id );
		}
	}
}



//add footer colum , admin to customize

function lwp_footer_callout($wp_customize){
	$wp_customize->add_section('lwp-footer-callout-section',array(
	'title' => 'Footer callout'
));


$wp_customize->add_setting('lwp-footer-callout-display',array(
	'default' => 'No'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-display-control', array(
	'label' => 'Display this?',
	'section' => 'lwp-footer-callout-section',
	'settings' => 'lwp-footer-callout-display',
	'type' => 'select',
	'choices' => array('No' => 'No', 'Yes' => 'Yes')
) ));


$wp_customize->add_setting('lwp-footer-callout-headline',array(
	'default' => 'Dynamic headtext example'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-headline-control', array(
	'label' => 'Headline',
	'section' => 'lwp-footer-callout-section',
	'settings' => 'lwp-footer-callout-headline'
	
) ));

$wp_customize->add_setting('lwp-footer-callout-text',array(
	'default' => 'Dynamic paraext example'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-text-control', array(
	'label' => 'Text',
	'section' => 'lwp-footer-callout-section',
	'settings' => 'lwp-footer-callout-text',
	'type' => 'textarea'
) ));

$wp_customize->add_setting('lwp-footer-callout-link');

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-link-control', array(
	'label' => 'link',
	'section' => 'lwp-footer-callout-section',
	'settings' => 'lwp-footer-callout-link',
	'type' => 'dropdown-pages'
) ));


$wp_customize->add_setting('lwp-footer-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-footer-callout-cropped-image-control', array(
	'label' => 'image',
	'section' => 'lwp-footer-callout-section',
	'settings' => 'lwp-footer-callout-cropped-image',
	'width' => 500,
	'height' => 500
) ));

}
add_action('customize_register','lwp_footer_callout');
//footer dynamic end


//posts pictures dynamic

function lwp_post_callout($wp_customize){
	$wp_customize->add_section('lwp-post-callout-section',array(
	'title' => 'Ultimate Data Encryption callout'
));

$wp_customize->add_setting('lwp-post-callout-display',array(
	'default' => 'No'
));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-post-callout-display-control', array(
	'label' => 'Display this?',
	'section' => 'lwp-post-callout-section',
	'settings' => 'lwp-post-callout-display',
	'type' => 'select',
	'choices' => array('No' => 'No', 'Yes' => 'Yes')
) ));



$wp_customize->add_setting('lwp-post-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-post-callout-cropped-image-control', array(
	'label' => 'image',
	'section' => 'lwp-post-callout-section',
	'settings' => 'lwp-post-callout-cropped-image',

)));

}

add_action('customize_register','lwp_post_callout');
//post pic end

//post background

function lwp_postb_callout($wp_customize){
	$wp_customize->add_section('lwp-postb-callout-section',array(
	'title' => 'Protect your privacy background callout'
));


$wp_customize->add_setting('lwp-postb-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-postb-callout-cropped-image-control', array(
	'label' => 'image',
	'section' => 'lwp-postb-callout-section',
	'settings' => 'lwp-postb-callout-cropped-image',
	'width' => 1800,
	'height' => 500
) ));

}

add_action('customize_register','lwp_postb_callout');

//zen vpn background
function lwp_Zenback_callout($wp_customize){
	$wp_customize->add_section('lwp-Zenback-callout-section',array(
	'title' => 'ZEN VPN background callout'
));

$wp_customize->add_setting('lwp-Zenback-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-Zenback-callout-image-control', array(
	'label' => 'image',
	'section' => 'lwp-Zenback-callout-section',
	'settings' => 'lwp-Zenback-callout-image',
	'width' => 1800,
	'height' => 500
) ));
}

add_action('customize_register','lwp_Zenback_callout');



//features
//back
function lwp_featureb_callout($wp_customize){
	$wp_customize->add_section('lwp-featureb-callout-section',array(
	'title' => 'Features page callout'
));
$wp_customize->add_setting('lwp-featureb-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-featureb-callout-cropped-image-control', array(
	'label' => 'Background Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-featureb-callout-cropped-image',
	'width' => 1800,
	'height' => 500
) ));


//software

$wp_customize->add_setting('lwp-soft-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-soft-callout-cropped-image-control', array(
	'label' => 'Software and apps Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-soft-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//compatible
$wp_customize->add_setting('lwp-com-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-com-callout-cropped-image-control', array(
	'label' => 'Compatible with Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-com-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));

//servers in country
$wp_customize->add_setting('lwp-countries-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-countries-callout-cropped-image-control', array(
	'label' => 'Servers in country',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-countries-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));

//multi log in
$wp_customize->add_setting('lwp-log-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-log-callout-cropped-image-control', array(
	'label' => 'Multi log in Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-log-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));

//access all servers
$wp_customize->add_setting('lwp-access-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-access-callout-cropped-image-control', array(
	'label' => 'Access all servers Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-access-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//unlimited servers
$wp_customize->add_setting('lwp-server-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-server-callout-cropped-image-control', array(
	'label' => 'Unlimited servers Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-server-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//unlimited data 
$wp_customize->add_setting('lwp-data-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-data-callout-cropped-image-control', array(
	'label' => 'Unlimited data transfer Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-data-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//split tunneling
$wp_customize->add_setting('lwp-split-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-split-callout-cropped-image-control', array(
	'label' => 'split tunneling Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-split-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));




//99.99% uptime

$wp_customize->add_setting('lwp-uptime-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-uptime-callout-cropped-image-control', array(
	'label' => '99.99% uptime Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-uptime-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//live chat
$wp_customize->add_setting('lwp-chat-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-chat-callout-cropped-image-control', array(
	'label' => 'Live chat Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-chat-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//security and feature
//no 3rd party
$wp_customize->add_setting('lwp-no-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-no-callout-cropped-image-control', array(
	'label' => 'no 3rd party Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-no-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//data encryption
$wp_customize->add_setting('lwp-encryption-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-encryption-callout-cropped-image-control', array(
	'label' => 'data encryption Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-encryption-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//multiple protocols
$wp_customize->add_setting('lwp-multiple-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-multiple-callout-cropped-image-control', array(
	'label' => 'Multiple protocols Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-multiple-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//open vpn
$wp_customize->add_setting('lwp-openvpn-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-openvpn-callout-cropped-image-control', array(
	'label' => 'Open VPN Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-openvpn-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//automatic protocol
$wp_customize->add_setting('lwp-protocol-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-protocol-callout-cropped-image-control', array(
	'label' => 'Automatic protocol Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-protocol-callout-cropped-image',
	'width' => 100,
    'height' => 101
	) ));


//wifi security
$wp_customize->add_setting('lwp-wifi-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-wifi-callout-cropped-image-control', array(
	'label' => 'Wifi security Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-wifi-callout-cropped-image',
	'width' => 100,
    'height' => 101) ));


//dedicated ip
$wp_customize->add_setting('lwp-ips-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-ips-callout-cropped-image-control', array(
	'label' => 'Dedicated ip Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-ips-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



// over 80,000+IPs
$wp_customize->add_setting('lwp-ip-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-ip-callout-cropped-image-control', array(
	'label' => '80000 ips Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-ip-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//internet kill
$wp_customize->add_setting('lwp-internet-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-internet-callout-cropped-image-control', array(
	'label' => 'Internet Kill Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-internet-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));



//NAT FireWall
$wp_customize->add_setting('lwp-firewall-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-firewall-callout-cropped-image-control', array(
	'label' => 'NAT Firewall Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-firewall-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//DDos Protection
$wp_customize->add_setting('lwp-ddos-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-ddos-callout-cropped-image-control', array(
	'label' => 'DSos protection Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-ddos-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//zen
//smart purpose
$wp_customize->add_setting('lwp-smart-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-smart-callout-cropped-image-control', array(
	'label' => 'Smart purpose',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-smart-callout-cropped-image',
	'width' => 100,
    'height' => 100
) ));


//fastest vpn 
$wp_customize->add_setting('lwp-fastest-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-fastest-callout-cropped-image-control', array(
	'label' => 'fastest vpn Image',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-fastest-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));


//defeats isp
$wp_customize->add_setting('lwp-defeats-callout-cropped-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-defeats-callout-cropped-image-control', array(
	'label' => 'Defeats isp ',
	'section' => 'lwp-featureb-callout-section',
	'settings' => 'lwp-defeats-callout-cropped-image',
	'width' => 100,
    'height' => 101
) ));
}


add_action('customize_register','lwp_featureb_callout');



//BLOG
function lwp_blog_callout($wp_customize){
	$wp_customize->add_section('lwp-blog-callout-section',array(
	'title' => 'Blog callout'
));

$wp_customize->add_setting('lwp-enhance-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-enhance-callout-image-control', array(
	'label' => 'enhance image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-enhance-callout-image',
	
) ));


$wp_customize->add_setting('lwp-johnny-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-johnny-callout-image-control', array(
	'label' => 'bad ad johnny image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-johnny-callout-image',
) ));


$wp_customize->add_setting('lwp-ddos-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-ddos-callout-image-control', array(
	'label' => 'DDOS protected image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-ddos-callout-image',
) ));

$wp_customize->add_setting('lwp-updates-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-updates-callout-image-control', array(
	'label' => 'VPN UPDATES image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-updates-callout-image',
'width' => 500,
	'height' => 700
) ));

$wp_customize->add_setting('lwp-pri-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-pri-callout-image-control', array(
	'label' => 'interview image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-pri-callout-image',
'width' => 500,
	'height' => 700
) ));

$wp_customize->add_setting('lwp-how-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-how-callout-image-control', array(
	'label' => 'how to skype image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-how-callout-image',
'width' => 500,
	'height' => 700
) ));

$wp_customize->add_setting('lwp-secure-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-secure-callout-image-control', array(
	'label' => 'Secure access point image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-secure-callout-image',
'width' => 500,
	'height' => 700
) ));

$wp_customize->add_setting('lwp-happ-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-happ-callout-image-control', array(
	'label' => 'What happens to online image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-happ-callout-image',
'width' => 500,
	'height' => 700
) ));

$wp_customize->add_setting('lwp-em-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-em-callout-image-control', array(
	'label' => 'How to keep email image',
	'section' => 'lwp-blog-callout-section',
	'settings' => 'lwp-em-callout-image',
	'width' => 500,
	'height' => 700
) ));


}

add_action('customize_register','lwp_blog_callout');



//privacy policy

function lwp_policy_callout($wp_customize){
	$wp_customize->add_section('lwp-policy-callout-section',array(
	'title' => 'Privacy policy callout'
));

$wp_customize->add_setting('lwp-privacyback-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-privacyback-callout-image-control', array(
	'label' => 'Privacy background image',
	'section' => 'lwp-policy-callout-section',
	'settings' => 'lwp-privacyback-callout-image',
	'width' => 1800,
	'height' => 500
) ));

$wp_customize->add_setting('lwp-privacybd-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-privacybd-callout-image-control', array(
	'label' => 'Privacy bad ad johny background image',
	'section' => 'lwp-policy-callout-section',
	'settings' => 'lwp-privacybd-callout-image',
	'width' => 1800,
	'height' => 2000
) ));

}

add_action('customize_register','lwp_policy_callout');



//server location

function lwp_server_callout($wp_customize){
	$wp_customize->add_section('lwp-server-callout-section',array(
	'title' => 'Server location callout'
));

$wp_customize->add_setting('lwp-serback-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-serback-callout-image-control', array(
	'label' => 'Server location background image',
	'section' => 'lwp-server-callout-section',
	'settings' => 'lwp-serback-callout-image',
	'width' => 1800,
	'height' => 400
) ));

}

add_action('customize_register','lwp_server_callout');

//terms
function lwp_term_callout($wp_customize){
	$wp_customize->add_section('lwp-term-callout-section',array(
	'title' => 'terms of service callout'
));

$wp_customize->add_setting('lwp-termb-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-termb-callout-image-control', array(
	'label' => 'Term of service background image',
	'section' => 'lwp-term-callout-section',
	'settings' => 'lwp-termb-callout-image',
	'width' => 1800,
	'height' => 500
) ));

}

add_action('customize_register','lwp_term_callout');


//why zen

function lwp_Why_callout($wp_customize){
	$wp_customize->add_section('lwp-Why-callout-section',array(
	'title' => 'Why zen vpn callout'
));


$wp_customize->add_setting('lwp-startb-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-startb-callout-image-control', array(
	'label' => 'start new journey background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-startb-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-greatb-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-greatb-callout-image-control', array(
	'label' => 'Greater experience background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-greatb-callout-image',
	'width' => 500,
	'height' => 500
) ));


$wp_customize->add_setting('lwp-work-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-work-callout-image-control', array(
	'label' => 'How vpn works',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-work-callout-image',
	'width' => 1800,
	'height' => 300
) ));



$wp_customize->add_setting('lwp-int-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-int-callout-image-control', array(
	'label' => 'Secure internet connection background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-int-callout-image',
	'width' => 500,
	'height' => 500
) ));


$wp_customize->add_setting('lwp-wifi-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-wifi-callout-image-control', array(
	'label' => 'Secure wifi connection background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-wifi-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-dat-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-dat-callout-image-control', array(
	'label' => 'data sniffer background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-dat-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-Safeguard-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-Safeguard-callout-image-control', array(
	'label' => 'Safeguard background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-Safeguard-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-avoid-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-avoid-callout-image-control', array(
	'label' => 'Avoid third party background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-avoid-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-packet-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-packet-callout-image-control', array(
	'label' => 'ISP Packet Inspection background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-packet-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-iden-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-iden-callout-image-control', array(
	'label' => 'Protect your identity background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-iden-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-geo-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-geo-callout-image-control', array(
	'label' => 'Prevent Geo Targeting background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-geo-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-surf-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-surf-callout-image-control', array(
	'label' => 'Surf internet background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-surf-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-voip-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-voip-callout-image-control', array(
	'label' => 'connecting voip services background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-voip-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-isp-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-isp-callout-image-control', array(
	'label' => 'Overcoming ISP Speed background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-isp-callout-image',
	'width' => 500,
	'height' => 500
) ));



$wp_customize->add_setting('lwp-ultra-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-ultra-callout-image-control', array(
	'label' => 'experience ultra fast background image',
	'section' => 'lwp-Why-callout-section',
	'settings' => 'lwp-ultra-callout-image',
	'width' => 500,
	'height' => 500
) ));

}

add_action('customize_register','lwp_Why_callout');


?>