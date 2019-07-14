<?php
define("ThemeVia", 'via');
define('RD_FILEPATH', get_template_directory());
define('RD_DIRECTORY', get_template_directory_uri());
define('RD_STYLEPATH', get_stylesheet_directory_uri());


/****************************************
 *  Adicionar suporte a imagem destacada
 ***************************************/
add_theme_support( 'post-thumbnails' ); 

//ESCONDER MENUS DE ACESSO ADMINISTRATIVO
/*function netuna_hide_menu() {
	   remove_submenu_page( 'index.php', 'update-core.php' );
       remove_submenu_page( 'themes.php', 'themes.php' );
       remove_submenu_page( 'themes.php', 'theme-editor.php' );
       remove_submenu_page( 'themes.php', 'theme_options.php' );
	   remove_submenu_page( 'customize.php', 'customize.php' );
	   remove_submenu_page( 'tools.php', 'tools.php' );
	   remove_submenu_page( 'tools.php', 'import.php' );
	   remove_submenu_page( 'tools.php', 'export.php' );
	   remove_submenu_page( 'options-general.php', 'mr_social_sharing' );
	   remove_submenu_page( 'options-general.php', 'wlcms-plugin.php' );
	   remove_submenu_page( 'options-general.php', 'vipers-video-quicktags' );
	   remove_menu_page( 'plugins.php' );
	   remove_menu_page( 'rs-produto-restrictions' );
	   remove_menu_page( 'rs-options' );
	   remove_menu_page( 'wpcf' );
	   remove_menu_page( 'edit.php' );
	   remove_menu_page( 'edit-comments.php' );	  
}
add_action('admin_head', 'netuna_hide_menu');*/

/****************************************
 *  ESCONDER BARRA SUPERIOR DE EDIÇÃO NO SITE
***************************************/
function admin_bar(){
	if (is_user_logged_in()){
		return true;
	}
	else{
		return false;
	}
}
add_filter( "show_admin_bar" , "admin_bar");

/****************************************
 *  css front end
***************************************/
function style(){
	wp_enqueue_style('style', RD_STYLEPATH. '/style.css');
	wp_enqueue_style('main', RD_STYLEPATH. '/assets/front-end/css/main.css');
	wp_enqueue_style('slick-theme', RD_STYLEPATH. '/assets/front-end/css/slick-theme.css');
	wp_enqueue_style('slick', RD_STYLEPATH. '/assets/front-end/css/slick.css');
}
add_action('wp_enqueue_scripts', 'style');

//scripts
function scripts(){
	wp_enqueue_script( 'slick', RD_DIRECTORY. '/assets/js/slick.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'functions', RD_DIRECTORY. '/assets/js/functions.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrap', RD_DIRECTORY. '/assets/js/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action('wp_enqueue_scripts', 'scripts');

/****************************************
 *  REMOVER CLASSES MENU (EXCETO CLASES PERSONALIZADAS E CLASSE CURRENT)
***************************************/
add_filter('nav_menu_item_id', '__return_false');

add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);
function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        create_function( '$class', 
                 'return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent", "menu-item", "menu-item-has-children" ) );' )
		);
    return array_merge(
        	$classes,
			(array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
}