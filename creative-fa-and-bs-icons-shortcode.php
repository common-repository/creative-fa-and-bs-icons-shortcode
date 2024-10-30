<?php
/*
Plugin Name: Creative FA and BS Icons Shortcode
Plugin URI: http://learn-with-mnaopu.blogspot.com
Author: Md. Naeem Ahmed Opu
Version: 2.0
Author URI: http://profiles.wordpress.org/mnaopu
Description: This plugin Allows you to add Font-Awesome and Bootstrap Icons Easily using shortcode.
Just install and activate this plugin and use shortcode for using icons. Enjoy this plugin.
*/

//Admin Notice
function creative_fa_bs_icons_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Thanks! For Using <strong>Creative FA and BS Icons Shortcode</strong> Plugin', '' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'creative_fa_bs_icons_notice' );

// Register xternal CSS Files

function creative_fa_bs_icons_files(){
	wp_enqueue_style('font-awesome', plugins_url('/css/font-awesome.min.css', __FILE__));
	wp_enqueue_style('bootstrap', plugins_url('/css/bootstrap.min.css', __FILE__));
	  wp_register_script( 'bootstrap-js', plugins_url( 'js/bootstrap.min.js' ) );
        wp_enqueue_script( 'bootstrap' );
}
add_action('wp_enqueue_scripts', 'creative_fa_bs_icons_files');

// Register Shortcode 

function creative_fa_bs_icons_shortcode($atts, $content){
	extract(
	shortcode_atts(array(
		'color' => '#000000',
		'size' => '40px',
		'background' => '#FFF',
		'round'=> 'border-radius:40%',
		'space' => '2px'
	), $atts));


	return '<i class="fa fa-'.$content.'" style="color:'.$color.'
	;font-size:'.$size.'
	;background:'.$background.'; '.$round.'; padding:'.$space.'"></i>';
}
add_shortcode('icon', 'creative_fa_bs_icons_shortcode');









?>