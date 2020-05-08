<?php

function gwd_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            /* background-image: url(<?php echo get_theme_mod('fl-favicon') ?>); */
			background-image: url();
        }
    </style>
<?php }
//add_action( 'login_enqueue_scripts', 'gwd_login_logo' );