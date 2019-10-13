<?php
/*
 * Plugin Name: Custom Post Type
	Plugin URL:
	Description: Demo of Plugin Custom Post
	Version: 1.0
	Author: osman forhad
	Author URI: https://osmanforhad.net
	License: GPLv2 or later
	Text Domain:custompostplug
	Domain Path: /languages/
 * */
class customPostType{

	/**
	 * constructor Method 
	 */
	public function __construct(){

		/**
*action hook with call back
*/
 add_action('init', array($this, 'cbx_custom_post_type'));

	}//end constructor

	 /**
  * Callback function for custom post
  */
  public function cbx_custom_post_type(){
	 
    /**
     * register post type
    */
    register_post_type(
		$post_type = 'cbx_product',//Post type key.(string) (Required)
		
       $postType_args =  array(

			$labels_name = 'labels' => array(
			$general_name =	'name' => __('products'),//General name for the post type
			$nameOf_object =	'singular_name' => __('product'),//Name for one object of this post type
			),
			$public_label = 'public' => true,//Default label for item is public
			$archive_label = 'has_archive' => true,//Label for archives in nav menus
			$custom_slug = 'rewrite'     => array( 'slug' => 'my_products' ),//Custom slug
		)
	);//end register post type
	
 }//end cbx_custom_post_type function

}//end of the class

/**
 * initiate the class
 */
new customPostType();

