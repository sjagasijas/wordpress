<?php
/*
Template Name: Explainer Video Main Page
*/

get_header();
    
?>

<title> EXPLAINER VIDEO </title>




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
    
    
    
    
.vbox-overlay {
    font-family: Open sans;     
}       
    
    

.main-container {
font-family: Open Sans;
}



.max-width {
max-width: 1600px;
margin: auto;
}

    

.max-width::after {
content: ' ';
display: table;
clear:both;
}




    /*--------- POPUP AD ----------*/
      
    
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
    background: #f8f8f8;
    left: 0;
    right: 0;
    top: 0px;
    bottom: 0;


    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2019/03/promo-link-2-950.svg) no-repeat center center !important;
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
    width: 110px;
    height: 75px;
    position: absolute;
    z-index: 1;
    margin: auto;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: .65;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }   
          
          
          
          
    .play-arrow-right {
    width: 0px;
    height: 0px;
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent;
    border-left: 28px solid #fff;
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








.swiper-button-next, .swiper-button-prev {

  position: relative;
  margin-top: -13%;

}




.swiper-button-prev {

left: -6%;

/*
background: url(http://modeomedia.com/explainer-videos/wp-content/uploads/2018/11/ArrowL-1.svg) no-repeat center center !important;
background-size: 100% 100% !important;

*/
background-image: unset;
width: 0;
height: 0;
border-style: solid;
border-width: 20.5px 17.3px 20.5px 0;
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






.swiper-button-prev:hover {
/*
background: url(http://modeomedia.com/explainer-videos/wp-content/uploads/2018/11/ArrowL-2-HoverClick.svg) no-repeat center center !important;
background-size: 100% 100% !important; */

}




.swiper-button-next {

float:right;
right: -6%;


/*
background: url(http://modeomedia.com/explainer-videos/wp-content/uploads/2018/11/ArrowR-1.svg) no-repeat center center !important;
background-size: 100% 100% !important;


webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
*/

background-image: unset;
width: 0;
height: 0;
border-style: solid;
border-width: 20.5px 0 20.5px 17.3px;
border-color: transparent transparent transparent #909090;
line-height: 0px;
_border-color: #000000 #000000 #000000 #909090;
_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}






.swiper-button-next:hover {

/*  
background: url(http://modeomedia.com/explainer-videos/wp-content/uploads/2018/11/ArrowR-2-HoverClick.svg) no-repeat center center !important;
background-size: 100% 100% !important;
*/  

}









.video-section-1{
color:#202024;
height: 80vh;
}




.video-section-1 li{
list-style: none;
line-height: 30px;  
}
    
    
.video-section-1 li p{
list-style: none;
line-height: 20px;
margin-bottom: 40px;
}   


.video-section-1 p::before {
content: "■";
color: #79bc9b; 
}



.video-section-1-title {
text-align: center;
font-size: 50px;
margin: auto;
width: 770px;
font-weight: bold;
line-height: 60px;
margin-top: 50px;
}




.video-section-1-sub-title {

font-size:20px;
text-align: center;
margin:auto;
margin-top: 20px;
}

    
.main_video_mobile_thumbnail,.video_mobile_thumbnail,.project_video_mobile_thumbnail{
display:none;               
}   
    
    



.video-section-1-content-right {

width:50%;
float:left;
font-size: 25px;
padding-top: 140px;

}



.video-section-1-content-right::after {
content: ' ';
display: table;

}



.video-section-1-content-right::before {
clear:both;

}


.video-section-1-content-left {

width: 670px;
float: right;
height: 380px;
margin-top: 85px;
position: relative;

}



.modeo-video {
    height: 380px;
    width: 670px;
    position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
    
    
    
    
    
.modeo-video a{
background-color: transparent !important;
color: #fff;
font-size: 24px;
height: 100%;
position: absolute;
text-decoration: none;
text-transform: uppercase;
width: 100%;
opacity: 0.93;
z-index: 2; 
}   
    



/*
.modeo-video img { 
width: 670px;
height: 380px;

}

*/



 .video-section-1-content-left:after,.video-section-1-content-right:after {
    content: " ";
    display: table;
    clear: both;
}



    
/*--------------------------------------video-section-2-1-----------------------------------*/

    
    

.video-section-2-1 {
color:#202024;
height: 90vh;
}

    



.video-section-2-1-title {
text-align: center;
font-size:50px;
margin:auto;
width: 100%;
font-weight: bold;
line-height: 60px;
padding-top: 200px; 
}




.video-section-2-1-content {
font-size: 24px;
text-align: center;
max-width: 1240px;
margin: auto;
line-height: 40px;
margin-top:20px;
}




.video-section-2-1-button{

width: 230px;
height: 30px;
background: #ffba00;
border-radius: 10px;
padding: 35px;
border-bottom: 6px solid #ff8400;
cursor:pointer;
margin: auto;
margin-top: 50px;
text-align: center;
font-size: 30px;
font-weight: bold;
}



.video-section-2-1-button p {
font-size: 30px;
width: 100%;
text-align: center;

}
















/*----------------------------video-section-2--------------------------------*/


.video-section-2{

color:#202024;
height: 100vh;
 background-color: #f8f8f8;
}



.video-section-2-title {

text-align: center;
font-size: 50px;
margin: auto;
width: 600px;
font-weight: bold;
line-height: 60px;
padding-top: 150px;

}



.video-benefit-container{
margin-top: 150px;
}



.vbox-inline {

background: transparent !important;
box-shadow: unset;
}




.testimonial-content-close {
    position: absolute;
    top: 5px;
    right: 0px;
    color: #555 !important;
    font-size: 20px;
    cursor: pointer;
    font-family: Open sans;
    font-weight: bold;
}

    
.vbox-inline, .venoframe {
    width: 100%;
    height: 100%;
}   
        
    
    
    

/*---------------------LEFT-------------------------*/

.benefit-img-left {
width: 375px;
float: left;
}



.video-benefit-box-content {
width: 1250px;
margin: auto;
}


.benefit-content-wrapper-left {
width: 60%;
float: right;
margin-top: 9%;
}


.benefit-title-left {

font-size:30px;
font-weight: bold;
}


.benefit-content-left {

font-size:20px;
line-height:40px ;
margin-top: 10px;
}




/*--------------------- RIGHT ------------------------*/


.benefit-img-right {
width: 375px;
float: right;
}



.benefit-content-wrapper-right {
width: 60%;
float: left;
margin-top: 9%;
}


.benefit-title-right{

font-size:30px;
font-weight: bold;
}


.benefit-content-right{

font-size:20px;
line-height:40px ;
margin-top: 10px;
}










/*----------------------------video-section-3--------------------------------*/


.video-section-3 {
color:#202024;
height: 100vh;
}



.hide-desktop {
display:none;
}



.video-section-3-title {
text-align: center;
font-size:50px;
margin:auto;
width: 400px;
font-weight: bold;
line-height: 60px;
padding-top: 150px;
}



.testimonial-container{
margin-top: 150px;
}




.video-section-3-sub-title {
font-size:20px;
text-align: center;
margin:auto;
}




.client-testimonial-name {

font-weight: bold;

}



.client-testimonial-name {

margin-top: 15px;

}


.read-more-link{
font-size: 20px;
font-weight:bold;
color:#000;
cursor: pointer !important; 
}


.read-more-link:hover{
color:#3c8687;
}










/*-------------------------------- LEFT ----------------------------------*/

.testimonial-box-content-left {
width:100%;
}



.arrow-left{
width: 0;
position:absolute;
height: 0;
border-style: solid;
border-width: 12.5px 25px 12.5px 0;
border-color: transparent #f8f8f8 transparent transparent;
margin-left: -65px;
margin-top: 35px;
}



.client-testimonial-pic-left{
width: 250px;
text-align: center; 
float: left;
line-height: 24px;
font-size:18px;
}



.testimonial-content-left {
position: relative;
width: 500px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
}






.vbox-container .testimonial-content-left {
position: relative;
width: 1000px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
}






.testimonial-content-wrapper-left { 
float:left;
width:52%;
margin-top: 60px;
}



.testimonial-video-project-left {
float:right;
width:700px;
position:relative;
}




.testimonial-img-left img, .testimonial-img-right img {

border: 5px solid transparent;
border-radius: 200px;
height: auto;
width: 140px;
margin:auto;
}


.testimonial-img-left , .testimonial-img-right {
width: 185px;
margin: auto;
}




/*--------------RIGHT------------------*/




.client-testimonial-pic-right{
width: 250px;
text-align: center; 
float: right;
line-height: 24px;
font-size:18px;
}





.testimonial-box-content-right {
width:100%;
}
    
    
    

    
.arrow-right{
width: 0;
height: 0;
border-style: solid;
border-width: 12.5px 0 12.5px 25px;
border-color: transparent transparent transparent #f8f8f8;
right: -25px;
margin-top: 35px;
position: absolute;
}
    
    
    



.testimonial-content-wrapper-right{
float:right;
width:52%;
margin-top: 60px;
}



.testimonial-content-right { 
position: relative;
width: 500px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
}




.vbox-container .testimonial-content-right {
position: relative;
width: 1000px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
}




.testimonial-video-project-right {
float:left;
width:700px;
position:relative;
}











/*--------------------------------------video-section-4-----------------------------------*/


.video-section-4 {
color:#202024;
height: 115vh;
background-color: #f8f8f8;
}




.video-section-4-title {
text-align: center;
font-size:50px;
margin:auto;
width: 400px;
font-weight: bold;
line-height: 60px;
padding-top: 150px;
}


.video-project-box-content img{

width:100%;
height:100%;

}


.video-project-container {
margin-top: 150px;  
min-height: 400px;
position:relative;
}



.swiper-pagination{
margin-top: 60px !important;    
}


.video-benefit-prev-next{display:none;}




#video-project-play {

position: absolute;
width: 100%;
height: 100%;

}



/*---------------------------LEFT---------------------------------*/

.video-project-img-left{
float: left;
width: 45%;
height: 380px;
position:relative;
}



.video-project-content-wrapper-left{
float:right;
width:50%;
margin-top: 80px;
}


.video-project-title-left{
font-size: 30px;
font-weight: bold;  
}



.video-project-content-left{
font-size: 20px;
line-height: 40px;
margin-top: 20px;
}


















/*---------------------------RIGHT---------------------------------*/

.video-project-img-right{
float: right;
width: 45%;
height: 380px;
position:relative;
}



.video-project-content-wrapper-right{
float:left;
width:50%;
margin-top: 80px;
}


.video-project-title-right{
font-size: 30px;
font-weight: bold;  
}



.video-project-content-right{
font-size: 20px;
line-height: 40px;
margin-top: 20px;
}



/*---------------------------------------------------------------*/

.swiper-pagination-bullet {
border-radius:5px;
opacity: unset;
width: 155px;
height: 50px;
/* padding: 20px; */
/* border-bottom: 6px solid rgb(189, 202, 202); */
background: unset;
color: #232323;
margin-right: 15px;
margin-top: 15px;


-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}



.swiper-pagination-bullet .underline-hover {
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



.swiper-pagination-bullet p {
font-size: 15px;
margin-top: 12px;
position: relative;
display: inline-block;
}


.swiper-pagination-bullet:hover p {
/* background-color: #eaffff; 
color: #a5a5a5;*/

 /*   margin: auto;  */
/* border-bottom: 6px solid rgb(183, 202, 202); */
}



.swiper-pagination-bullet:hover .underline-hover {
width: 100%;
}


.swiper-pagination-bullet-active:hover .underline-hover {
width: 0%;
}







.swiper-pagination-bullet-active {

    opacity: unset;
    color:#fff;
    background: #232323;
   /* border-bottom: 6px solid #3b8584; */

}








.swiper-pagination {
margin:auto;
position:relative;
}



/*--------------------------------------video-section-5-----------------------------------*/


.video-section-5 {
color:#202024;
height: 100vh;
}





.section-mobile {

display: none;

}




.video-section-5 a p {
color:#fff;
}


a {
cursor:pointerl;
}




.video-section-5-title {
text-align: center;
font-size:50px;
margin:auto;
width: 100%;
font-weight: bold;
line-height: 60px;
padding-top: 350px;
}




.video-section-5-content {
font-size: 20px;
text-align: center;
max-width: 1100px;
margin: auto;
line-height: 40px;
}




.video-section-5-button {

    width: 250px;
    height: 70px;
    background: #262626;
    border-radius: 5px;
    /* border-bottom: 6px solid #ff8400; */
    cursor: pointer;
    margin: auto;
    margin-top: auto;
    margin-top: 50px;
    text-align: center;
    font-size: 30px;
    color: #fff;
    /* font-weight: bold; */
    position: relative;


webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}


/*

.video-section-5-button:hover{
    background: #ffcf4d;
    border-radius: 10px;
    border-bottom: 6px solid #ffab50;
}    


.video-section-5-button:hover p{
    color: #52525a;
}


*/



.video-section-5-button a {

    width: 250px;
    height: 70px;
    margin: auto;
    left: 0;
    right: 0;
    position: absolute;


}




.video-section-5-button p {
font-size: 30px;
width: 100%;
text-align: center;
margin: auto;
top: 0;
bottom: 0;
position: absolute;
height: 45px;


webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}





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







/*-----------------------------------MAXIMUM QUERIES------------------------------------*/


@media only screen and (max-width: 1600px) {

.max-width {
width:90%;
margin:auto;
}


.swiper-button-next {
    right: -3%;
}


.swiper-button-prev {
    left: -3%;
}




.swiper-button-next, .swiper-button-prev {
    margin-top: -20%;
}



/*---------------- SECTION 1 ------------------*/


.video-section-1-content-left {

    float: right;
    margin: auto;
    margin-top: 85px;
    width: 50%;
}


.video-section-1-content-right {
    width: 48%;
    float: left;
}



.video-section-1 {
    height: 100%;
    padding: 5% 0;  
}   
    

    
.video-section-1 li p {
    line-height: 34px;
    margin-bottom: 20px;
}   




.video-section-1::after,.video-section-2::after,.video-section-3::after,
    .video-section-4::after,.video-section-5::after{

content: ' ';
    display: table;
    clear: both;
        
}
    

.swiper-container::after {
content: ' ';
display: table;
clear: both;
}
    
    








/*----------------SECTION 2------------------*/


.video-section-2-1 {
    height: 100%;
    padding: 20% 0;
}
    
    
.video-section-2-1-title {
    padding-top: unset; 
}   
    
    
    
.video-section-2-title {    
  padding-top: unset; 
}   
    
    

.video-section-2 {  
    height: 100%;
    padding-top: 10%;
    padding-bottom: 25%;    
}   
    
    
    
    
.video-benefit-box-content {
    width: 100%;
    margin: auto;
}   
    
    
    
/*---------------LEFT------------------*/
    
    
.benefit-content-wrapper-left {
    width: 55%;
    float: right;
    margin-top: 10%;
}   
    
    
.benefit-img-left {
    width: 35%;
    float: left;
    margin-left: 5%;
}   
    
    
    
    
/*-----------------RIGHT------------------*/    
.benefit-content-wrapper-right {
    width: 55%;
    float: left;
    margin-top: 10%;
}
    
    
.benefit-img-right {
    width: 35%;
    float: right;
    margin-right: 5%;
}   
    
    
    
    
    
    
    
    
    






/*---------------------SECTION 3------------------------*/

    
    
.video-section-3-title {
   padding-top: unset;
}   

    
.video-section-3 {
    height: 100%;
    padding-top: 10%;
    padding-bottom: 30%;
}   
    
    
    
    

.hide-desktop {

display:block;

}



.hide-mobile {
display:none;
}



.client-testimonial-pic-right,.client-testimonial-pic-left {
 display:none;
}



.testimonial-box-content-left,.testimonial-box-content-right {
    width: 100%;
}


.testimonial-content-wrapper-left {
    float: left;
    margin: auto;
    width: 53%;

}




 .testimonial-content-wrapper-right {

    float: right;
    margin: auto;
    width: 53%;

 }



.testimonial-content-left,.testimonial-content-right {
    width: 75%;
    float: unset;
    margin: auto;
}



.testimonial-img-left img, .testimonial-img-right img {
    width: 180px;
}


.arrow-left, .arrow-right{
    display:none;
}





.testimonial-video-project-left {
    float: right;
    width: 45%;
    margin: auto;
}



.testimonial-video-project-right  {
    float: left;
    width: 45%;
    margin: auto;
}





/*---------------------SECTION 4------------------------*/


.video-section-4-title {
   padding-top: unset;
}       
    
    
.video-section-4 {
    height: 100%;
    padding: 10% 0;
}   
    
    
    

.modeo-video {
    height: auto;
    width: 100%;
    position: relative;
}



/*
 * 
.modeo-video img { 
width: 100%;
height: 330px;

}

*/


.swiper-pagination-bullet {
    border-radius: 5px;
    opacity: unset;
    width: 155px;
    height: 50px;

}


.swiper-pagination-bullet p {
    font-size: 13px;
}









/*---------------------SECTION 5------------------------*/


.video-section-5-title {
   padding-top: unset;
}       
    
    
.video-section-5 {
    height: 100%;
 /*  padding: 15% 0;  */
}   
    
    
    
    
    

/*
.video-project-pagination{

display:none;

}
*/



} /*-------------1500------------*/













@media only screen and (max-width: 1440px) {



.swiper-pagination {
width:100%;
}


.video-project-pagination .swiper-pagination-bullet {
    border-radius: 5px;
    opacity: unset;
    width: 130px;
    height: 50px; 
}



.swiper-pagination-bullet p {
    font-size: 12px;
}


    
.video-section-1 li p {
    line-height: 34px;
    margin-bottom: 10px;
}
    

    
    




}/*------------------1400------------------*/






    
    
    
    
    

@media only screen and (max-width: 1350px) {
    
    
    .video-section-1-content-right {
     font-size: 23px;
}
    
    
    
    

}/*------------------1350------------------*/   
    
    




    





@media only screen and (max-width: 1200px) {

.modeo-video {
    height: auto;
    width: 100%;
    position: relative !important;
}   
    

.video-section-1-content-left {
    width: 48%;     
}
    

    
.video-section-1-content-right {
    width: 52%;
    font-size: 20px;
}   


    
    
    
    
.video-section-2-1 {
    height: 100%;
    padding: 20% 0;         
}   
    
    
    
.video-section-2, .video-section-3, .video-section-4 {
    height: 100%;
    padding-bottom:40%;
}   
    
    
.video-section-5 {
/*    padding: 20% 0 !important;  */
}   

    
    
    
    


.swiper-button-next, .swiper-button-prev {
    margin-top: -35%;
}







/*--------------------- SECTION 3 ------------------------


.testimonial-container {
    margin-top: 50px;
}



.testimonial-video-project-left,.testimonial-video-project-right {
    float: unset;
    width: 100%;
    margin: auto;
    height: 350px;
    margin-bottom: 50px;
}



.testimonial-content-wrapper-left,.testimonial-content-wrapper-right {
    float: unset;
    margin: auto;
    width: 80%;
    position: relative;
}



.testimonial-video-project-left, .testimonial-video-project-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    margin-bottom: 50px;
}   


*/












/*--------------------------- SECTION 4 ----------------------------


.video-project-container {
    margin-top: 50px;
}




    
.video-project-img-left, .video-project-img-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    position: relative;
}   
    
*/



.video-project-pagination{

  display:none; 

}

    

.video-benefit-prev-next{
    display:block;
}


.video-project-content-wrapper-left, .video-project-content-wrapper-right {
    float: unset;
    width: 80%;
    margin: auto;
    text-align: center;
    margin-top: 50px;
}


    










}  /*--------------------1200--------------------*/










@media only screen and (max-width: 1030px) {


    
.video-section-1-title {
    text-align: center;
    font-size: 40px;
    margin: auto;
    font-weight: bold;
    line-height: 25px;
    margin-top: 40px;
}   

    
    
.video-section-1-sub-title {
    font-size: 18px;
    text-align: center;
    margin: auto;
    margin-top: 20px;
}   
    
    
    
.video-section-1-title,.video-section-2-title,.video-section-3-title,
.video-section-4-title {

 width: 100%;

}






/*
.video-section-1-content-right {
    width: 100%;
    padding-top: 90px;
    font-size:22px;
    padding-left: 20px;
}   

*/  
.video-section-1-content-right {
    padding-top: 115px;
}
    
    
    
.video-section-1 li {
    margin-bottom: 12px;
    font-size: 16px;
}   
    
    
.video-section-1 li p {
    line-height: 32px;
}   
    
    
    
    

.swiper-pagination {
width:100%;
}

    
    
    
    
.video_mobile_thumbnail,.project_video_mobile_thumbnail {
display:block;              
}
    


.video_desktop_thumbnail,.project_video_desktop_thumbnail {
display:none;               
}   

    

.vbox-container .testimonial-content-left, .vbox-container .testimonial-content-right {
position: relative;
width: 75%;
}








    
    
    
/*-----------------------------video-section-3-----------------------------------*/ 
    
    
    
    
    
    
.testimonial-video-project-left, .testimonial-video-project-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    margin-bottom: 50px;
}   
    
    



    
    
    
    
/*-----------------------------video-section-4---------------------------------*/       
    
    
    
    
.video-project-img-left, .video-project-img-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    position: relative;
}   
    
    
    
    

    


}/*------------------1030------------------*/











@media only screen and (max-width: 900px) {

.swiper-button-next, .swiper-button-prev {
    margin-top: -40%;
}

    
    
.footer-promo-link{

    background: url(https://modeomedia.com/explainer-videos/wp-content/uploads/2019/03/promo-link-mobile-950.svg) no-repeat center center !important;
    background-size: 100% 100% !important;  
}   
    


}/*------------------900------------------*/








@media only screen and (max-width: 800px) {


    
.main_video_mobile_thumbnail{
display:block;              
}       
    
.main_video_desktop_thumbnail{
display:none;               
}       
    
    
    
.video-section-1-content-left{
    height: auto;
    position: relative;
    float: none;
    width: 75%;
}



.video-section-1-content-right {
    width: 100%;
    padding-top: 90px;
    font-size:22px;
}   
    
    
    
.video-section-1 li {
    margin-bottom: 30px;
}   
    
    
    
.video-section-1 li p {
    line-height: 32px;
}       
    
    
    
    

    
.video-section-1{
    padding-bottom:10%;         
}
    
    
    
    
    
    
    
    
/*------------------------------------------*/  
    
    
    
.benefit-img-left, .benefit-img-right {
    width:85%;
    float: unset;
    margin: auto;
}




.benefit-content-wrapper-left, .benefit-content-wrapper-right {
    width: 90%;
    margin: auto;
    text-align: center;
    float: unset;
    margin-top: 60px;
}



.video-benefit-box-content {
    width: 100%;
}   
    
    
    
    
    
    
    
    
    
    
    
    
.video-section-2-1{
 padding-bottom: 50%;
}


/*
.testimonial-content-wrapper-left, .testimonial-content-wrapper-right {
    float: unset;
    margin: auto;
    width: 100%;
    position: relative;
}
*/


.testimonial-content-left, .testimonial-content-right {
    width: 75%;
    float: unset;
    margin: auto;
}


    
    
    
    
    
    
    
    
    
/*------------------ SECTION 3 -------------------------*/  
    
    
    


.testimonial-video-project-left,.testimonial-video-project-right {
    float: unset;
    width: 100%;
    margin: auto;
    height: 350px;
    margin-bottom: 50px;
}



.testimonial-content-wrapper-left,.testimonial-content-wrapper-right {
    float: unset;
    margin: auto;
    width: 80%;
    position: relative;
}



.testimonial-video-project-left, .testimonial-video-project-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    margin-bottom: 50px;
}
    
    
    
/*------------------------SECTION 4------------------------------*/ 



.video-project-container {
    margin-top: 50px;
}


    
.video-project-img-left, .video-project-img-right {
    float: unset;
    width: 75%;
    margin: auto;
    height: unset;
    position: relative;
}



} /*------------------800------------------*/



    
    
    
    
/*----------
    
    
@media only screen and (max-width: 768px) { 
    
.video-section-1-content-left {
    height: auto;
    position: relative;
    float: none;
    width: 75%;
}
    
    
    
.video-section-1-content-right {
    width: 100%;
    padding-top: 90px;
    font-size: 22px;
}   
    
    
    
}--------768------------------*/    
    
    
    
    
    




@media only screen and (max-width: 650px) {



.testimonial-content-left, .testimonial-content-right {
    width: 85%;
    float: unset;
    margin: auto;
}



    
.footer-promo-link {

    position: fixed;
    width: 100%;
    height: 90px;

}



}/*------------------650------------------*/










@media only screen and (max-width: 600px) {

    
    
.video-section-1{
        
    padding-bottom: 5%; 
    
        
}   
    
    
    

.video-section-2, .video-section-3, .video-section-4{
    height: 100%;
    padding-bottom: 80%;
}


    
    
    .swiper-button-next, .swiper-button-prev {
    margin-top: -85%;
}







.vbox-container .testimonial-content-left, .vbox-container .testimonial-content-right {
    position: relative;
    width: 95%;
}


.section-desktop {
display : none;
}


.section-mobile {
display : block;
padding: 25% 0;
}


} /*------------------600------------------*/





@media only screen and (max-width: 500px) {

.max-width {
    width: 85%; 
}       
    

    
.video-section-1{
height: 100%;
margin-bottom: 80px;
padding-bottom: 8%;     
}
    
    
    
    
.video-section-2, .video-section-3, .video-section-4{
    height: 100%;
    margin-bottom: 30px;
    padding-bottom: 75%;
}

    
.video-section-1-title {

       font-size: 37px;
    line-height: 45px;
        margin-top: 50px;
 
}   
    
    
.video-section-1 p::before {
    content: "■";
    color: #262626;
    font-size: 15px;
    margin-left: -15px;
}
    
    
    
.video-section-1-sub-title {
    font-size: 18px;
    text-align: center;
    margin: auto;
    margin-top: 0px;
}

    
.video-section-1-content-left {
    float: none;
    margin: auto;
    margin-top: 30px;
    width: 95%;
}   

    
.video-section-1-content-right {
    width: 85%;
    float: unset;
    padding-top: 50px;
    font-size: 51px;
    padding-left: 10px;
    margin: auto;
    color: #252525;
}
    
    
.video-section-1 li {
    list-style: none;
    margin-bottom: 25px;
    font-size: 18px;
}   
    
.video-section-1 li p {
    list-style: none;
    line-height: 22px;
}   
    
    


.video-section-2-1 {
    padding: 0% 0;
    padding-bottom: 20%;
}   
    
    
    
.video-section-2-1-title {
    font-size: 23px;
    line-height: 31px;
    width: 195px;
}
    
    
.video-section-2-1-content {
    font-size: 17px;
    line-height: 32px;
    margin-top: 0px;
}   

    
/*--------------------------SECTION 2-------------------------------------*/    
    
.benefit-img-left {
    width: 80%; 
}
    
    
.benefit-content-wrapper-left, .benefit-content-wrapper-right {
width:100%;     
}


.benefit-title-left,.benefit-title-right {
    font-size: 19px;
}

    
.benefit-content-left, .benefit-content-right {
    font-size: 18px;
    line-height: 35px;
}   

        
.video-section-3-title,.video-section-4-title,.video-section-5-title {
    font-size: 24px;
    line-height: 0px;
}


.video-section-2-title {

    font-size: 25px;
    line-height: 35px;
    width: 240px;

}


    
    

.video-project-container,.video-benefit-container {
    margin-top: 50px;
} 
    
    
    
    
    
/*-------------------- Section 3 ----------------------*/   
    
.testimonial-content-left, .testimonial-content-right {
    font-size: 18px;
    width: 100%;
    padding: unset;
    background: unset;
}
    
    
.testimonial-video-project-left, .testimonial-video-project-right {
    float: unset;
    width: 85%; 
}   

    
.client-testimonial-name {
    padding-top: 20px;
}   

    
.read-more-link{
font-size: 18px;
text-decoration: underline;
}   
    



.testimonial-container {
    margin-top: 50px;
}




.testimonial-content-wrapper-left, .testimonial-content-wrapper-right {
    width: 98%;
    position: relative;
    text-align: center;
}



.hide-desktop {
    display: block;
    width: 250px;
    margin: auto;
}



    
    
    
/*-------------------- Section 4 ----------------------*/
    
    
.video-project-img-left, .video-project-img-right {
    float: unset;
    width: 85%; 
}   
    
    
    
.video-project-title-left,.video-project-title-right{
        
font-size: 20px;
line-height:45px;
        
}
    

    
    
.video-project-content-left,.video-project-content-right {
font-size: 18px;
line-height: 35px;
}
    

    
    
.video-project-content-wrapper-left, .video-project-content-wrapper-right { 
width: 100%;            
}
    
    
    




.video-section-5-title {
    font-size: 22px;
    text-align: center;
}
    





.swiper-button-next, .swiper-button-prev {
       top: -185px;
}




.video-section-4 .swiper-button-next,.video-section-4 .swiper-button-prev {
       top: -320px;
}




    
    
} /*-------------------- 500 --------------------*/




    
    

@media only screen and (max-width: 450px) {

/*
.video-section-1, .video-section-2, .video-section-3, .video-section-4, .video-section-5 {
    height: 100%;
    margin-bottom: 80px;
}
*/



.video-section-2-1 {
    height: 100%;
}




}/*------------------450-----------------*/
























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


















<section class="video-section-1">  <!----------------------------video-section-1-------------------------------->



<div class="max-width" >


                <?php  while(have_posts()) { the_post(); ?>

                <div class="video-section-1-title">

                    <?php echo CFS()->get('_title');?>

                    </div><!-- video-section-1-title -->





                  <div class="video-section-1-sub-title">
                    <?php echo CFS()->get('_subtitle');?>
                  </div>    <!-- video-section-1-subtitle -->





                  <div class="video-section-1-content-left">

                     <div class="modeo-video">
                         
                         
                         
            <!-- <iframe src="https://player.vimeo.com/video/142112139?title=0&byline=0&portrait=0" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="514" height="291"></iframe> -->
                         
                            <div class="play-arrow-right"> </div>
                            <div class="bg-border"> </div>
    
                            
                            <a href="<?php echo CFS()->get('_video_url'); ?>" class="venobox" data-vbtype="video"> </a> 
                                
                            <img class="main_video_desktop_thumbnail" src="<?php echo CFS()->get('main_video_desktop_thumbnail');?>"/>
                         
                            <img class="main_video_mobile_thumbnail" src="<?php echo CFS()->get('main_video_mobile_thumbnail');?>"/>
                         
                         
                         
                         
                    </div>


                  </div>





                  <div class="video-section-1-content-right">


                    <?php the_content();?>


                  </div>










                <?php } // end of while ?>

 </div> <!--  max-width -->

</section> <!-- video-section-1 -->






















<section class="video-section-2-1"><!-------------------------video-section-2-1----------------------------->

<div class="max-width">








                <div class="video-section-2-1-title">

                    What is an Explainer Video?    

                </div> <!----- video-section-5-title ----->



                </br>



                <div class="video-section-2-1-content">
                It is a short marketing video that focuses on explaining an organization's idea, product, or service using a killer script, professional voice over, stimulating music, snappy sound effects, and clear-cut graphics animation. 

                </div> <!----- video-section-5-content ----->



                </br> </br>


                <div class="video-section-2-1-content">
                Animated explainer videos are optimized in different industries such as E-commerce, Software & SaaS, and Healthcare. The advantages it brings grow in popularity and other industries tend to adapt to its use. 
                </div> <!----- video-section-5-content ----->












</section>  <!---------------------------- END video-section-5 ------------------------------>































<section class="video-section-2"><!----------------------------video-section-2-------------------------------->


        <div class="max-width" >


                        <div class="video-section-2-title">

                            Benefits of Using an Explainer Video

                        </div><!-- video-section-2-title -->





                            <div class="video-section-1-sub-title">


                          </div>    <!-- video-section-1-subtitle -->







                    <div class="swiper-container video-benefit-container">


                    <div class="swiper-wrapper">



                    <?php $the_query = new WP_Query(array(

                        'post_type' => 'video_benefit',
                         'posts_per_page' => 6,
                         'order' => ASC

                        )); 



                        if($the_query->have_posts()) {  
                                    
                                    while($the_query->have_posts()) {   $the_query->the_post();         
                                    
                                    $tst_left =  ($testimonial_counter%2 == 0)?'right':'left';
                                    $tst_right = ($testimonial_counter%2 == 0)?'left':'right';
                                
                        ?>  


                    <div class="swiper-slide video-benefit video-benefit-<?php echo $tst_right; ?>">
                        

                        <div class="video-benefit-box-content">


                                <div class="benefit-img-<?php echo $tst_right; ?>">
                                    <?php the_post_thumbnail();?>
                                </div>


                                <div class="benefit-content-wrapper-<?php echo $tst_right; ?>">


                                    <div class="benefit-title-<?php echo $tst_right; ?>">
                                    <?php the_title(); ?>
                                    </div>


                                    <div class="benefit-content-<?php echo $tst_right; ?>">
                                    <?php the_content(); ?>
                                    </div>


                                </div> <!----------- benefit-content ----------->



                        </div>



                    </div> <!-- video-benefit -->







                        <?php $testimonial_counter++;
                                } // end of while       
                            } // end of if
                            wp_reset_postdata();        
                        ?>  



                    </div> <!----------- video-benefit-inner-container ----------->





                       

                    </div> <!----------- video-benefit-container ----------->

         <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>




        </div> <!--max-width -->



</section> <!-- video-section-2 -->















<section class="video-section-3"> <!-------------------  -video-section-3 -------------------->
<div class="max-width" >





            <div class="video-section-3-title">

                Recommendation

            </div><!-- video-section-1-title -->









            <div class="swiper-container testimonial-container">


            <div class="swiper-wrapper">



            <?php $the_query = new WP_Query(array(

                'post_type' => 'testimonial',
                 'posts_per_page' => -1,
                 'order' => ASC

                )); 



                if($the_query->have_posts()) {  
                            
                            while($the_query->have_posts()) {   $the_query->the_post();         
                            
                            $tst_left =  ($testimonial_counter%2 == 0)?'right':'left';
                            $tst_right = ($testimonial_counter%2 == 0)?'left':'right';
                        
                ?>  


            <div class="swiper-slide testimonial video-testimonial-<?php echo $tst_right; ?>">
                

                <div class="testimonial-box-content-<?php echo $tst_right; ?>">





                    <div class="testimonial-video-project-<?php echo $tst_right; ?>">

                            <!--<a class="venobox" data-vbtype="video" href="<?php echo CFS()->get('_video_url');?>">



                              <div class="play-arrow-right"> </div>
                              <div class="bg-border"> </div>


                            <img src="<?php echo CFS()->get('_video_thumbnail');?>" />

                            </a> -->

                            <div class="modeo-video testimonial-video-a" style="position: relative;">

                            <!--<iframe src="https://vimeo.com/250551487" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="514" height="291"></iframe>

                            <iframe src="" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

                            <div class="play-arrow-right"></div>
                            <div class="bg-border"></div>
    
                            
                            <a href="<?php echo CFS()->get('_embeded_video_url'); ?>" class="venobox" data-vbtype="video"> </a> 
                                
                            <img class="video_desktop_thumbnail" src="<?php echo CFS()->get('video_desktop_thumbnail');?>"/>    
                            
                            <img class="video_mobile_thumbnail" src="<?php echo CFS()->get('video_mobile_thumbnail');?>"/>      
                                
                                
                           </div>


                    </div>
















                    <div id="testimonial -<?php the_title(); ?>" class="testimonial-content-wrapper-<?php echo $tst_right; ?>">



                        <div class="client-testimonial-pic-<?php echo $tst_right; ?>">

                            <div class="testimonial-img-<?php echo $tst_right; ?>">
                                <?php the_post_thumbnail();?>
                            </div>


                            <div class="client-testimonial-name hide-mobile">
                                <?php the_title();?>
                            </div>


                            <div class="client-testimonial-position hide-mobile">
                                <?php echo CFS()->get('_client_position');?> at <a href="<?php echo CFS()->get('_website_url');?>" target="_blank"> <?php echo CFS()->get('_website_name');?></a>
                            </div>



                        </div>




                    

                        <div class="testimonial-content-<?php echo $tst_right; ?>">
                            
                            <div class="arrow-<?php echo $tst_right; ?>"></div>



                            <span>  <?php the_excerpt(); ?>

                            <!-- ------------GET FIRST WORD OF TITLE-------------- -->

                            <?php $title = get_the_title(); 
                            $title_array = explode(' ', $title);
                            $first_word = $title_array[0]; ?>
                            
                            <a class="venobox read-more-link" href="#<?php echo $first_word;?>" data-vbtype="inline">Read More </a>

                            </span>

                            


                            <div class="client-testimonial-name hide-desktop">
                                <?php the_title(); ?>
                            </div>


                            <div class="client-testimonial-position hide-desktop">
                                <?php echo CFS()->get('_client_position');?> at <a href="<?php echo CFS()->get('_website_url');?>" target="_blank"> <?php echo CFS()->get('_website_name');?> </a>
                            </div>




                        </div>



                    </div> <!----------- testimonial-content ----------->










                    <div id="<?php echo $first_word;?>" style="display:none;">

                    <div id="<?php echo $first_word;?>" class="testimonial-content-wrapper-<?php echo $tst_right; ?>" style="width:100%;margin-top:30px;">



                    <!--    <div class="client-testimonial-pic-<?php echo $tst_right; ?>">

                            <div class="testimonial-img-<?php echo $tst_right; ?>">
                                <?php the_post_thumbnail();?>
                            </div>


                        </div> -->




                    

                        <div class="testimonial-content-<?php echo $tst_right; ?>" style="float: unset; margin:auto;">
                            
                          <div class="vbox-close testimonial-content-close"> X </div>


                            <span>  <?php the_content(); ?> </span>


                            <div class="client-testimonial-name">
                                <?php the_title(); ?>
                            </div>


                            <div class="client-testimonial-position">
                                <?php echo CFS()->get('_client_position');?> at <?php echo CFS()->get('_website_name');?>
                            </div>






                        </div>



                    </div> <!----------- testimonial-content ----------->
                    </div>








                </div>



            </div> <!-- video-testimonial -->







                <?php $testimonial_counter++;
                        } // end of while       
                    } // end of if
                    wp_reset_postdata();        
                ?>  



            </div> <!----------- video-benefit-inner-container ----------->







        

            </div> <!----------- video-benefit-container ----------->


    <!-------- Add Arrows -------->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>







</div> <!--max-width -->

</section> <!-- video-section-3 -->











<section class="video-section-4"><!---------------------------------------------video-section-4----------------------------------->

<div class="max-width" >




                <div class="video-section-4-title">

                    Explainer Video Projects

                </div> <!----- video-section-4-title ----->









                <div class="swiper-container video-project-container">


                    <div class="swiper-wrapper">



                    <?php $the_query = new WP_Query(array(

                        'post_type' => 'video_projects',
                         'posts_per_page' => 7

                        )); 



                        if($the_query->have_posts()) {
                                    
                                    while($the_query->have_posts()) {   $the_query->the_post();         
                                    
                                    $tst_left =  ($testimonial_counter%2 == 0)?'right':'left';
                                    $tst_right = ($testimonial_counter%2 == 0)?'left':'right';
                                
                        ?>  


                    <div class="swiper-slide video-project video-project-<?php echo $tst_right; ?>">
                        

                        <div class="video-project-box-content">




                        <!--    <a class="venobox" data-vbtype="video" href="<?php echo CFS()->get('_project_video_url');?>">

                                
                                    
                                    <div class="play-arrow-right"> </div>
                                     <div class="bg-border"> </div>

                                    <?php the_post_thumbnail();?>

                                </div>

                             </a> -->


                             <div class="video-project-img-<?php echo $tst_right; ?>">


                             <div class="modeo-video video-project-a" style="position: relative;">



                            
                            <!--<iframe src="https://vimeo.com/250551487" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="514" height="291"></iframe>

                            <iframe id="video-iframe" src="<?php echo CFS()->get('_embed_project_video_url');?>?api=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                                 
                                 
                            <div class="play-arrow-right"></div>
                            <div class="bg-border"></div>
    
                            
                            <a href="<?php echo CFS()->get('_embed_project_video_url'); ?>" class="venobox" data-vbtype="video"> </a>   
                                
                            <img class="project_video_desktop_thumbnail" src="<?php echo CFS()->get('project_video_desktop_thumbnail'); ?>"/>
                                 
                            <img class="project_video_mobile_thumbnail" src="<?php echo CFS()->get('project_video_mobile_thumbnail'); ?>"/>  
                                 

                            </div>

                            </div>





                                <div class="video-project-content-wrapper-<?php echo $tst_right; ?>">

                                    <div class="video-project-title-<?php echo $tst_right; ?>">
                                    <?php the_title(); ?>
                                    </div>


                                    <div class="video-project-content-<?php echo $tst_right; ?>">
                                    <?php the_content(); ?>
                                    </div>


                                </div> <!----------- benefit-content ----------->



                        </div>



                    </div> <!-- video-benefit -->







                        <?php $testimonial_counter++;
                                } // end of while       
                            } // end of if
                            wp_reset_postdata();        
                        ?>  



                    </div> <!----------- video-benefit-inner-container ----------->


                    


                    

                    </div> <!----------- video-benefit-container ----------->



                        <!-- Add Arrows -->
                        <div class="swiper-button-next video-benefit-prev-next"> </div>

                        <div class="swiper-button-prev video-benefit-prev-next"> </div>




    <div id="video-pagination" class="swiper-pagination video-project-pagination"> </div>



















</div> <!--max-width -->


</section> <!---------------------------- END video-section-4 ------------------------------>














<section class="video-section-5 section-desktop"><!---------------------------------------------video-section-5----------------------------------->

<div class="max-width" >



<div class="contact-title"> Contact Us </div>


<div class="contact-subtitle"> We love to create an Explainer video for you! We’ll get back to you within 24 hours regarding your inquiry. </div>
    


<?php
get_template_part('footer-contact-form');
?>


</div>

</section>  <!---------------------------- END video-section-5 ------------------------------>













<section class="video-section-5 section-mobile"><!---------------------------------------------video-section-5----------------------------------->

<div class="max-width" >








                <div class="video-section-5-title">

                     Would you like to know more?

                </div> <!----- video-section-5-title ----->







                <div class="video-section-5-content">
                
                </div> <!----- video-section-5-content ----->





                 <div class="video-section-5-button"> <a href="<?php bloginfo('url');?>/contact-us" target="_blank"> <p> I'm Interested. </p>  </a> </div> 

</div>

</section>  <!---------------------------- END video-section-5 ------------------------------>





















<div class="footer-promo-link">

    <a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank">  
    

    </a>

</div>















<?php
get_template_part('footer2');
    
?>



<script>

$(document).ready(function() {






/*-------------------- VIDEO BENEFIT SECTION 2 ---------------------*/

var swiper = new Swiper('.video-benefit-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 700,
      effect: 'fade',
      loop: true,
      touchRatio: 0,
      fadeEffect: {
    crossFade: true
  },

      autoplay: {
        delay: 6000,
        disableOnInteraction: true,
  },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },





});




/*

var mySwiper = document.querySelector('.video-project-container').swiper

$(".video-project-container").hover(function(){
     mySwiper.autoplay.stop();
}), function(){
     mySwiper.autoplay.startAutoplay();
};


    
 
*/







/*------------------ TESTIMONIAL SECTION 3 ---------------------*/

var swiper = new Swiper('.testimonial-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 700,
      effect: 'fade',
      loop: true,
      touchRatio: 0,
      
      fadeEffect: {
    crossFade: true
  },

      autoplay: {
        delay: 6000,
        disableOnInteraction: true,
  },




      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

})





/*------------------ TESTIMONIAL SECTION 4 ---------------------*/



var menu = ['Software & Saas','Business Solution','Educational','Science and Tech','Products','E-Commerce', 'Healthcare']


var swiper = new Swiper('.video-project-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 700,
      effect: 'fade',
      loop: true,
      touchRatio: 0,
      
      fadeEffect: {
      crossFade: true
  },

      autoplay: {
        delay: 6000,
        disableOnInteraction: true,
  },



   pagination: {

      el: '.swiper-pagination',
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


    

    
var mySwiper = document.querySelector('.video-project-container').swiper

    $(".video-project-a a").click(function(){
        mySwiper.autoplay.stop();
        console.log('slider stopped');
}); 
    

    


var mySwiper = document.querySelector('.testimonial-container').swiper

    $(".testimonial-video-a a").click(function(){
        mySwiper.autoplay.stop();
        console.log('slider stopped');
});     
    
    








$(".video-project-pagination .swiper-pagination-bullet p").append('<div class="underline-hover"></div>');


    



});
















$(document).ready(function() {


/*
    var clickIframe = window.setInterval(checkFocus, 100);

    function checkFocus() {
        
      if(document.activeElement == document.getElementById("video-iframe")) {
        alert('Focus Left Current Window and Moved to Iframe / Possible click!');
        window.focus();
       }
    }






    var iframe = $('#video-iframe')[0],
    player = $f(iframe);

    // When the player is ready, add listeners for pause, finish, and playProgress
    player.addEvent('ready');

    // Call the API when a button is pressed
    $('#video-project-play').bind('click', function() {
        $( ".video-project-container" ).click();
        player.api("play");
        document.getElementById("video-project-play").style.display = "none";
         
    });







    
    var iframe = document.getElementById('video-iframe');

    // $f == Froogaloop
    var player = $f(iframe);

    // bind events
    var playButton = document.getElementById("video-project-play");
    playButton.addEventListener("click", function() {
      player.api("play");
    });

    var pauseButton = document.getElementById("pause-button");
    pauseButton.addEventListener("click", function() {
      player.api("pause");
    });


*/



    
    
   
    

});








/*------------------POPUP button------------------




      jQuery(function() {
        
        jQuery('.promo-link-bg').attr('style','display:none;');
       

     });    





        jQuery(document).ready(function() {
        

             if ($(window).width() > 900) {
            
            
        
          jQuery(document).one('mouseleave', function() {
              
              jQuery('.promo-link-bg').attr('style','display: block;');
              
             
              
            });
                 
                 
             }   
                 
    
        });
        
        
        
        jQuery('.x-close').click(function() {
          
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
        

 




/*----------------------SAMPLE VIDEO TAB CLICK-----------------------*/

    $(document).ready(function() {

    /*    
        
    $("#menu-item-168").hover(function(){
       $( ".dropdown-toggle" ).click();
    });



    $(!"#menu-item-168").hover(function() {

    $( ".blog-nav" ).click();

    });

    */


    });





/*------------------------FOOTER AD-----------------------------


jQuery(window).on("scroll", function() {




  jQuery('.footer-promo-link').attr('style','bottom:-5px;');


 
});

*/
    
    


$(document).ready(function(){

$(".x-close").click(function(){
    jQuery('.footer-promo-link').attr('style','bottom:0;');
});


});



    
    
</script>
