

 <?php /* if(!is_front_page) : ?>


 <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
         
          <?php if (is_active_sidebar('sidebar')): ?>

            <?php dynamic_sidebar('sidebar'); ?>

          <?php endif; ?>


        </div> <!-- /.blog-sidebar -->

      <?php endif;?>


      </div><!-- /.row -->

    </div><!-- /.container --> <?php */ ?> 



 </div> <!---container---->






<style> /*--------DEFAULT STYLE FOR FOOTER 2--------------*/  


.nav-footer {
    float: unset;
    margin: auto;
    margin-bottom: 35px;
    font-family: 'museo_sans300';
    width: 1000px;
    font-size:18px;
}




.nav-footer .menu-item:last-child a {
    color: #f6f6f6;
}



.nav-footer li:first-child:before{
		
	display:none	
		
	}
 


.nav-footer li {list-style-type: none;}
.nav-footer li:before { content: "|";}
.nav-footer  .menu-item-173:before{ content: "";}


.nav-footer .menu-item a {
    margin-left: 10px;
}


.nav-footer .menu-item {
    width: auto !important;
    margin-left: 10px;
}


.nav-footer > li > a:focus, .nav-footer > li > a:hover {
    text-decoration: unset;
    background-color: unset;
    color:#fff;
}




.nav-footer  li {
float: left;
}


.footer-second-row {
  margin-top: 50px;

}




@media only screen and (max-width: 1000px) {


.nav-footer  .menu-item-176:before{ content: "";}



.nav-footer  .menu-item-176{
margin-left: -15px !important;
}




.nav-footer .menu-item {
    width: 170px !important;
    margin-left: 0px;
    margin-top: 8px;
}



.nav-footer {
width:700px;
height: 67px;
margin-bottom: unset;
margin-left: -20px;
margin:auto;
}


#menu-item-531 {
 margin-left: 75px;
}




} /*----- END 1000 ----*/







@media only screen and (max-width: 700px) {

.nav-footer {
    width: 80%;
    height: 105px;
    font-size: 15px;
    margin: auto;
    padding-left: unset;
}


.nav-footer li:before {
  content: " "; 
}

/*
#menu-item-531 {
 margin-left: unset;
}
*/

.nav-footer .menu-item {
 width: unset !important; 
    text-decoration: underline;
}


.nav-footer li {
float: unset; 
display: inline-block;
}



.nav-footer .menu-item a {
    margin-left: 20px;
}


#menu-item-531 {
    margin-left: 0px;
}



.footer-second-row {
  margin-top: 0px;

}


}/*----- END 700 ----*/















@media only screen and (max-width: 500px) {

.nav-footer {
    width: 100%;
    height: 80px;
    font-size: 16px;
    margin: auto;
}


.nav-footer li:before {
  content: " "; 
}

.nav-footer .menu-item a {
    margin-left: 10px;
}






}  /*----- END 500 ----*/





@media only screen and (max-width: 450px) {

.footer-second-row {
    margin-top: 5px;
}



} /*----- END 450 ----*/





@media only screen and (max-width: 430px) {


.nav-footer {
  width: 350px;

}

.nav-footer .menu-item {
    margin-top: -5px;
}


  

}/*------------------430------------------*/










</style>







 


<footer class="blog-footer">


      <?php

      wp_nav_menu(array(

                'menu'              => 'footer2',
                'theme_location'    => 'footer2',
                'depth'             => 2,
                'container'         => 'footer',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav-footer',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())

            );

      ?>





      <div class="footer-second-row"> ModeoMedia &copy;<?php echo Date('Y');?> All Rights Reserved. </div>

      <!--<p>
        <a href="#">Back to top</a>
      </p> -->   

</footer>








  <?php wp_footer(); ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    

    <script src="<?php bloginfo('template_url');?>/js/swiper.min.js"></script>
    
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    
   <!-- <script src="<?php bloginfo('template_url');?>/js/custom-js.js"></script>-->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.bxslider.min.js"> </script>


    <script src="<?php bloginfo('template_url');?>/js/vimeo-froogaloop2.min.js"></script>

    
    
  

  </body>

</html>





<script>






/*-----------------ADD <BR> IF WIDTH IS < 1000PX----------------------*/


$( document ).ready(function() {


  if (screen.width < 1000) {


      if (!$("#menu-footer-2").children().is('br')) {

        $("<br>").insertAfter("footer li:nth-child(4)");
      
      }



  } //if



        elseif (screen.width < 700) { 

          $('br').remove();

        }




  $(window).resize(function() {


        if (screen.width < 1000) {


            if (!$("#menu-footer-2").children().is('br')){

              $("<br>").insertAfter("footer li:nth-child(4)");
            }
        }



         elseif (screen.width < 700) {

          $('br').remove();

        }

      


});

});




</script>