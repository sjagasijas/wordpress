<?php 



//Register Nav Walker class_alias





require_once('wp_bootstrap_navwalker.php');

//require_once get_template_directory . 'wp-bootstrap-navwalker.php';



//Theme Support 







function wp_theme_setup() {



  add_theme_support('post-thumbnails');



//-------------HEADER MENU LOGO---------------------



  add_theme_support( 'custom-logo' );

	



  function themename_custom_logo_setup() {

    $defaults = array (

        'height'      => 100,

        'width'       => 400,

        'flex-height' => true,

        'flex-width'  => true,

        'header-text' => array( 'site-title', 'site-description' ),

    );

    add_theme_support( 'custom-logo', $defaults );

}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//------------------------------------------------------------







//-------Nav Menus----------

register_nav_menus(array(



    'primary' => __('Primary Menu'),

    'explainer-video-menu' => __('Explainer Video Menu'),

    'footer2' => __('Footer 2')



	)); 



/*

  add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);







  function add_new_menu_item($nav, $args) {

    $newmenuitem = "<li class='home-link'> <a> <img src='img/mm_logo.svg'/> </a> </li>";

    $nav = $newmenuitem.$nav;

    return $nav;

}

*/



  //Post Formats

  add_theme_support ('post-formats', array('aside','gallery'));

}  ///////// wp_theme_setup()





  add_action ('after_setup_theme','wp_theme_setup');

























  //Excerpt Length Control





  function set_excerpt_length() {

  	return 20;

  }



   

  add_filter('excerpt_length','set_excerpt_length');





  function new_excerpt_more( $more ) {

    return ' ...';

  }

  add_filter('excerpt_more', 'new_excerpt_more');

  remove_filter( 'the_excerpt', 'wpautop' );











  //widget locations



  function wpb_init_widgets($id) {



    register_sidebar(array(

      'name' => 'Sidebar',

      'id'  => 'sidebar',

      'before_widget' => '<div class="sidebar-module">',

      'after_widget'  => '</div>',

      'before_title'  => '<h4>',

      'after_title'   =>  '</h4>'

    ));









     register_sidebar(array(

      'name' => 'Box1',

      'id'  => 'box1',

      'before_widget' => '<div class="box">',

      'after_widget'  => '</div>',

      'before_title'  => '<h3>',

      'after_title'   =>  '</h3>'

    ));







     register_sidebar(array(

      'name' => 'Box2',

      'id'  => 'box2',

      'before_widget' => '<div class="box">',

      'after_widget'  => '</div>',

      'before_title'  => '<h3>',

      'after_title'   =>  '</h3>'

    ));







     register_sidebar(array(

      'name' => 'Box3',

      'id'  => 'box3',

      'before_widget' => '<div class="box">',

      'after_widget'  => '</div>',

      'before_title'  => '<h3>',

      'after_title'   =>  '</h3>'

    ));





  }





  add_action('widgets_init','wpb_init_widgets');





  //Customizer File



  //require get_template_directory(). '/inc/customizer.php';





  //disable auto update plugin

  add_filter( 'auto_update_plugin', '__return_false' );
