<html>
    <head>
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
        

    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPrata&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/hover-min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/plugins/egypt-icons/style.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/nouislider.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/nouislider.pips.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/responsive.css">
        
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <section class="topbar-one">
            <div class="container-fluid">
                <div class="inner-container">
                    <div class="topbar-one__left">
                        <a href="#" class="topbar-one__link"><i>Museum Hours :</i>
                            <span class="topbar-one__time-wrap">
                                <span class="topbar-one__time">9 AM</span>
                                <!-- /.topbar-one__time -->
                                <span class="topbar-one__sep"></span>
                                <span class="topbar-one__time">7 PM</span>
                                <!-- /.topbar-one__time -->
                            </span><!-- /.topbar-one__time-wrap -->
                        </a>
                        <a href="##map" class="topbar-one__link"> <i>Location :</i>
                            <!-- /.egypt-icon-maps-and-location -->29 Sterling Rd, Mt. Pocono PA 18344</a><!-- /.topbar-one__link -->
                            
                            <a href="##map" class="topbar-one__link"> <i>Email :</i> info@womenveteransmuseum.com</a>
                            
                            <a href="#" class="topbar-one__link search-popup__toggler"><i class="egypt-icon-email"></i> Join The Community</a>
                    </div><!-- /.topbar-one__left -->
                    <ul class="topbar-one__right list-unstyled">
                        <li>
                            <div class="topbar-one__social">
                                <a href="#"><i class="egypt-icon-logo" target="_blank"></i></a>
                                <a href="#"><i class="egypt-icon-twitter" target="_blank"></i></a>
                                <a href="https://www.instagram.com/womenveteransmuseum/" target="_blank"><i class="egypt-icon-instagram"></i></a>
                                <a href="#"><i class="egypt-icon-play" target="_blank"></i></a>
                            </div><!-- /.topbar-one__social -->
                        </li>

                    </ul><!-- /.topbar-one__right -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.topbar-one -->

        <header class="site-header site-header__header-one  ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box">
                        <a class="navbar-brand" href="<?php echo get_site_url();?>">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/resources/logo.png" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        
<?php echo str_replace('menu', 'navv', wp_nav_menu(
array( 'menu' => '', 'container' => '', 'container_class' => '', 'container_id' => '',
'menu_class' => '', 'menu_id' => '','echo' => true,
'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after'
=> '', 'items_wrap' => '<ul id="%1$s" class="navigation-box @@extra_class">%3$s</ul>', 'item_spacing' =>
'preserve', 'depth' => 0, 'walker' => '', 'theme_location' => 'header-menu' )));
?>


                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a href="https://www.paypal.com/donate/?hosted_button_id=Y82YXCXQZCNLC" target="_blank" class="thm-btn side-menu__block-about__btn">Donate Now</a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->