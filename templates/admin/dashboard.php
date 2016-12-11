<?php do_action('hg_login_dashboard_head'); ?>
    <div class="hg-mui-cluster">

        <div class="hg-mui-card purple animated zoomIn">
            <div class="hg-mui-card-wrap">
                <div class="hg-mui-card-text-field">
                    <h3 class="hg-mui-card-title"><?php _e('Login button', 'hg_login'); ?></h3>
                    <div class="hg-mui-card-content">
                        <p><?php _e( 'Shortcode for displaying login button.', 'hg_login' ); ?></p>
                        <p><code class="hg-mui-card-outlined">[hg-login-button]</code></p>
                        <p><b><?php _e( 'Parameters', 'hg_login' ); ?></b></p>
                        <p><i>text</i> - <?php _e( 'The text to be displayed inside button(default value is defined in plugin\'s settings)', 'hg_login' ); ?></p>
                        <p><i>show_menu</i> - <?php _e( 'Whether to show account specific menu instead of login button when user is logged in, default value is "no"', 'hg_login' ); ?></p>
                        <p><b>Example</b></p>
                        <p><?php _e('Copy & paste the shortcode directly into any WordPress post or page', 'hg_login' ); ?></p>
                        <p><code>[hg-login-button text="Login" show_menu="yes"]</code></p>
                        <p><?php _e( 'Or copy & paste this code into a template file', 'hg_login' ); ?></p>
                        <p><code>&lt;&#63;php echo do_shortcode("[hg-login-button text="Login" show_menu="yes"]"); ?&gt;</code></p>
                    </div>
                </div>
                <div class="hg-mui-card-img-block">
                    <img src="<?php echo HG_LOGIN_IMAGES_URL.'/dashboard/checked.svg' ?>" width="100" height="100" />
                </div>
            </div>
        </div>
        <div class="hg-mui-card indigo animated zoomIn">
            <div class="hg-mui-card-wrap">
                <div class="hg-mui-card-text-field">
                    <h3 class="hg-mui-card-title"><?php _e('Sign up button', 'hg_login'); ?></h3>
                    <div class="hg-mui-card-content">
                        <p><?php _e( 'Shortcode for displaying sign up button.', 'hg_login' ); ?></p>
                        <p><code class="hg-mui-card-outlined">[hg-signup-button]</code></p>
                        <p><b><?php _e( 'Parameters', 'hg_login' ); ?></b></p>
                        <p><i>text</i> - <?php _e( 'The text to be displayed inside button(default value is defined in plugin\'s settings)', 'hg_login' ); ?></p>
                        <p><i>show_menu</i> - <?php _e( 'Whether to show account specific menu instead of sign up button when user is logged in, default value is "no"', 'hg_login' ); ?></p>
                        <p><b>Example</b></p>
                        <p><?php _e('Copy & paste the shortcode directly into any WordPress post or page', 'hg_login' ); ?></p>
                        <p><code>[hg-signup-button text="Sign up" show_menu="yes"]</code></p>
                        <p><?php _e( 'Or copy & paste this code into a template file', 'hg_login' ); ?></p>
                        <p><code>&lt;&#63;php echo do_shortcode("[hg-signup-button text="Sign up" show_menu="yes"]"); ?&gt;</code></p>
                    </div>
                </div>
                <div class="hg-mui-card-img-block">
                    <img src="<?php echo HG_LOGIN_IMAGES_URL.'/dashboard/checked.svg' ?>" width="100" height="100" />
                </div>
            </div>
        </div>
        <div class="hg-mui-card blue animated zoomIn">
            <div class="hg-mui-card-wrap">
                <div class="hg-mui-card-text-field">
                    <h3 class="hg-mui-card-title"><?php _e('Customize', 'hg_login'); ?></h3>
                    <div class="hg-mui-card-content">
                        <p><?php _e('Customize the plugin to adjust its components to your website\'s need and feel.</br> You can create custom designs, activate social media, make further security configurations and a lot more in Settings','hg_login'); ?></p>
                        <a class="-button" href="<?php echo admin_url( 'admin.php?page=hg_login_settings' ); ?>"><?php _e('Go to Settings','hg_login'); ?></a>
                    </div>
                </div>
                <div class="hg-mui-card-img-block">
                    <img src="<?php echo HG_LOGIN_IMAGES_URL.'/dashboard/checked.svg' ?>" width="100" height="100" />
                </div>
            </div>
        </div>
    </div>
<?php do_action('hg_login_dashboard_footer'); ?>