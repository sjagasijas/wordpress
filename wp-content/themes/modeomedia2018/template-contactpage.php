<?php
/*
Template Name: Contact Page 
*/

get_header();
    
?>






<style>

    
.mobmenu-push-wrap {
    -webkit-transition: unset !important;
    -moz-transition: unset !important;
    -o-transition: unset !important;
    transition: unset !important;
    -webkit-transform: unset !important; 
    -moz-transform:  unset !important;
    -ms-transform:  unset !important;
    -o-transform: unset !important;
     transform: unset !important; 
     -webkit-transform: unset !important; 
    -moz-transform: unset !important;
    -ms-transform:  unset !important;
    -o-transform:  unset !important;
    transform: unset !important; 
     -webkit-transition: unset !important; 
    -moz-transition:  unset !important;
    -ms-transition:  unset !important;
    -o-transition:  unset !important;
     transition:  unset !important; 
    }
    
    
div.wpcf7 .ajax-loader {
    display: table;
    margin: 0 auto;
}
    
    
    
div.wpcf7-response-output {
    text-align: center;
    width: 50%;
    margin: auto;   
}   
    

.main-container {
font-family: Open Sans;
}




.max-width {
max-width: 1300px;
margin: auto;
}



.max-width::after {
content: ' ';
display: table;
clear:both;
}


    

    /*--------POPUP AD--------*/

    .promo-link-bg {
      
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.8);
    position: fixed;
    z-index: 55555;
    top: 0;
    display: block;
    -webkit-transition: all .5s ease-out;
    -moz-transition: all .5s ease-out;
    -o-transition: all .5s ease-out;
    transition: all .5s ease-out;
    }  
      
      
      
      
      
    .promo-link {
    width: 500px;
    height: 400px;
    position: absolute;
    margin: auto;
    background: #f4f8f9;
    left: 0;
    right: 0;
    top: 0px;
    bottom: 0;


    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/12/promo-link-2.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
    }
          
          
    .pop-up-button {

    width: 280px;
    height: 90px;
    background: #ffba00;
    border-radius: 10px;
    border-bottom: 6px solid #ff8400;
    cursor: pointer;
    margin: auto;
    margin-top: auto;
    margin-top: 50px;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    position: relative;
    } 



    .pop-up-button a {
    width: 280px;
    height: 90px;
    margin: auto;
    left: 0;
    right: 0;
    position: absolute;
    } 



    .pop-up-button a:hover {
    background: unset;
    }



    .pop-up-button a p {
    color: #202024;
    }
        


    .pop-up-title {

    text-align: center;
    font-size: 48px;
    font-family:Open sans;
    margin: auto;
    margin-top: 80px;
    width: 400px;
    font-weight: bold;
    color: #000;


    }



    .promo-link a {
    text-decoration: none;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 4;
    } 



      
      
    .x-close { 
    position: absolute;
    top: 25px;
    right: 15px;
    height: 25px;
    width: 20px;
    cursor: pointer;
    z-index: 5;
    } 
      

    .promo-link p { 

    margin: 20px 0 0px;

    }    

      
      
      
    .popup-thumb-bg {
    position: fixed;
    z-index: 9999999;
    /*  background: rgba(0,0,0,.5); */
    width: 980px;
    margin: auto;
    height: auto;
    left: 0;
    right: 0;
    vertical-align: baseline;
    bottom: 50px;       
    }  
          
          
          
    .popup-thumbnail {
    width: 190px;
    height: 135px;
    float: left;
    background: #fff;
    margin: 2px;    
    background-size: cover;
    cursor:pointer;
    }





    .bg-border {
      
    background-color: #3c8687;
    width: 80px;
    height: 56px;
    position: relative;
    z-index: 1;
    margin: auto;
    left: 0;
    right: 0;
    top: 35px;
    bottom: 0;
    opacity: .65;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;     
          
    }   
          
          
          
          
    .arrow-right {
    
    width: 0;
    height: 0px;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 25px solid #fff;
    margin: auto;
    position: absolute;
    z-index: 2;
    opacity: .8;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;                    
    }     
      
    
      
     .popup-thumbnail:hover .bg-border {
      height:100% !important;   
      width: 100% !important;   
      opacity: 0.9 !important;
      top: 0;
      }
      
      .popup-thumbnail:hover .arrow-right {
      border-top: 0px solid transparent !important;
      border-bottom: 0px solid transparent !important;
      border-left: 0px solid #fff !important;
      }
      
      
/*-------------------------------------------*/


    

    
    
    
    
    

/*------------FOOTER AD------------*/


.footer-promo-link{
    position: fixed;
    width: 600px;
    bottom: -255px;
    height: 80px;
    margin: auto;
    left: 0;
    right: 0;
    opacity: 1;
    z-index: 555;


    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/12/promo-link-1.svg) no-repeat center center !important;
    background-size: 100% 100% !important;


    webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}



.footer-promo-link a {
    position: absolute;
    width: 100%;
    height: 100%;
}
        
    
        
    
    
    
    
    
    
    
    
    
    
    


.contact-title {
text-align: center;
font-size: 50px;
margin: auto;
width: 740px;
font-weight: bold;
color:#000;
}



.contact-subtitle {
font-size:20px;
text-align: center;
margin:auto;
width: 585px;
margin-top: 10px;
}



.contact-inner-content {
    width: 600px;
    margin: 60px auto;
    padding: 40px;
    padding-right: 80px;
    padding-bottom: 5px;
    background: #f8f8f8;
    border-radius: 5px;
    position:relative;
}




.arrow-bottom {
    border-right: solid 18px transparent;
    border-left: solid 18px transparent;
    border-top: solid 18px #f4f8f9;
    position: absolute;
    z-index: -1;
    content: '';
    bottom: -15px;
    margin: auto;
    left: 0;
    right: 0;
    height: 0;
    width: 0;
}




.half-field {

    float: left;
    margin-bottom: 3px;
    margin-right: 9.5%;
    width: 45%;
    position: relative;

}



.-frm-field::after {

    content: " ";
    display: table;
    clear: both;

}



.half-field:last-child {
    margin-right: 0px;
}




input,textarea {
    width: 100%;
    font-size: 20px;
    border-radius: 5px;
    border: unset;
    margin-bottom: 20px;
    resize: none;
}
    
    
select {
    width: 115%;
    font-size: 20px;
    border-radius: 5px;
    border: unset;
    margin-bottom: 20px;
}   
    
    



select, input[type="text"], input[type="password"], input[type="email"], textarea {
    padding: 15px 20px;

}





.frm-submit{

width:155px;
height:50px;
margin:auto;
margin-bottom: 50px;

}


input[type=submit]{
height: 50px;
background-color: #232323;
color: #fff;
font-size: 14px;
/* font-weight: bold; */
/* border-bottom: 7px solid #ff8500; */
border-radius: 5px;
}
`










.contact-contactform .contact-frm select, .contact-contactform .contact-frm input[type="text"], .contact-contactform .contact-frm input[type="password"], .contact-contactform .contact-frm input[type="email"], .contact-contactform .contact-frm textarea {
    background: #fff;
    color: #383`838;
    font-family: 'museo_sans500';
    font-size: 14px;
}






@media only screen and (max-width: 1200px) {


.contact-title{
    margin-top: 100px;
}



}/*---------------1200px----------------*/



    
    
    
    

@media only screen and (max-width: 900px) {
    
    
.footer-promo-link{

    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2018/12/promo-link-mobile.svg) no-repeat center center !important;
    background-size: 100% 100% !important;  
}       
        
    

}/*---------------900px----------------*/
    

    
    



@media only screen and (max-width: 750px) {


.contact-title,.contact-subtitle{ width:90%; }



.half-field {

    float: unset;
    margin-bottom: 3px;
    margin-right: 9.5%;
    width: 100%;
    position: relative;

}


select {
width: 112%;
}

.contact-inner-content {
    width: 65%;
    padding-bottom: 80px;
}




.frm-submit {
    width: 155px;
    height: 50px;
    margin: auto;
    display: inline-block;
    margin-bottom: 50px;
    right: 0;
    left: 0;
    position: absolute;
}




} /*---------------750px----------------*/

    
    
    
    
    
    
    
    
@media only screen and (max-width: 600px) { 
    
    
.footer-promo-link {
    position: fixed;
    width: 100%;
    height: 60px;
}   

    
    
.footer-promo-link {
    position: fixed;
    width: 100%;
    height: 90px;
}   
    
    

.contact-inner-content {
    width: 72%;
}
    
    
} /*------------------600-------------------*/  
    
        
    
    
    
    



@media only screen and (max-width: 550px) { 


.contact-inner-content {
    background: unset;
    margin-top: 0;
}


input, textarea, select {
    background: #f8f8f8;
}


.contact-contactform {

  padding-bottom: 50px;

}


.frm-submit {
    width: 300px;
    margin: 0 auto;
    left: 0;
    right: 0;
    position: absolute;
}


input[type=submit] {
    height: 55px;
}


}   /*------------------550-------------------*/  
    

















@media only screen and (max-width: 500px) { 

.contact-title {
    font-size: 37px;
}


.contact-subtitle {
    font-size: 18px;
}



input, textarea ,select{
    font-size: 18px;
}



input[type=submit] {
    font-size: 17px;
}







}   /*------------------500-------------------*/  




</style>














    <!------------------------POPOUP AD-------------------------->
    
    
    <div class="promo-link-bg" style="display:none;"> 
      
      <div class="promo-link">
        <div class="x-close"></div>
        



        <a href="<?php bloginfo('url');?>/promo" target="_blank">  </a>
        
          <!--<div class="pop-up-title">Get your FREE Explainer Video!

          <div class="pop-up-button"> <a href="<?php bloginfo('url');?>/promo" target="_blank"> <p> Find Out How! </p>  </a> </div>

          </div> -->
        
        
    
        </div>
      
    </div>














<section class="contact-section-1">  <!----------------------------video-section-1-------------------------------->



<div class="max-width">



        <?php while (have_posts()) { the_post(); ?>



        <div class="contact-title"> <?php the_title(); ?> </div>

        <div class="contact-subtitle"> <?php the_content(); ?> </div>
    
        <div class="contact-contactform"> <?php echo do_shortcode('[contact-form-7 id="213" title="Get in touch"]');?> </div>



        <?php }  ?>


</div>




</section>  











<div class="footer-promo-link">

<a href="<?php bloginfo('url');?>/promo" target="_blank">  
    

    </a>

</div>








<?php
get_template_part('footer2');
    
?>




<script>

    

/*-------------------POPUP button------------------------




      jQuery(function() {
        
        jQuery('.promo-link-bg').attr('style','display:none;');
       

     });    





        jQuery( document ).ready(function() {
        

        
             jQuery(document).one('mouseleave', function() {
              
              jQuery('.promo-link-bg').attr('style','display: block;');
              
             
              
              
              
            });
    
        });
        
        
        
        jQuery('.x-close').click(function(){
          
          jQuery('.promo-link-bg').attr('style','display: block;');
          jQuery('.promo-link-bg').attr('style','opacity: 0;');
          
          
          setTimeout(function() { 
              
              
          jQuery('.promo-link-bg').attr('style','display: none;');
              
          },1000);  


        
        });
        
        
 */   
        
     
        /*-- Scroll to Promo Contact Form --
        
         jQuery(".order-now").click(function() {
        jQuery('html,body').animate({
        scrollTop:jQuery("#promo-cf").offset().top},
        'slow');
});


*/
    
    
    
    

/*------------------------FOOTER AD-----------------------------*/


jQuery(window).on("scroll", function() {




/* if(jQuery(window).scrollTop() > 750) { */
  jQuery('.footer-promo-link').attr('style','bottom:-5px;');
/*} */

/* if(jQuery(window).scrollTop() < 750) {
jQuery('.footer-promo-link').attr('style','bottom:-250px;');
} */


/*
if($(window).scrollTop() + jQuery(window).height() > jQuery(document).height() - 200) {
       jQuery('#samplead').attr('style','opacity:0;');
       jQuery('#samplead').attr('style','bottom:-250px;');
}
*/



 
}); 
        

</script>
