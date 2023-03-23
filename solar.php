<?php

/*
Plugin Name: Solar Data
Description: This is sample
Version: 1.0
Author: Avologic
Author URI: https//avologic.com
*/
ob_start();
if(!defined('ABSPATH')) {
	die("Cant Access!");
}


function solar_activation() {
	global $wpdb;
}

register_activation_hook(__FILE__, 'solar_activation');

function solar_deactivation() {
	

}
register_deactivation_hook(__FILE__, 'solar_deactivation');

require_once('engine.php');
//Test();
Send();

// register jquery and style on initialization
add_action('init', 'register_script');
function register_script(){
	$ver = filemtime(plugin_dir_path(__FILE__).'js/main.js');
	$ver_style = filemtime(plugin_dir_path(__FILE__).'css/main.css');
	wp_register_script( 'custom_jquery', plugins_url('/js/main.js', __FILE__), array('jquery'), $ver, true);
	wp_register_script( 'avologic-ajax-js', plugins_url('/js/ajax.js', __FILE__), array('jquery'), $ver+255, true);
	wp_register_script('avologic-fontawesome', plugins_url('/js/fontawesome.min.js', __FILE__), array('jquery'), $ver+200, true);
	wp_register_style( 'new_style', plugins_url('/css/main.css', __FILE__), false, $ver_style, 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
	wp_enqueue_script('custom_jquery');
	wp_enqueue_script('avologic-ajax-js');
	wp_enqueue_style( 'new_style' );
	wp_localize_script('custom_jquery', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action( 'wp_ajax_getAllSolarData', 'getAllSolarData' );
add_action( 'wp_ajax_nopriv_getAllSolarData', 'getAllSolarData' );
function getAllSolarData() {
	global $wpdb;
	$q = "select *from wp_solar_data";
	$rs = $wpdb->get_results($q, OBJECT); ?>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
	<script type="text/javascript">
  const SolarData = <?php echo json_encode($rs); ?>;
</script>

	<?php
	 include_once('template.php');
  $html = ob_get_clean();
  return $html;
}

add_action( 'wp_ajax_Avologic_Get_Row', 'Avologic_Get_Row' );
function Avologic_Get_Row() {
	global $wpdb;
	//$q = "SELECT * FROM `wp_solar_data` WHERE type='$cv' and quantity = '$rv'";

	die();
}
add_action( 'wp_ajax_Avologic_Get_Row', 'Avologic_Get_Row' );
add_action( 'wp_ajax_Avologic_Get_Row', 'Avologic_Get_Row' );
add_action( 'wp_ajax_nopriv_Avologic_Get_Row', 'Avologic_Get_Row' );


add_shortcode('getAllSolarData', 'getAllSolarData');

?>