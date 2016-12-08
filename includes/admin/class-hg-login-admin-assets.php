<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * HG_Login_Admin_Assets Class.
 */
class HG_Login_Admin_Assets {

    /**
     * Hook in tabs.
     */
    public function __construct(){
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_styles' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
    }

    /**
     * @param $hook string
     */
    public function admin_scripts( $hook ){
        if( $hook === HG_Login()->admin->pages['featured-plugins'] ){
            wp_enqueue_script('hg-login-admin', HG_Login()->plugin_url().'/assets/js/admin.js', array('jquery'), false, true);
        }
    }

    /**
     * @param $hook string
     */
    public function admin_styles( $hook ){
        if( $hook === HG_Login()->admin->pages['featured-plugins'] ){

            wp_enqueue_style('hg-login-featured-plugins', HG_Login()->plugin_url().'/assets/css/featured-plugins.css');
            wp_enqueue_style('hg-login-admin', HG_Login()->plugin_url().'/assets/css/admin.css');


        }
    }
}
return new HG_Login_Admin_Assets();