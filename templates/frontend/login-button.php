<?php
/**
 * Login Button Template
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$text = isset( $atts['text'] ) ? $atts['text'] : __( 'Login', 'hg_login' );
?>
<?php do_action("hg_login_before_login_button_wrapper"); ?>
<div class="hg_login_button_wrapper -inline-block">
    <?php do_action("hg_login_before_login_button"); ?>

    <div id="hg_login_primary_button" class="hg-login-button hg_login_button primary hg_login_open_login_button"><?php echo $text; ?></div>

    <?php do_action("hg_login_after_login_button"); ?>
</div>
<?php do_action("hg_login_after_login_button_wrapper"); ?>
