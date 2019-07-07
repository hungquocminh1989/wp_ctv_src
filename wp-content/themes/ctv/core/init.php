<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| LOAD CONFIG
|-------------------------------------------------------------------------- 
*/
locate_template('/core/config.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD SHARE FUNCTIONS
|-------------------------------------------------------------------------- 
*/
locate_template('/core/functions.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD CLASSES
|-------------------------------------------------------------------------- 
*/
locate_template('/core/classes/walkers/class-walker-nav-menu-category.php', TRUE);
locate_template('/core/classes/walkers/class-walker-nav-menu-top.php', TRUE);
locate_template('/core/classes/widgets/my_widget.php', TRUE);
locate_template('/core/classes/widgets/content_widget.php', TRUE);
locate_template('/core/classes/class-tgm-plugin-activation.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD SETTINGS
|-------------------------------------------------------------------------- 
*/
locate_template('/core/settings/wp/wp-ajax-request.php', TRUE);
locate_template('/core/settings/wp/wp-ajax.php', TRUE);
locate_template('/core/settings/wp/wp-client-side-script.php', TRUE);
locate_template('/core/settings/wp/wp-default-posts.php', TRUE);
locate_template('/core/settings/wp/wp-default-pages.php', TRUE);
locate_template('/core/settings/wp/wp-customize.php', TRUE);
locate_template('/core/settings/wp/wp-metabox.php', TRUE);
locate_template('/core/settings/wp/wp-navigation-menus.php', TRUE);
locate_template('/core/settings/wp/wp-sidebars.php', TRUE);
locate_template('/core/settings/wp/wp-theme.php', TRUE);
locate_template('/core/settings/wp/wp-widgets.php', TRUE);
locate_template('/core/settings/wp/wp-post-type.php', TRUE);
locate_template('/core/settings/wp/wp-plugins.php', TRUE);
locate_template('/core/settings/wp/wp-admin.php', TRUE);
locate_template('/core/settings/wp/wp-api.php', TRUE);
locate_template('/core/settings/wp/wp-taxonomy.php', TRUE);
locate_template('/core/settings/wp/wp-shortcode.php', TRUE);

/*
|--------------------------------------------------------------------------
| LOAD VENDOR CLASS
|-------------------------------------------------------------------------- 
*/