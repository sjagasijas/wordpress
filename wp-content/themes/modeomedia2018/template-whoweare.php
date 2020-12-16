<?php
/*
Template Name: Who We Are
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
	
	
	
  
 /* 
 .main {
   max-width: 1850px;
   margin: auto;
   overflow: hidden;
}
  
 */
  

  
  
  
  .about-1, .about-2,.about-3,
  .about-4, .about-5,.about-6 {

  max-width: 1530px;
  /*
  padding-top: 6%;
  margin: 25% auto 0 auto; 
  clear: both;  
  
  margin: auto;
  left: 0;
  right: 0;
  position: relative;
  top: 30vh;
  bottom: 0;
  */
	
	
  padding: 20vh 0;
  position: relative;
  margin: auto;
	
  }
  
	
	
	
	
	
	
	
	
	

    /*--------POPUP AD----------*/
      
    
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


    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2019/03/promo-link-2-950.svg) no-repeat center center !important;
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
          
          
          
    .popup-thumbnail{
    width: 190px;
    height: 135px;
    float: left;
    background: #fff;
    margin: 2px;    
    background-size: cover;
    cursor:pointer;
    }





    .bg-border{
      
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
          
          
          
          
    .arrow-right{
    
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


    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2019/03/promo-link-1-950.svg) no-repeat center center !important;
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
			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  
 
	.about-1-title{

    text-align: center;
    font-size: 100px;
    margin: auto;
    width: 100%;
    color: #202024;
    font-family: open sans;
    font-weight: bold;
    line-height: 60px;
    margin-bottom: 40px;

  }
	
	
  .about-1-detail {

    position: relative;
    width: 80%;
    margin: auto;
    font-family: open sans;
    line-height: 40px;
    font-size: 24px;
    text-align: center;
    color: #202024;
  }
		
	
  
  
 
	
  .about-title-full{
	  text-align: center;
    font-size: 100px;
    margin: auto;
    width: 100%;
    color: #202024;
    font-family: open sans;
    font-weight: bold;
    line-height: 95px;
    margin-bottom: 80px;
  }

  
  
  

	  
	  
	


  .about-pic-outer{

    position: relative;
    width: 25%;
    float: left;
    height: 350px;
    margin-bottom: 50px;
  }
  
  

  

  .about-pic {
    width: 250px;
    margin: auto;
    height: 250px;
    position: absolute;
    left: 0;
    right: 0;
  }





  .about-pic img {

  /*  width: 315px;
    height: 320px;  */
    border-radius: 250px;
}



.about-team-detail {

color: #202024;

}



  .team-name {
    text-align: center;
    font-weight: bold;
    font-family: open sans;
    font-size: 22px;
    margin-top: 20px;
}




  .team-position {
    text-align: center;
    font-family: open sans;
    font-size: 18px;
    max-width: 180px;
    margin:auto;
}



  
  
  
  
  

  .about-pics { position: relative; z-index: 5; margin-top: 10px; }	

  
  .about-pics:after {
    content: " ";
    display: table;
    clear: both;
	
  }
  
  
 
  
  
  



  
  
/*-----------------MEDIA QUERIES--------------------*/


@media only screen and (max-width: 1250px) {
	



.about-pic-outer {
    width: 33.33%;
}



	
} /*-----------------1250-----------------*/
  
  
  
  



@media only screen and (max-width: 900px) {


.about-pic-outer {
    width: 50%;
}

	
	
.footer-promo-link{

    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2019/03/promo-link-mobile-950.svg) no-repeat center center !important;
    background-size: 100% 100% !important;	
}		
	


} /*-----------------900-----------------*/
 
  

	
	
	
@media only screen and (max-width: 600px) {
	
.footer-promo-link {
    position: fixed;
    width: 100%;
    height: 90px;
}


.about-1-title,.about-title-full {
    text-align: center;
    font-size: 80px;
}


.about-pic-outer {
    width: 100%;
}


.team-position {
    font-size: 15px;
    max-width: 230px;
}


.team-name {
    font-size: 18px;
}


.about-1-detail {
    font-size: 17px;
}


	
} /*------------------600-------------------*/	
		
	
	
	


</style>













    <!------------------------POPOUP AD-------------------------->
    
    
    <div class="promo-link-bg" style="display:none;"> 
      
      <div class="promo-link">
        <div class="x-close"></div>
        



        <a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank">  </a>
        
          <!-- <div class="pop-up-title">Get your FREE Explainer Video!

          <div class="pop-up-button"> <a href="<?php bloginfo('url');?>/promo" target="_blank"> <p> Find Out How! </p>  </a> </div>

          </div> -->
        
        
    
        </div>
      
    </div>






















<div class="main">


   
 <!----------- <div class="about-1-outer"> -----------------------1----------------------------------------- -->
  
  
  	<div class="about-1">


  
	  	<div class="about-1-title"> About </div>
	  		
	  
	  	<div class="about-1-detail">
	  
         <?php while(have_posts()) { the_post(); ?>

		       <?php the_content(); ?> 

         <?php } ?>

	  	</div> 
	  
	  
		
  
	</div>
  
<!--</div>   about-1-outer -->
  
  
  
  
  
  
  
<!------ <div class="about-2-outer">  ----------------------------2---------------------------- -->
  
  	<div class="about-2"> 
  
  
	  <div class="about-title-full"> Meet The  Team  </div> <!------- about-title-full -------->
	  
	  
	  
	  
	  
	  
	  <div class="about-pics">
	  
	  
		  <?php  while(have_posts()) { the_post(); ?>



        <?php $teams = CFS()->get('_team'); ?>

      <?php foreach ($teams as $team): ?>



      <div class="about-pic-outer">

      		<div class="about-pic"> 
      		  

      			<img src="<?php echo $team['_team_img'];?>">




                  <div class="about-team-detail">
                    

                        <div class="team-name">

                          <?php echo $team['_team_name'];?>

                        </div>





                        <div class="team-position">

                              <?php echo $team['_team_position'];?>

                        </div>




                </div> <!---------about-team-detail----------->




    		  
    		  </div> <!------------about-pic------------->
		  
        </div> <!-- ----------about-pic-outer------------- -->



      <?php endforeach //Team Loop ?>
		  
		  
      <?php } // end of while ?>
		
		

		  

	  
	 </div>
	  
</div>
  
  
<!-- </div>    about-2-outer --> 
  
  
  
  
  
   
   
</div>







<div class="footer-promo-link">

<a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank">  
	

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
        
     
        /*-- Scroll to Promo Contact Form --*/
        
         jQuery(".order-now").click(function() {
        jQuery('html,body').animate({
        scrollTop:jQuery("#promo-cf").offset().top},
        'slow');
});



	
	
	
	

/*------------------------FOOTER AD-----------------------------


jQuery(window).on("scroll", function() {

  jQuery('.footer-promo-link').attr('style','bottom:0;');

});	
		
*/
	
</script>



