<?php

// Registra os menus
function register_my_menu() {

	register_nav_menus( array(
		'menu-home'  => 'Menu home',
		'footer'  => 'Footer',
		'language'  => 'language',

		) );
		// 'menu-primario' => __( 'Menu primário' ),
		// 'menu-tags'  => __( 'Menu tags' ),
	// ) );

	// register_nav_menu('menu',__( 'Menu' ));
	// register_nav_menu('tags',__( 'Tags' ));
}
add_action(  'after_setup_theme', 'register_my_menu' );

// Adiciona thumbanail no post
add_theme_support( 'post-thumbnails' );

//filtro single para categoria
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}