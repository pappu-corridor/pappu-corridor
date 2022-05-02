<?php

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_single()) {
		if(is_product())
		{
			echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp; <a href="'.get_site_url().'/shop/">Product</a> &nbsp;&nbsp;&#187;&nbsp;&nbsp; ';
		}
		else 
		{
			echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp; <a href="'.get_post_type_archive_link( 'post' ).'">Blog</a> &nbsp;&nbsp;&#187;&nbsp;&nbsp; ';
		}
        
                the_title();
    } elseif (is_category()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_category(' &bull; ');
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function load_sidebar()
{        register_sidebar(
        array(
            'name' => 'sidebar',
            'id' => 'sidebar',
            'description' => 'Sidebar',
            'before_widget' => '<div class="sidebar sidebar__right">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="sidebar__title">',
            'after_title' => '</h3>',
        )
    );
    
    
    register_sidebar(
        array(
            'name' => 'Footer1',
            'id' => 'FooterWidget1',
            'description' => 'Footer Column 1',
            'before_widget' => '<div class="FooterWidget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name' => 'Footer2',
            'id' => 'FooterWidget2',
            'description' => 'Footer Column 2',
            'before_widget' => '<div class="FooterWidget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name' => 'Footer3',
            'id' => 'FooterWidget3',
            'description' => 'Footer Column 3',
            'before_widget' => '<div class="FooterWidget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
}

add_action('widgets_init','load_sidebar');

add_theme_support('post-thumbnails');

add_theme_support( 'custom-logo' );

add_theme_support('woocommerce');

// function my_theme_woocommerce_support()
// {
//     add_theme_support('woocommerce');
    
// }
// add_action('after_setup_theme', 'my_theme_woocommerce_support');

add_shortcode ('woo_cart_but', 'woo_cart_but' );

function woo_cart_but()
{
	ob_start();
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
?>
        <a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket"><i class="fa fa-shopping-cart"></i>
<?php if ($cart_coun> 0){ ?>
    <span class="cart-contents-count"><?php echo $cart_count; ?> Items</span>
<?php } ?>
    </a>
<?php 
return ob_get_clean();
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
function woo_cart_but_count($fragments)
{
    ob_start();
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    
?>
    <a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart"></i>
<?php
    if($cart_count > 0)
    {
?>
        <span class="cart-contents-count"><?php echo $cart_count; ?> Items</span>
<?php            
    }
?>
    </a>
<?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
}



function myshoptheme_customizer($wp_customize)
{
    $wp_customize->add_section('social_details',
        array(
            'title' =>  __( 'Social Links' ),
            'priority'  =>  40,
        )
    );
    
    $wp_customize->add_setting('Facebook',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Facebook_Control',
        array(
            'label' => __('Facebook'),
            'section' => 'social_details',
            'settings'    => 'Facebook',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Enter Social Link' ),
            ),
        )
    );
    
    $wp_customize->add_setting('Twitter',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Twitter_Control',
        array(
            'label' => __('Twitter'),
            'section' => 'social_details',
            'settings'    => 'Twitter',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Enter Social Link' ),
            ),
        )
    );
    
    $wp_customize->add_setting('LinkedIn',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('LinkedIn_Control',
        array(
            'label' => __('LinkedIn'),
            'section' => 'social_details',
            'settings'    => 'LinkedIn',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Enter Social Link' ),
            ),
        )
    );
    
    $wp_customize->add_setting('Instagram',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Instagram_Control',
        array(
            'label' => __('Instagram'),
            'section' => 'social_details',
            'settings'    => 'Instagram',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Enter Social Link' ),
            ),
        )
    );
    
    
    $wp_customize->add_section('contact_details',
        array(
            'title' =>  __( 'Contact Details' ),
            'priority'  =>  40,
        )
    );
    
    $wp_customize->add_setting('Address',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Address_Control',
        array(
            'label' => __('Address'),
            'section' => 'contact_details',
            'settings'    => 'Address',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Enter Address' ),
            ),
        )
    );
    
    $wp_customize->add_setting('Phone_Support',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Sales_Support_Control',
        array(
            'label' => __('Phone Support'),
            'section' => 'contact_details',
            'settings'    => 'Phone_Support',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Phone Support Details' ),
            ),
        )
    );
    
    $wp_customize->add_setting('Email_Support',
        array(
            'default' => '',
            'transport' => 'refresh'
        )
    );
    
    $wp_customize->add_control('Email_Support_Control',
        array(
            'label' => __('Email Support'),
            'section' => 'contact_details',
            'settings'    => 'Email_Support',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => 'my-custom-class',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __( 'Email Support Details' ),
            ),
        )
    );
}
add_action('customize_register','myshoptheme_customizer');

