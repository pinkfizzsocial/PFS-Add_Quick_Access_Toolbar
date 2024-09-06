<?php
/*
* Plugin Name: PFS-Add Quick Access Toolbar
* Description: This plugin will add a quick access Toolbar to the Admin Bar
* Version: 1.0.5
* Author: Pink Fizz Social
* Author URI: http://pinkfizz.social
* License: GPL2
*/

/**
 * Add Quick Access Toolbar
 */
// First level menu
add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
	$admin_bar->add_menu( array(
		'id'    => 'my-item',
		'title' => 'PFS QA', // Your menu title
		'href'  => '', // URL
		'meta'  => array(
		 'target' => '_blank',
		),
	));	
  // Submenus	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Orders', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=shop_order', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Products', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=product', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Export Orders', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=wc-order-export#segment=common', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Export Orders-Profiles', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=wc-order-export&tab=profiles', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Export Orders-RoyalMail', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=wc-order-export&tab=profiles&wc_oe=edit_profile&profile_id=3', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Subscriptions', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=shop_subscription', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Automate Workflows', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=aw_workflow', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Woo Coupons', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=shop_coupon', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - All', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=page', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - Published', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_status=publish&post_type=page', // URL
		'meta'  => array(
		),
	));

	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - Scheduled', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_status=future&post_type=page', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - Drafts', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_status=draft&post_type=page', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - SIL2024', // Your submenu title
		'href'  => '/wp-admin/edit.php?s&post_status=publish&post_type=page&action=-1&m=0&cat=176&seo_filter&readability_filter&filter_action=Filter&paged=1&action2=-1', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Pages - SIL2025', // Your submenu title
		'href'  => '/wp-admin/edit.php?s&post_status=publish&post_type=page&action=-1&m=0&cat=161&seo_filter&readability_filter&filter_action=Filter&paged=1&action2=-1', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Lessons', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=mpcs-lesson', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Courses', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=mpcs-course', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Memberships', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=memberpressproduct', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Rules', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=memberpressrule', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Downloads', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=mpdl-file', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Settings', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=memberpress-options#mepr-license', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Transactions', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=memberpress-trans', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'MP Reports', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=memberpress-reports', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Elementor Templates', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=elementor_library&tabs_group=library', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Elementor Theme Builder', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=elementor-app&ver=3.6.7#/site-editor/templates', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Elementor Landing Pages', // Your submenu title
		'href'  => '/wp-admin/edit.php?post_type=e-landing-page', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Menus', // Your submenu title
		'href'  => '/wp-admin/nav-menus.php', // URL
		'meta'  => array(
		),
	));		
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Users', // Your submenu title
		'href'  => '/wp-admin/users.php', // URL
		'meta'  => array(
		),
	));
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Affiliates', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=yith_wcaf_panel&tab=affiliates&sub_tab=affiliates-list', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Edit Functions', // Your submenu title
		'href'  => '/wp-admin/theme-editor.php?file=functions.php&theme=astra-child-theme', // URL
		'meta'  => array(
		),
	));		
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Plugins', // Your submenu title
		'href'  => '/wp-admin/plugins.php', // URL
		'meta'  => array(
		),
	));		
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Add New Plugins', // Your submenu title
		'href'  => '/wp-admin/plugin-install.php', // URL
		'meta'  => array(
		),
	));	
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'WP Pusher Plugins', // Your submenu title
		'href'  => '/wp-admin/admin.php?page=wppusher-plugins', // URL
		'meta'  => array(
		),
	));		
	$admin_bar->add_menu( array(
		'parent' => 'my-item',
		'title' => 'Media in S3', // Your submenu title
		'href'  => '/wp-admin/options-general.php?page=amazon-s3-and-cloudfront', // URL
		'meta'  => array(
		),
	));		
}