<?php
/*
 Template Name: Blog
*/
get_header("blog")
?>
<div class="page-content pu-page-blog-top">
    <!--Featured Posts-->
    <section class="pu-fp-wrp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Featured Posts</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="<?php echo get_site_url();?>/blog-single" class="pu-fp-post"
                       style="background: url(<?php echo wp_get_attachment_url(get_theme_mod('lwp-enhance-callout-image')); ?>) no-repeat center #000; background-size: cover">
                        <h2>8 Tools to Enhance Your Online Privacy in 2017...</h2>
                        <span><i class="fa fa-clock-o"></i>1 month ago</span>
                        <div class="pu-img-shadow"></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="<?php echo get_site_url();?>/blog-single" class="pu-fp-post"
                       style="background: url(<?php echo wp_get_attachment_url(get_theme_mod('lwp-johnny-callout-image')); ?>) no-repeat center #000; background-size: cover">
                        <h2>Zen VPN Launches Bad Ad Johnny – An...</h2>
                        <span><i class="fa fa-clock-o"></i>3 months ago</span>
                        <div class="pu-img-shadow"></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="<?php echo get_site_url();?>/blog-single" class="pu-fp-post"
                       style="background: url(<?php echo wp_get_attachment_url(get_theme_mod('lwp-ddos-callout-image')); ?>) no-repeat center #000; background-size: cover">
                        <h2>DDOS Protected VPN – A Revolutionary Feature by...</h2>
                        <span><i class="fa fa-clock-o"></i>3 months ago</span>
                        <div class="pu-img-shadow"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Featured Posts-->
    <!--Latest Posts-->
    <section class="pu-common-p">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Latest Posts</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
                               <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-updates-callout-image')) ?>" alt="...">
                            </a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                Zen VPN Updates
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 10 hours ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">Learn and Spread Awareness on This Safer...</a></h2>
                            <p>The number of people surfing the internet is increasingly significantly each year. Not many people can claim never to                                   have used the...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
                               <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-pri-callout-image')) ?>" alt="...">
							</a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                Privacy & Security
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 14 hours ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">Interview with Dave of Travel Dave...</a></h2>
                            <p>Dave was born and raised in London. Even though he is just 26 years old, he has managed to travel to 86 countries while                                sticking to a...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
						        <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-how-callout-image')) ?>" alt="...">
							</a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                How To
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 22 hours ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">How to Access Skype Easily?...</a></h2>
                            <p>The number of people surfing the internet is increasingly significantly each year. Not many people can claim never to                                   have used the...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
							   <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-secure-callout-image')) ?>" alt="...">
							</a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                Privacy & Security
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 1 day ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">Secure Your Access Point with PureVPN’s...</a></h2>
                            <p>Managers and employees from around the world face issues when it comes to authorising remote access to the company's                                   network. Nowadays,...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
						<img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-happ-callout-image')) ?>" alt="...">
							</a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                Online Privacy
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 1 week ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">What Happens to Us Online After We Go...</a></h2>
                            <p>Your social media accounts will probably outlive you. So, what happens to them after you are gone? Well, it depends. For                              centuries, death...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail pu-thum-bor-0">
                        <div class="pu-pthum-img">
                            <a href="<?php echo get_site_url();?>/blog-single">
							<img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-em-callout-image')) ?>" alt="...">
							</a>
                        </div>
                        <div class="row pu-mt-10">
                            <div class="col-xs-6 pu-update">
                                How To
                            </div>
                            <div class="col-xs-6 pu-time">
                                <i class="fa fa-clock-o"></i> 22 hours ago
                            </div>
                        </div>
                        <div class="caption pu-cap-cont">
                            <h2><a href="<?php echo get_site_url();?>/blog-single">How to Keep E-mail Communication Confidential?...</a></h2>
                            <p>Most, if not all, individuals prefer to keep their email conversations private, because of the personal nature of these                                conversations. If...</p>
                            <div class="row pu-mt-10">
                                <div class="col-xs-6 pu-link-ul">
                                    <a href="<?php echo get_site_url();?>/blog-single">Read more..</a>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="pu-ar-shr">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Posts-->
    <?php
    get_footer();
    ?>