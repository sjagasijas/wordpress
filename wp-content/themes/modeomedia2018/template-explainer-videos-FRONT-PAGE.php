

<!DOCTYPE html>
<html <?php language_attributes();?> >

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    

    <title><?php bloginfo('name'); ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <?php wp_head(); ?>



    <style>

    .right-half-container {
    	background:url(<?php echo get_theme_mod('left-half-container_image',get_bloginfo('template_url').'/img/ExplainerVideo.svg');?>) no-repeat center center;
    }


    .left-half-container {
      background:url(<?php echo get_theme_mod('right-half-container_image',get_bloginfo('template_url').'/img/ExplainerVideo-TEXT.svg');?>) no-repeat center center;
    }



    .left-half-container:after,.right-half-container:after {
    content: " ";
    display: table;
    clear: both;
}






	 </style>




  </head>



<body>


<div class="main-container">  

    <div class="blog-masthead">

      <div class="container">

        <nav class="blog-nav">

        <?php

          $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo()) {
        echo '

        <div class="header-logo">

        <a href=" '.home_url('/').' "> <img src="'. esc_url( $logo[0] ) .'"> </a>

        </div> ';
} 

else {

        echo '<h1>'. get_bloginfo('name' ) .'</h1>';

}



        wp_nav_menu(array(

                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())

            );?>
        
        </nav>

      </div>

      </div>













<section class="showcase">

      <div class="left-half-container">
        
        <!--<img src="http://samuel/mm_theme_2018/wp-content/uploads/2018/10/ExplainerVideo.svg"> -->

      </div>


      <div class="right-half-container">
        
        <!--<img src="http://samuel/mm_theme_2018/wp-content/uploads/2018/10/ExplainerVideo-TEXT.svg" height="6%"> -->

      </div>

</section>





    <!--<section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

              <?php if(is_active_sidebar('box1')) :?>
              	<?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
           
          </div>

          <div class="col-md-4">
        
             <?php if(is_active_sidebar('box2')) :?>
              	<?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
          
          </div>

          <div class="col-md-4">
             <?php if(is_active_sidebar('box3')) :?>
              	<?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section> -->



 </div> <!---container---->









<?php get_footer(); ?>


  <?php wp_footer(); ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	


  </body>


</html>