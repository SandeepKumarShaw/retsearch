<?php
   /*
   Plugin Name: RETS Search
   Plugin URI: https://tier5.us/
   Description: Using this plugin user can search easily.
   Version: 1.0
   Author: tier5
   Author URI: https://tier5.us/
   License: GPL2
   */
ob_start();
if ( ! defined( 'ABSPATH' ) ) {
  die( 'Error!' );
}

define('RETS_ROOT_DIR', dirname(__FILE__));
define('RETS_API_DIR', RETS_ROOT_DIR.'/api');
require_once( RETS_API_DIR.'/rets-search.class.php' );
require_once( 'asbt-admin/asbt-admin-options.php' );


function advanced_rets_shortcode($atts) { 
extract(shortcode_atts(array(
    'action' => $atts
), $atts));
include('templates/property-searchtemplate.php');
}
function advanced_rets_shortcode_result($atts) { 
include('templates/rets_search.php');
}
function asbt_form_shortcode() {     
include('templates/advance_search.php'); 
}
function asbt_photo_gallery_shortcode() {     
include('templates/property-photo-gallery.php'); 
} 
function asbt_property_details_shortcode() {     
include('templates/property-details.php'); 
}
function asbt_mortgage_shortcode() {     
include('templates/mortgae-search-details.php'); 
}
function asbt_printableflyer_shortcode() {     
include('templates/PrintableFlyer.php'); 
}
function add_rets_search_stylesheet(){
    wp_register_style( 'wp-rets-search-css', plugins_url('/asbt-admin/wp-rets-search-css.css', __FILE__) );
    wp_enqueue_style( 'wp-rets-search-css' );  

    /*if( ! wp_script_is( 'bootstrap.min.css', 'enqueued' ) ) { 
    wp_register_style( 'bootstrap.min.css', plugins_url('/assets/css/bootstrap.min.css', __FILE__) );
    wp_enqueue_style( 'bootstrap.min.css' );
    } 
    if( ! wp_script_is( 'bootstrap.multiselect', 'enqueued' ) ) { 
    wp_register_style( 'bootstrap.multiselect', plugins_url('/assets/css/bootstrap.multiselect.css', __FILE__) );
    wp_enqueue_style( 'bootstrap.multiselect' );
   } 
   if( ! wp_script_is( 'font-awesome.min', 'enqueued' ) ) { 
   wp_register_style( 'font-awesome.min', plugins_url('/assets/css/font-awesome.min.css', __FILE__) );
    wp_enqueue_style( 'font-awesome.min' );
   }    
  if( ! wp_script_is( 'bootstrap.min', 'enqueued' ) ) { 
    wp_register_script('bootstrap.min', plugins_url('/assets/js/bootstrap.min.js', __FILE__), array('jquery'), '', true);
    wp_enqueue_script('bootstrap.min');
  } 
  if( ! wp_script_is( 'jquery.min', 'enqueued' ) ) { 
    wp_register_script('jquery.min', plugins_url('/assets/js/jquery.min.js', __FILE__), array('jquery'), '', true);
    wp_enqueue_script('jquery.min');
  }
  if( ! wp_script_is( 'bootstrap.multiselect', 'enqueued' ) ) { 
    wp_register_script('bootstrap.multiselect', plugins_url('/assets/js/bootstrap.multiselect.js', __FILE__), array('jquery'), '', true);
    wp_enqueue_script('bootstrap.multiselect');
  } */
}
add_action( 'wp_enqueue_scripts', 'add_rets_search_stylesheet' );

function load_rets_search_wp_admin_style($hook) {
    if($hook != 'toplevel_page_asbt_page_options') {
        return;
    }
    wp_enqueue_style( 'rets_search_admin_css', plugins_url('rets_search_admin_css.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'load_rets_search_wp_admin_style' );
add_shortcode('global_rets_search', 'advanced_rets_shortcode');
add_shortcode('global_rets_search_result', 'advanced_rets_shortcode_result');
add_shortcode('advanced_rets_search', 'asbt_form_shortcode');
add_shortcode('property_photo_gallery', 'asbt_photo_gallery_shortcode');
add_shortcode('property_details', 'asbt_property_details_shortcode');
add_shortcode('rets_mortgage_page', 'asbt_mortgage_shortcode');
add_shortcode('rets_printableflyer_page', 'asbt_printableflyer_shortcode');
ob_end_clean();

function get_lat_lng($search_result){
    if(empty((array) $search_result)){
        return false;
    }else{
    foreach ($search_result->listing as $add => $address) {

       /* $formattedAddr = str_replace(' ','+',$address->propertyadditional->PublicAddress);
        $final_address=$formattedAddr.'+'.$address->PostalCode;
        $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$final_address.'&key=AIzaSyDSAFJNI-cBvYbEyBGEGY9B5m62_mWFqRc'); 
        $output = json_decode($geocodeFromAddr);
        $data[$add]['latitude'] = $output->results[0]->geometry->location->lat; 
        $data[$add]['longitude'] = $output->results[0]->geometry->location->lng;
        $data[$add]['formatted_address'] = $output->results[0]->formatted_address;*/

        $data[$add]['latitude'] = $address->propertylatlong->latitude;
$data[$add]['longitude'] = $address->propertylatlong->longitude;
$data[$add]['formatted_address'] = $address->propertylatlong->FormatedAddress;

    //Return latitude and longitude of the given address
    }

    return $data;
    }
}


function get_property_listing($search_result){
    $data = get_lat_lng($search_result);
    ob_start();  
    require_once RETS_ROOT_DIR.'/templates/property-listing.php';
    return ob_get_clean();
}

add_filter( 'plugin_action_links', 'rets_search_activation', 10, 5 );

function rets_search_activation( $actions, $plugin_file ){
    static $plugin;

    if (!isset($plugin))
    $plugin = plugin_basename(__FILE__);
    if ($plugin == $plugin_file) {

    $settings = array('settings' => '<a href="admin.php?page=rets-search-settings">' . __('Settings', 'General') . '</a>');
    $site_link = array('support' => '<a href="https://tier5.us/"; target="_blank">Support</a>');

    $actions = array_merge($settings, $actions);
    $actions = array_merge($site_link, $actions);

    }

    return $actions;
}