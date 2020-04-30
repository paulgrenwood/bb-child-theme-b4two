<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Fonts
//	• Build in Avenir Next
require_once 'includes/inc.fonts.php';

// Customizer Additions
//	• Custom Margins
require_once 'includes/inc.customizer-settings.php';
require_once 'includes/inc.customizer-theme-settings.php';
require_once 'includes/inc.customizer-compile.php';

// Beaver Builder
//	• Defaults
require_once 'includes/inc.bb-defaults.php';

// GravityForms
//	• Label Visibility Option (Enabled)
require_once 'includes/inc.forms.php';

// Icons
//	• Font Awesome
require_once 'includes/inc.icons.php';

// Enqueue Scripts
//	• Child Theme Scripts
//	• Vendor Scripts
require_once 'includes/inc.scripts.php';
//require_once 'includes/inc.adminconfig.php';

// Shortcodes
//	• [year] & [YEAR]
require_once 'includes/inc.shortcodes.php';


// Type Styles & TinyMCE Editor
//	• Button Options
//	• Intro Text, Intro Alt, Small Text
require_once 'includes/inc.type-styles.php';