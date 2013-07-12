<?php
/**
 * Plugin Name:     WPDK Sample View Controller #1
 * Plugin URI:      https://wpxtre.me
 * Description:     Hello World! in WordPress menu of admin area with WPDK framework - intermediate usage
 * Version:         1.0.0
 * Author:          wpXtreme
 * Author URI:      https://wpxtre.me
 * Text Domain:     wpdk-sample-view-controller-1
 * Domain Path:     localization
 */

// Include WPDK framework - the root directory name of WPDK may be different.
// Please change the line below according to your environment.
//require_once( trailingslashit( dirname( dirname( __FILE__ ))) . 'wpdk-production/wpdk.php' );
require_once( trailingslashit( dirname( dirname( __FILE__ ))) . 'wpxtreme/wpdk/wpdk.php' );

// Hook a function to the WordPress action that generates the Hello World menu item in admin menu
add_action( 'admin_menu', 'wpdk_create_admin_menu' );

// This function creates the Hello World menu item in admin menu through WPDK
function wpdk_create_admin_menu() {

  // Set my own plugin icon URL, shown in main navigation menu of WordPress Administration Screen
  $icon_menu = plugin_dir_url( __FILE__ ) . 'logo-16x16.png';

  // Build menu as an array. See documentation of method renderByArray of class WPDKMenu for details
  $menus = array(
    'wpdk_samplemenu' => array(
      // Menu title shown as first entry in main navigation menu
      'menuTitle'  => __( 'Hello Views!' ),
      // WordPress capability needed to see this menu - if current WordPress user does not have this capability, the menu will be hidden
      'capability' => 'manage_options',
      // Icon to show in menu - see above
      'icon'       => $icon_menu,
      // Create two submenu item to this main menu
      'subMenus'   => array(

        array(
          // Menu item shown as first submenu in main navigation menu
          'menuTitle'      => __( 'First View Controller' ),
          // The web page title shown when this item is clicked
          'pageTitle'  => __( 'Hello Views! First View Controller' ),
          // WordPress capability needed to see this menu item - if current WordPress user does not have this capability, this menu item will be hidden
          'capability'     => 'manage_options',
          // Function called whenever this menu item is clicked
          'viewController' => 'FirstViewController',
        ),

        array(
          'menuTitle'      => __( 'Second View Controller' ),
          'capability'     => 'manage_options',
          'viewController' => 'SecondViewController',
        ),

        array(
          'menuTitle'      => __( 'Third View Controller' ),
          'capability'     => 'manage_options',
          'viewController' => 'ThirdViewController',
        ),

        array(
          'menuTitle'      => __( 'Fourth View Controller' ),
          'capability'     => 'manage_options',
          'viewController' => 'FourthViewController',
        ),

      )
    )
  );

  // Physically build the menu added to main navigation menu when this plugin is activated
  WPDKMenu::renderByArray( $menus );

}

// TODO Replace with autoload
require_once( trailingslashit( dirname( __FILE__ ) ) . 'view-controller/first-view-controller.php' );
require_once( trailingslashit( dirname( __FILE__ ) ) . 'view-controller/second-view-controller.php' );
require_once( trailingslashit( dirname( __FILE__ ) ) . 'view-controller/third-view-controller.php' );
require_once( trailingslashit( dirname( __FILE__ ) ) . 'view-controller/fourth-view-controller.php' );