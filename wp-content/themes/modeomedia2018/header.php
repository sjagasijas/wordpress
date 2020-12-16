<!DOCTYPE html>
<html <?php language_attributes(); ?> >


  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    

    <title><?php the_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    

    <link href="<?php bloginfo('template_url');?>/css/swiper.min.css" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

	  
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" /> -->


    <?php wp_head();?>
	  
	  
	  
	  
	  
	  
	  
	  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67913175-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-67913175-1');
</script>
	  
	  
	  

   
  </head>






<style>


* {
    outline: none !important;
}



.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    /*background-color: #f3f7f8;
    border-color: #337ab7; */
    border-radius: 10px 10px 0px 0px;
}	





.nav > li > a {
    position: relative;
    display: inline-block;
    padding: unset;
    margin-right: 10px;
}



.nav>li>a:focus, .nav>li>a:hover {
 /* border-radius: 10px; */
    text-decoration: none;
    /* background-color: #f3f7f8; */
} 




 .blog-nav a {
   color:#352e2e;
   height: 35px;
   line-height: 50px !important;
   text-align: center;
   position: relative;
   display: inline-block;
 }



.blog-nav .underline-hover {
    position: absolute;
    height: 1px;
    width: 0px;
    background-color: #888888;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    margin: 0 auto;
    left: 0;
    right: 0;
    bottom: 0;
}

 .blog-nav a:hover .underline-hover{
 
 width: 100%;
 }


 .blog-nav li:last-child a:hover .underline-hover{
 
 width: 0%;
 }


.blog-nav .dropdown-menu a:hover {
    color: #2d2d2d;
    text-decoration: unset;
    background:#eef2f3;
	border-bottom: unset;
    /* text-decoration: underline; */
}



.blog-nav .dropdown-menu a {
display:flex;
height: 50px;
padding-left: 20px;
}





.dropdown-menu {
    position: absolute;
    top: 102%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 180px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #f3f7f8;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: unset;
    border: unset;
    border-top: 2px solid #888888;
    border-radius: 10px;
    -webkit-box-shadow: unset;
    box-shadow: unset;
}






@media only screen and (max-width: 900px) {

.vbox-container .venoframe {
background: rgba(255, 255, 255, 0) !important;
}



.figlio {
box-shadow: unset !important;
}



} /*---------MAX 900px----------------*/







@media only screen and (min-width: 1200px) {
    .menu-item {
    width: 150px !important;
}

}

</style>








  <body>




<div class="main-container">  


  <div class="blog-masthead">

      <div class="container">

        <nav class="blog-nav">

        <?php

          $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '

        <div class="header-logo">

        <a href=" '.home_url('/').'explainer-videos"> <img src="'. esc_url( $logo[0] ) .'"> </a>

        </div> ';
}




else   {

        echo '<h1>'. get_bloginfo('name') .'</h1>';

}



        wp_nav_menu(array(

                'menu'              => 'explainer-video-menu',
                'theme_location'    => 'explainer-video-menu',
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





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function() {

$(".nav-link").append('<div class="underline-hover"></div>');
 });


</script>