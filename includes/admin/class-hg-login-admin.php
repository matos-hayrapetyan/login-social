<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class hg_login_Admin {

    /**
     * Array of pages in admin
     * @var array
     */
    public $pages = array();

    /**
     * Instance of hg_login_Settings class
     *
     * @var hg_login_Settings
     */
    public $featured_plugins = null;

    /**
     * hg_login_Admin constructor.
     */
    public function __construct(){
        $this->init();
        add_action('admin_menu',array($this,'admin_menu'));
        add_action( 'wpdev_settings_hg_login_header', array( $this, 'print_banners' ) );
        add_action( 'hg_login_featured_plugins_header', array( $this, 'print_banners' ) );
    }

    /**
     * Initialize Plugin's admin
     */
    protected function init(){
        $this->featured_plugins = new hg_login_Featured_Plugins();
    }

    /**
     * Creates Admin Menu Pages
     */
    public function admin_menu(){
        $this->pages['featured-plugins'] =add_submenu_page( 'hg_login', __( 'Featured Plugins', 'hg_login' ), __( 'Featured Plugins', 'hg_login' ), 'manage_options', 'hg_login_featured_plugins', array( hg_login()->admin->featured_plugins,'init_admin' ) );

        foreach($this->pages as $page){
            add_action('load-'.$page, array( $this, 'help_tabs' ) );
        }
    }

    public function help_tabs(){
        get_current_screen()->add_help_tab( array(
            'id'		=> 'overview',
            'title'		=> __('Overview'),
            'content'	=>
                '<p>' . __('This is Login WP Plugin Settings Page.') . '</p>'
        ) );
        get_current_screen()->add_help_tab( array(
            'id'		=> 'usage',
            'title'		=> __('Usage'),
            'content'	=>
                '<p>' . __('This is Login WP Plugin Usage.') . '</p>'
        ) );
        get_current_screen()->set_help_sidebar(
            '<p><strong>' . __('For more information:') . '</strong></p>' .
            '<p>' . __('<a href="https://codex.wordpress.org/Posts_Screen" target="_blank">FAQ</a>') . '</p>' .
            '<p>' . __('<a href="https://wordpress.org/support/" target="_blank">User Manual</a>') . '</p>'
        );
    }

    /**
     * Print banners for admin
     */
    public function print_banners(){
        HG_Login_Template_Loader::get_template('admin/free-banner.php');
        HG_Login_Template_Loader::get_template('admin/christmas-banner.php');
    }


}

