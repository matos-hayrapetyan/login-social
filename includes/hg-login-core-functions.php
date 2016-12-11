<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function hg_login_maybe_redirect_from_loginscreen(){
    if( HG_Login()->is_request('ajax') || HG_Login()->is_request( 'cron' ) || isset( $_REQUEST['interim-login'] ) ){
        return false;
    }
    if( HG_Login()->settings->redirect_from_loginscreen === 'yes' ){
        if( !is_user_logged_in() ){
            setcookie( 'hg_login_action', 'open_login_popup');
        }

        if (isset($_GET['key']) && $_GET['key'] === 'lostpassword') {
            setcookie('hg_login_action', 'open_forgotpass_popup');
        }

        $redirect_to = apply_filters( 'hg_login_redirect_to_from_loginscreen', home_url() );
        wp_redirect( $redirect_to );
        exit();
    }
}

function hg_login_login_button($args){
    echo hg_login_get_login_button($args);
}

function hg_login_get_login_button($args){
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/login-button.php',$args);
    return ob_get_clean();
}

function hg_login_signup_button($args){
    echo hg_login_get_signup_button($args);
}

function hg_login_get_signup_button($args){
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/signup-button.php', $args);
    return ob_get_clean();
}

function hg_login_get_login_popup_content() {
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/login-popup.php');
    return ob_get_clean();
}

function hg_login_get_signup_popup_content() {
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/signup-popup.php');
    return ob_get_clean();
}


function hg_login_get_forgotpass_popup_content(){
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/forgot-pass-popup.php');
    return ob_get_clean();
}

function hg_login_get_resetpass_popup_content(){
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/reset-pass-popup.php');
    return ob_get_clean();
}

function hg_login_get_account_menu(){
    ob_start();
    HG_Login_Template_Loader::get_template('frontend/account-menu.php');
    return ob_get_clean();
}

function hg_login_current_user_dropdown_menu(){
    $menu_items = HG_Login()->settings->account_dropdown_menu;

    if( is_array( $menu_items ) && !empty($menu_items) ){
        HG_Login_Template_Loader::get_template('frontend/account-dropdown-menu.php', array( 'menu_items' => $menu_items ));
    }
}

function hg_login_get_default_acc_dropdown_menu(){
    $default_menu = array(
        'titles' => array(
            0 => __('My account','hg_login'),
            1 => __('Logout','hg_login')
        ),
        'links' => array(
            0 => '{profile_link}',
            1 => '{logout_link}'
        )
    );

    return $default_menu;
}

function hg_login_acc_menu_option_line( $title, $link ){
    $html = '<li>';
    $html .= '<span class="hg_login_drag"><i class="fa fa-arrows" aria-hidden="true"></i></span>';
    $html .= '<input class="hg_login_acc_item_title" name="wpdev_options[account_dropdown_menu][titles][]" type="text" value="'.$title.'" placeholder="'.__( 'Title', 'hg_login' ).'" />';
    $html .= '<input class="hg_login_acc_item_link" name="wpdev_options[account_dropdown_menu][links][]" type="text" value="'.$link.'" placeholder="'.__( 'Link', 'hg_login' ).'" />';
    $html .= '<span class="hg_login_del_acc_item">X</span>';
    $html .= '</li>';

    return $html;
}