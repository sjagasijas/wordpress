<?php

/*
Template Name: Get Started Page
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




.getstarted-section-1 {
height:100vh;
color: #201F24;
}


.phase-container {

margin-top: 40px;

}


.steps-container {
margin-top: 200px;  
height: 500px;
}



.getstarted-section-title {
text-align: center;
font-size: 50px;
margin: auto;
width: 740px;
font-weight: bold;
line-height: 60px;
margin-top: 150px;

}




.getstarted-section-subtitle {
font-size:20px;
text-align: center;
margin:auto;
margin-top: 150px;
}




    
    
    
    
    

    
    /*--------POPUP AD----------*/
      
    
    .promo-link-bg{
      
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

    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2019/03/promo-link-2-950.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
    }
          
          
    .pop-up-button{

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
        


    .pop-up-title{

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


.footer-promo-link {
    position: fixed;
    width: 600px;
    bottom: -255px;
    height: 80px;
    margin: auto;
    left: 0;
    right: 0;
    opacity: 1;
    z-index: 555;


    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2019/03/promo-link-1-950.svg) no-repeat center center !important;
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
        
    
    








/*---------------LEFT---------------------*/


.getstarted-step-icon-left{

width: 420px;
float: left;

}

.getstarted-step-content-left{
width: 60%;
float: right;
margin-top: 60px;
}



.getstarted-step-title{
font-size: 30px;
font-weight: bold;

}



.getstarted-step-details{

font-size: 20px;
line-height: 40px;
margin-top: 10px;

}







/*---------------right---------------------*/


.getstarted-step-icon-right{

width: 420px;
float: right;

}

.getstarted-step-content-right{
  
width: 60%;
float: left;
margin-top: 60px;

}









/*--------------PHASE PAGINATION----------------


.phase-pagination .swiper-pagination-bullet{

    display: block;
    float: left;
    height: 50px;
    background: #3498db;
    text-align: center;
    padding: 30px 40px 0 80px;
    position: relative;
    border-radius: unset;
    margin: 0 18px 0 0; 
    opacity: unset;

}






.phase-pagination .swiper-pagination-bullet:before {

    content: " ";  
    border-top: 40px solid transparent;
    border-bottom: 40px solid transparent;
    border-left: 40px solid #fff;
    position: absolute; left: 0; top: 0;

}




.phase-pagination .swiper-pagination-bullet:after {

    content: " ";  
    border-top: 40px solid transparent;
    border-bottom: 40px solid transparent;
    border-left: 40px solid #3498db;
    position: absolute; right: -40px; top: 0;
    z-index: 5;
}


.phase-pagination .swiper-pagination-bullet-active {
background: #3c8687 !important;
}

.phase-pagination .swiper-pagination-bullet-active:after{
border-left: 40px solid #3c8687;
}


.swiper-pagination-bullet:first-child{
border-top-left-radius: 10px; 
border-bottom-left-radius: 10px;
}


.swiper-pagination-bullet:first-child:before{
border-left: 0px solid #fff;
z-index: 55;
}



.phase-pagination:last-child .swiper-pagination-bullet{
    padding-right: 80px;
    border-top-right-radius: 10px; border-bottom-right-radius:10px;
}

*/



.swiper-pagination {

margin: auto;
left: 0;
right: 0;

}




.phase-pagination .swiper-pagination-bullet {
    opacity:unset;
    width: 165px;
    height: 65px;
    margin-right: 50px;
    border-radius: unset;
    position:relative;
}



.phase-pagination .swiper-pagination-bullet {

    background: unset;
    background-size: 100% 100%;
    z-index: 5;
}



/*
 .phase-pagination .swiper-pagination-bullet:first-child.swiper-pagination-bullet-active {
 background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2018/12/GS-Clicked1.svg) no-repeat center center !important;    
    background-size: 100% 100% !important;
}
*/

.underline-hover {
    position: absolute;
    height: 1px;
    width: 0px;
    background-color: #888888;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin: 0 auto;
    left: 0;
    right: 0;
    bottom: 0;
}




.phase-pagination .swiper-pagination-bullet:hover .underline-hover  {
width: 100%;
}



.phase-pagination .swiper-pagination-bullet-active:hover .underline-hover{
   width: 0;
}



 .phase-pagination .swiper-pagination-bullet:first-child.swiper-pagination-bullet-active {
    position: relative;
    background: #232323;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}


.phase-pagination .swiper-pagination-bullet:first-child.swiper-pagination-bullet-active:after {
    left: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    position: absolute;
    margin-top: -35px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 33.5px 0 33.5px 20px;
    border-color: transparent transparent transparent #232323;
    line-height: 0px;
    _border-color: #000000 #000000 #000000 #007bff;
    _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}







 .phase-pagination .swiper-pagination-bullet:nth-child(2).swiper-pagination-bullet-active {
    position: relative;
    background: #232323;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}


.phase-pagination .swiper-pagination-bullet:nth-child(2).swiper-pagination-bullet-active:after {
    left: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    position: absolute;
    margin-top: -35px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 33.5px 0 33.5px 20px;
    border-color: transparent transparent transparent #232323;
    line-height: 0px;
    _border-color: #000000 #000000 #000000 #007bff;
    _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}












.phase-pagination .swiper-pagination-bullet:last-child.swiper-pagination-bullet-active {
    position: relative;
    background: #232323;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}



.phase-pagination .swiper-pagination-bullet:last-child.swiper-pagination-bullet-active:after {
    right: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    position: absolute;
    pointer-events: none;
    margin-top: -33px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 33.5px 20px 32.5px 0;
    border-color: transparent #232323 transparent transparent;
    line-height: 0px;
    _border-color: #000000 #007bff #000000 #000000;
    _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}







.swiper-button-next {
    top: unset;
    bottom: 10px;
    margin-right: 20%;

    background-image: unset;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 17.5px 0 17.5px 17.3px;
    border-color: transparent transparent transparent #909090;
    line-height: 0px;
    _border-color: #000000 #000000 #000000 #909090;
}



.swiper-button-prev {
    top: unset;
    bottom: 10px;
    margin-left: 20%;

    background-image: unset;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 17.5px 17.3px 17.5px 0;
    border-color: transparent #909090 transparent transparent;
    line-height: 0px;
    _border-color: #000000 #909090 #000000 #000000;
    _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
    webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}



.swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {
    opacity: 0;
    cursor: auto;
    pointer-events: none;
}


/*



.phase-pagination .swiper-pagination-bullet:nth-child(2) {

    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2018/12/GS-Default2.svg) no-repeat center center;    
    background-size: 100% 100%;
    z-index: 5;

}



.phase-pagination .swiper-pagination-bullet:nth-child(2).swiper-pagination-bullet-active {

 background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2018/12/GS-Clicked2.svg) no-repeat center center !important;    
    background-size: 100% 100% !important;
}




.phase-pagination .swiper-pagination-bullet:last-child {

    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2018/12/GS-Default3.svg) no-repeat center center;    
    background-size: 100% 100%;
    z-index: 5;
}



.phase-pagination .swiper-pagination-bullet:last-child.swiper-pagination-bullet-active {

 background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2018/12/GS-Clicked3.svg) no-repeat center center !important;    
    background-size: 100% 100% !important;
}

*/

.phase-pagination .swiper-pagination-bullet p {
    font-size: 21px;
/* font-weight: bold; */
    color: #3d3d3d;
    margin-top: 20px;
    position: relative;
    display: inline-block;
}



.phase-pagination .swiper-pagination-bullet-active p{
    color: #fff;
}







/*---------------------STEPS BUTTON PAGINATION----------------------------*/



/* .step-pagination{margin-top:30px !important;} */


.steps-container .swiper-pagination-bullet {
border-radius:5px;
opacity: unset;
width: 155px;
height: 50px;
/* padding: 20px;
border-bottom: 6px solid rgb(189, 202, 202); */
background: unset;
color: #3d3d3d;
margin-right: 10px !important;
margin-top: 15px;



}





.steps-container .swiper-pagination-bullet:hover .underline-hover {
    width:100%;
}



.steps-container  .swiper-pagination-bullet-active:hover  .underline-hover{

    width:0;

}




.steps-container .swiper-pagination-bullet-active {

    opacity: unset;
    color: #fff !important;
    background: #232323 !important;

}


.steps-container .swiper-pagination-bullet p{
font-size: 19px;
margin-top: 10px;
position: relative;
display: inline-block;
}



.steps-container .swiper-pagination {
margin:auto;
position: absolute;
bottom: 0;
}










/*----------------------Media Queries-----------------------*/




@media only screen and (max-width: 1450px) {


.steps-container {
    margin-top: 200px;
    height: 500px;
    margin-left: 20px;
    margin-right: 20px;
}



.getstarted-step-icon-left,.getstarted-step-icon-right {
    width: 40%;
}


.getstarted-step-content-left,.getstarted-step-content-right {
    width: 55%;
}



.getstarted-step-icon-left, .getstarted-step-icon-right {
    width: 40%;
    height: 100%;
    position: relative;
}




.getstarted-step-icon-left img, .getstarted-step-icon-right img {
    position: absolute;
    margin: auto;
    top: 0px;
    bottom: 100px;
}





} /*------------------1450-------------------*/








@media only screen and (max-width: 1400px) {



.getstarted-section-1 {
    height: 120vh;

}



}  /*------------------1350-------------------*/











@media only screen and (max-width: 1200px) {


.getstarted-section-1 {
    padding-top: 80px;
}


} /*------------------1200-------------------*/













@media only screen and (max-width: 1000px) {


.getstarted-step-icon-left, .getstarted-step-icon-right {
    width: 350px;
    margin: auto;
    position: relative;
    height: 355px;
    float:unset;
}




.getstarted-step-icon-left img, .getstarted-step-icon-right img {
     position: unset; 
     margin: unset; 
     top: unset; 
     bottom: unset; 
}




.getstarted-step-content-left, .getstarted-step-content-right {
    width: 80%;
    margin: auto;
    text-align: center;
    float: unset;
}






.getstarted-section-1 {
    height: 100%;
    color: #201F24;
    padding: 10% 0;
}




.steps-container {
    height: 700px;

 }






} /*------------------1000-------------------*/








    




    
@media only screen and (max-width: 900px) { 
    
    
.footer-promo-link {

    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2019/03/promo-link-mobile-950.svg) no-repeat center center !important;
    background-size: 100% 100% !important;  
}       
    


.swiper-button-prev {
    margin-left: 5%;
}



.swiper-button-next {
    margin-right: 5%;
}




    
} /*------------------900-------------------*/  
    
    
    
    






@media only screen and (max-width: 800px) {


.steps-container .swiper-pagination-bullet {
    width: 130px;
    height: 50px;
}



.steps-container .swiper-pagination-bullet:last-child
    margin-right: 0px !important;
}


} /*------------------800-------------------*/  













@media only screen and (max-width: 750px) {


.phase-pagination .swiper-pagination-bullet:last-child {
    margin-right: 0px;
}


.steps-container {
    margin-top: 120px;
    height: 780px;
}



.steps-container .swiper-pagination-bullet {
    width: 110px;
    height: 50px;
}



.getstarted-step-content-left, .getstarted-step-content-right {
    width: 90%;
    margin: auto;
    text-align: center;
    float: unset;
}



} /*------------------750-------------------*/  
















@media only screen and (max-width: 700px) {


.steps-container {
    height: 800px;

 }





.phase-pagination .swiper-pagination-bullet {
    opacity: unset;
    width: 150px;
    height: 70px;
    border-radius: unset;
    position: relative;
}





.phase-pagination .swiper-pagination-bullet p {
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
}




} /*------------------ 700 -------------------*/





    


    
    
    
    
    
    
    
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
    



.phase-pagination .swiper-pagination-bullet {
    width: 125px;
    height: 65px;
}



    
    
    
} /*------------------600-------------------*/  
    
    

    
    
    
    
    





@media only screen and (max-width: 500px) {


.steps-container {
    margin-top: 120px;
    height: 850px;
}




.getstarted-step-title {
    font-size: 23px;
    font-weight: bold;
}




.getstarted-step-details {
    font-size: 17px;
    margin-top: 10px;
}






.phase-pagination .swiper-pagination-bullet {
    opacity: unset;
    width: 105px;
    height: 65px;
    border-radius: unset;
    position: relative;
    margin-right: 20px;
}




.phase-pagination .swiper-pagination-bullet p {
    font-size: 20px;
    font-weight: bold;
    margin-top: 20px;
}





.steps-container .swiper-pagination-bullet {
    border-radius: 5px;
    opacity: unset;
    width: 85px;
    height: 50px;
    margin-right: -3px !important;
}


.steps-container .swiper-pagination-bullet:last-child {
    margin-right: 5px !important;
}



.steps-container .swiper-pagination-bullet {
    
    margin-top: 10px !important;
}





.steps-container .swiper-pagination-bullet p {
    font-size: 19px;
    margin-top: 12px;
}



.swiper-button-prev {
    margin-left: 3%;
}


.swiper-button-next {
    margin-right: 3%;
}


} /*------------------500-------------------*/









@media only screen and (max-width: 460px) {
/*

.phase-pagination .swiper-pagination-bullet {
    opacity: unset;
    width: 130px;
    height: 65px;
    border-radius: unset;
    position: relative;
}




.phase-pagination .swiper-pagination-bullet p {
    font-size: 15px;
    font-weight: bold;
    margin-top: 20px;
}






.steps-container .swiper-pagination-bullet {
    border-radius: 5px;
    opacity: unset;
    width: 68px;
    height: 40px;
}




.steps-container .swiper-pagination-bullet p {
    font-size: 15px;
}





.steps-container .swiper-pagination-bullet {
    
    margin-top: 10px !important;
}


*/


} /*------------------460-------------------*/








@media only screen and (max-width: 450px) {

.swiper-button-prev {
    margin-left: 0%;
}


.swiper-button-next {
    margin-right: 0%;
}




} /*------------------450-------------------*/



</style>












    <!------------------------POPOUP AD-------------------------->
    
    
    <div class="promo-link-bg" style="display:none;"> 
      
      <div class="promo-link">
        <div class="x-close"></div>
        



        <a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank">  </a>
        
          <!--<div class="pop-up-title">Get your FREE Explainer Video!

          <div class="pop-up-button"> <a href="<?php bloginfo('url');?>/promo" target="_blank"> <p> Find Out How! </p>  </a> </div>

          </div> -->
        
        
    
        </div>
      
    </div>

















<section class="getstarted-section-1">  <!----------------------------video-section-1-------------------------------->



<div class="max-width" >





    <?php  while(have_posts()) { the_post(); ?>



            <div class="swiper-container phase-container">



            <div class="swiper-wrapper">



            <div class="swiper-pagination phase-pagination"> </div>




            <?php $phases = CFS()->get('_getstarted_phase'); ?>
            <?php foreach ($phases as $phase): ?>



                <div class="swiper-slide phase-container-slider <?php echo $phase['phase_main_custom_class']; ?>">


                    




                    <!-- <div class="getstarted-section-title">
                        <?php echo $phase['_phase_main_title']; ?>
                    </div> 



                    <div class="getstarted-section-subtitle">
                        <?php echo $phase['_phase_main_subtitle'];  ?>
                    </div>  -->









                    
                <!-- ----------------------STEPS-------------------------  -->


                    <div class="swiper-container steps-container">


                    <div class="swiper-wrapper">




                    <?php 

                        foreach ($phase['_getstarted_steps'] as $steps) :


                            $tst_left =  ($testimonial_counter%2 == 0)?'right':'left';
                            $tst_right = ($testimonial_counter%2 == 0)?'left':'right';

                                        ?>

                            <div class="swiper-slide steps-container-inner-<?php echo $tst_right ?>">




                                <div class="getstarted-step-icon-<?php echo $tst_right ?>"> 

                                    <img src="<?php echo $steps ['_step_icon'] ; ?>"/> 

                                </div>






                               
                            <div class="getstarted-step-content-<?php echo $tst_right ?>"> 



                                <div class="getstarted-step-title"> 

                                    <?php echo $steps ['_step_title'] ; ?>

                                </div>



                                <div class="getstarted-step-details"> 

                                    <?php echo $steps ['_step_content'] ; ?> 

                                </div>





                            </div>  <!-- getstarted-step-content -->

                               
                            


                            </div> <!--------- swiper-slide -------------->


                    <?php  $testimonial_counter++;    endforeach; ?>


                    
                    
                    </div> <!--------- swiper-wrapper -------------->

                    <div class="swiper-pagination step-pagination " ></div>


                    </div> <!--------- swiper-container steps-container --------->


                    


                











                    



                </div> <!-- phase-slider -->


                <?php endforeach //Outer Loop ?>



            </div>




                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>




            </div>  


<?php } // end of while ?>












</div> <!-- Max Width -->



</section>












<div class="footer-promo-link">

<a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank"> </a>

</div>















<?php
get_template_part('footer2');
    
?>






<script>
    
    
    
    
    
    



/*-------------------POPUP button------------------------  




      jQuery(function() {
        
        jQuery('.promo-link-bg').attr('style','display:none;');
       

     });    

*/



        jQuery(document).ready(function() {



 /*       
             jQuery(document).one('mouseleave', function() {
              
              jQuery('.promo-link-bg').attr('style','display: block;');

            });
            
*/          
            
            
        /*----------------------------STEPS NAME-----------------------------------
            
            var x = document.getElementsByClassname("phase-container-slider");

            if (x.hasAttribute("data-swiper-slide-index") =="1") {
            
            
            }  -----------------*/      
            
            
            
            $(".phase-2-class .step-pagination .swiper-pagination-bullet:first-child p").text("STEP 4");
            $(".phase-2-class .step-pagination .swiper-pagination-bullet:nth-child(2) p").text("STEP 5");
            $(".phase-2-class .step-pagination .swiper-pagination-bullet:nth-child(3) p").text("STEP 6");
            $(".phase-2-class .step-pagination .swiper-pagination-bullet:last-child p").text("STEP 7");
            
            
            
            
            $(".phase-3-class .step-pagination .swiper-pagination-bullet:first-child p").text("STEP 8");
            $(".phase-3-class .step-pagination .swiper-pagination-bullet:nth-child(2) p").text("STEP 9");
            $(".phase-3-class .step-pagination .swiper-pagination-bullet:last-child p").text("STEP 10");
            
            
            
            
            
            
    
        });
        
        
    
        
        jQuery('.x-close').click(function(){
          
          jQuery('.promo-link-bg').attr('style','display: block;');
          jQuery('.promo-link-bg').attr('style','opacity: 0;');
          
          
          setTimeout(function() { 
              
              
          jQuery('.promo-link-bg').attr('style','display: none;');
              
          },1000);  


        
        });
        
      
    
        
     
        /*-- Scroll to Promo Contact Form --*/
        
         jQuery(".order-now").click(function() {
        jQuery('html,body').animate({
        scrollTop:jQuery("#promo-cf").offset().top},
        'slow');
});



    
    
    
    

/*------------------------FOOTER AD-----------------------------


jQuery(window).on("scroll", function() {


  jQuery('.footer-promo-link').attr('style','bottom:-5px;');


}); 
    
    
*/      
    
    
    
    
    
    
    
    
    
    
    
    
    
    


/*-------------------- Phase-container ---------------------*/
var menu = ['PHASE 1', 'PHASE 2','PHASE 3']

var swiper = new Swiper ('.phase-container', {
      slidesPerView: 1,
      spaceBetween: 60,
      speed: 700,
      effect: 'fade',
      //loop: true,
      paginationClickable: true,
      touchRatio: 0,
      

      
      fadeEffect: {
    crossFade: true
  },

/*


      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
  },

*/


  pagination: {
      el: '.phase-pagination',
            clickable: true,
        renderBullet: function (index, className) {
          return '<div class="' + className + '"> <p>' + (menu[index]) + '</p> </div>';
        },

    },


    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },



 

});






/*-------------------- Step-container ---------------------*/
var menu = ['STEP 1', 'STEP 2', 'STEP 3', 'STEP 4']

var swiper = new Swiper('.steps-container', {
      slidesPerView: 1,
      spaceBetween: 60,
      speed: 700,
      effect: 'fade',
      loop: true,
      paginationClickable: true,
      nested: true,
      touchRatio: 0,
      
      fadeEffect: {
    crossFade: true
  },

/*
      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
  },


*/


  pagination: {
      el: '.step-pagination',
            clickable: true,
        renderBullet: function (index, className) {
          return '<div class="' + className + '"> <p>' + (menu[index]) + '</p> </div>';
        },

    },

});




       jQuery(document).ready(function() {


        $(".phase-container .swiper-pagination-bullet p").append('<div class="underline-hover"></div>');  
 
 });



</script>