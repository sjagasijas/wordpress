<?php

/*
Template Name: Sample Work  (By Industry) 
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
    
    

.vbox-overlay {     
    font-family: Open sans;     
}
    
        
    
    
.swiper-button-next {
    float: right;
    right: -6%;
    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/11/ArrowR-1.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
    webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}   
    
    
    

    .swiper-button-next:hover {
    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/11/ArrowR-2-HoverClick.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
}
    
    
    
    
    
    
    
.swiper-button-prev {
    left: -6%;
    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/11/ArrowL-1.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
    webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}   
    
        
    
    
.swiper-button-prev:hover {
    background: url(http://modeomedia.com/marketing-videos/wp-content/uploads/2018/11/ArrowL-2-HoverClick.svg) no-repeat center center !important;
    background-size: 100% 100% !important;
}   
    
    
    
    


.main-container {
    font-family: Open Sans;
}


.max-width {
    max-width: 1600px;
    margin: auto;
}



.sample-work-section-1 {
    height: 50vh;
    padding-top: 150PX;
    color: #202024;
}




.section-1-post-wrapper {
width: 100%;    
}

    
    
.section-1-video a {
    
    background-color: transparent !important;
    color: #fff;
    font-size: 24px;
    height: 100%;
    position: absolute;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
    opacity: 0.93;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 2;
}
        
        
    
    
    
    
    
.mobile_video_industry {
display:none;       
}   

    
.section-1-video-mobile {
display:none;       
}   
    

    
.section-1-video-mobile a {
    
    background-color: transparent !important;
    color: #fff;
    font-size: 24px;
    height: 100%;
    position: absolute;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
    opacity: 0.93;
    margin:auto;
    left:0;
    right:0;
    z-index: 2;         
}   
    
    
    


.section-1-left-wrapper{

    float: left;
    width: 50%;
    margin-top: 80px;
}



.section-1-right-wrapper{

    float: right;
    width: 45%;
    height: 100%;
    position: relative;

}




.section-1-right-wrapper iframe {
position: relative;
width: 100%;
}




.section-1-title {
    font-size: 30px;
    font-weight: bold;
}


.section-1-content {
    font-size: 20px;
    line-height: 40px;
    margin-top: 20px;
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
      
      
      
      
      
    .promo-link{
    width: 500px;
    height: 400px;
    position: absolute;
    margin: auto;
    background: #f8f8f8;
    left: 0;
    right: 0;
    top: 0px;
    bottom: 0;


    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2019/03/promo-link-2-950.svg) no-repeat center center !important;
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
    
    
    
    
    
    
    
    
    
    
    


/*--------------------SECTION 2-------------------------*/



.sample-work-section-2 {

    color: #202024;
    height: 135vh;
    background-color: #f8f8f8; 
}



.industry-video-wrapper {
   padding-top: 80px;
}


.industry-video-wrapper::after {
content: ' ';
display: table;
clear:both;
}


.mobile_thumbnail_image{ display:none; }


.industry-outer-wrap {
 width: 33.33%;
 float:left;
 position:relative;
 height: 315px;
 margin-bottom: 50px;
}


.industry-video-post {
   margin:auto;
   position: absolute;
   left: 0;
   right: 0;
   width: 80%;
}




.category-button-wrapper {
    text-align: center;
    margin: 120px auto; 
    padding-top: 100px;
    width: 1230px;
}



.category-button-wrapper .active {
    opacity: unset;
    color: #fff !important;
    background: #232323; 
    /*border-bottom: 6px solid #3b8584; */
}


.category-button-wrapper .active:hover .underline-hover {
    width: 0%;
}



.category-button-wrapper .active a {
    color: #fff !important;
}



.category-button-wrapper .active:hover p {
    padding-bottom: unset;
    border-bottom: unset;
}




.category-button {

    border-radius: 5px;
    float: left;
    color: #352e2e;
    opacity: unset;
    width: 160px;
    height: 50px;
  /*   padding: 20px;
    border-bottom: 6px solid rgb(189, 202, 202); */
    /* background: #232323; */
    margin-right: 15px;
    margin-top: 15px;
    position: relative;
    cursor: pointer;


    webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}



    


.category-button:hover {
  /*  background-color: #eaffff;
    color: #a5a5a5;
    border-bottom: 6px solid rgb(183, 202, 202); */
}



.category-button p {
margin-top: 20px;
position: relative;
display: inline-block;
}



.category-button .underline-hover {
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







    
.category-button:hover .underline-hover {
width: 100%;
}





.category-button:last-child {
    margin-right: 0px;
}




.category-button a {
font-size: 15px;
width: 100%;
height: 100%;
position: absolute;
left: 0;
top: -5px;
text-decoration: none;
color: #352e2e;
}




/* .category-button-mobile{display:none;} */





.industry-video-post a {

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


.industry-grid-box {
    overflow: hidden !important;
}


.industry-inner-grid-box {
    position: relative;
}


.video-post-title {
    font-size: 18px;
    font-weight: bold;
    height: 85px;
    background: #fff;
}


.video-post-title p:first-child {
    padding-top: 17px;
    padding-left: 17px;
    margin-bottom: 4px;
}


.video-post-title p:nth-child(2) {
    padding-top: unset;
    font-weight: 400;
    font-size: 16px;
    padding-left: 17px;
}



.arrow-right {
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


.dropbtn {
    width: 250px;
    /* height: 25px; */
    padding: 20px;
   /* border-bottom: 6px solid rgb(189, 202, 202); */
    background: #232323;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    font-size: 20px;
}



.dropbtn:hover, .dropbtn:focus {
    background: #232323;
    color: #fff;
}


.dropdown {
    position: relative;
    display: none;
}



.dropdown i {

    position: absolute;
    right: 20px;
    font-size: 25px;

}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f8f8f8;
    min-width: 160px;
    width: 100%;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 3;
}

.dropdown-content a {
    color: #262626;
    padding: 16px 16px;
    text-decoration: none;
    font-size: 21px;
    display: block;
    /*border-bottom: 1px solid #bbc7c7; */
}




.show {display: block;}



/*-----------------------------SECTION 3-----------------------------*/

.sample-work-section-3 {

    color: #202024;
    height: 60vh;
    
}


.hide-desktop {
display:none;
}






.testimonial-container {
margin-top: 150px;
width: 80%;
}




.video-section-3-sub-title {
font-size:20px;
text-align: center;
margin:auto;
}




.client-testimonial-name{

font-weight: bold;

}



.client-testimonial-name{

margin-top: 15px;

}


.read-more-link {
font-size: 20px;
font-weight:bold;
color:#000;
cursor: pointer !important; 
}


.read-more-link:hover{
color:#3c8687;
}



.testimonial-wrapper{

width: 100%;
position: relative;

}







/*-------------------------------- LEFT ----------------------------------*/

.testimonial-box-content-left {
width:100%;
}



.content-arrow-left{
width: 0;
position:absolute;
height: 0;
border-style: solid;
border-width: 12.5px 25px 12.5px 0;
border-color: transparent #f8f8f8 transparent transparent;
margin-left: -65px;
margin-top: 35px;
}



.client-testimonial-pic-left {
width: 250px;
text-align: center; 
float: left;
line-height: 24px;
font-size:18px;
}



.testimonial-content-left {
width: 750px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
position:relative;
}


.testimonial-content-wrapper-left{
float:left;
width:95%;
margin:auto;
margin-top: 60px;
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



.content-arrow-right{
        width: 0;
    height: 0;
    border-style: solid;
    border-width: 12.5px 0 12.5px 25px;
    border-color: transparent transparent transparent #f8f8f8;
    right: -22px;
    position: absolute;
}


.testimonial-box-content-right {
width:100%;
}



.testimonial-content-wrapper-right{
float:right;
width:95%;
margin:auto;
margin-top: 60px;
}



.testimonial-content-right { 
width: 750px;
float: left;
font-size: 20px;
line-height: 32px;
padding: 40px;
background-color: #f8f8f8;
border-radius: 5px;
position:relative;
}









/*--------------------------------------------------------MEDIA QUERIES----------------------------------------------------------------*/




@media only screen and (max-width: 1630px) {


.max-width {
    width: 90%;
    margin: auto;
}



} /*---------------1630--------------*/











@media only screen and (max-width: 1600px) {



.testimonial-content-left  ,.testimonial-content-right {
    width: 650px;
}

    
    
.sample-work-section-3{
    height: 100%;  
}



} /*---------------1600--------------*/









@media only screen and (max-width: 1420px) {


.category-button-wrapper {
    width: 1205px;
}



.category-button {
    width: 155px;
    height: 50px;
}





.testimonial-content-left, .testimonial-content-right {
    width: 580px;
}








} /*---------------1410--------------*/













@media only screen and (max-width: 1350px) {



.testimonial-content-left, .testimonial-content-right {
    width: 450px;
}




} /*---------------1350--------------*/














@media only screen and (max-width: 1250px) {


.max-width {
    width: 90%;
    margin: auto;
}


.sample-work-section-1 {
    height: 100%;
    padding-top: 80PX;
    padding-bottom: 55px;
}


.section-1-left-wrapper {
    float: unset;
    width: 80%;
    margin: auto;
    text-align: center;
    margin-top: 80px;
}


.section-1-right-wrapper {
    float: unset;
    width: 90%;
    padding-top: 50px;
    margin: auto;
    height: 100%;
    position: relative;
}


    
    
.section-1-video-mobile {
    display: block;
    margin: 30px auto;
    width: 80%;
    position: relative;
}   
    
    
        
.section-1-video {
display:none;               
}
    
    
    



/*------------------SECTION 2------------------------*/

.category-button{
display:none;

}

.dropdown{    

display: inline-block;
margin-bottom: 50px;
}


.category-button-wrapper {
    width: 100%;
    margin: 0px auto;
}







.industry-outer-wrap {
    width: 50%;
}


.sample-work-section-2 {
    height: 100%;
    padding-bottom: 60px;
}








} 
    
    
    
    
    
    
    



@media only screen and (max-width: 1100px) {




.sample-work-section-3 {
    height: 100%;
    margin-bottom: 20px;
}

.testimonial-container {
    margin-top: 30px;
    width: 80%;
}



.video-thumbnail-image {display: none;}
.mobile_thumbnail_image {display: block;}





.industry-outer-wrap {
    height: 470px;
    margin-bottom: 70px;
}


    
    


.client-testimonial-pic-left,.client-testimonial-pic-right {
    width: 250px;
    float: unset;
    margin: auto;
    margin-bottom: 30px;
}




.testimonial-content-left,.testimonial-content-right {
    width: 80%;
    float: unset;
    margin: auto;
    padding: 25px;
}




.content-arrow-left,.content-arrow-right {
    display: none;
}




.testimonial-content-wrapper-left,.testimonial-content-wrapper-right{
float: unset;
}
    
    
    


} /*---------------1100--------------*/


    
    
    
    
@media only screen and (max-width: 900px) {
    
    
.footer-promo-link {

    background: url(https://modeomedia.com/marketing-videos/wp-content/uploads/2019/03/promo-link-mobile-950.svg) no-repeat center center !important;
    background-size: 100% 100% !important;  
}   
    
    
} /*---------------900--------------*/  






@media only screen and (max-width: 749px) {

.industry-outer-wrap {
    height: 590px;
    margin-bottom: 70px;
    position: relative;
}


    
.industry-outer-wrap {
    width: 100%;
}

    
.desktop_video_industry {
    display:none;
}
    
    
.mobile_video_industry {
    display:block;  
}

    
.section-1-video-mobile {
    width: 90%;
    position: relative;
}


.sample-work-section-1 {
    padding-top: 0PX;
    padding-bottom: 0;
}   




.dropdown-content a {
font-size: 20px;    
}




}/*---------------700--------------*/



    
    
    
    
    


@media only screen and (max-width: 650px) {
    
    
    
.industry-outer-wrap {
    height: 550px;

}
    
    
    
    
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


.client-testimonial-pic-left, .client-testimonial-pic-right {
    margin-bottom: 0;
    font-size: 15px;
}


.testimonial-box-content-left .testimonial-content-left,.testimonial-box-content-right .testimonial-content-right {
   background-color: unset;
   text-align: center;
   font-size: 15px;
}

.testimonial-container {
    margin-top: 50px;
    width: 90%;
}


.read-more-link {
    font-size: 18px;
}

    
    
    
}/*---------------650--------------*/



    
    
    
    
    


@media only screen and (max-width: 500px) {


.testimonial-content-wrapper-left,.testimonial-content-wrapper-right {
    margin-top: 0px; 
} 
    
    
.industry-outer-wrap {
    height: 400px;
}



.section-1-title {
    font-size: 25px;
}


.section-1-content{
        
font-size: 17px;
line-height: 32px;      
                
}




} /*---------------500--------------*/





@media only screen and (max-width: 480px) {

    
.max-width {
    width: 85%; 
}   
    
    

    

    
    
.section-1-left-wrapper {
    margin-top: 0px;
    width: 100%;
}   
    

    
.industry-video-post {
    width: 95%;
}
    

.industry-outer-wrap {
    margin-bottom: 120px;
}   
    

    
.video-post-title {
    font-size: 20px;
    background: #f8f8f8;
}   
    
    
.video-post-title p:nth-child(2) {
    font-size: 16px;
}   
    
    
    

} /*---------------480--------------*/


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

















<section class="sample-work-section-1">  <!-----------------sample-work-section-1------------------->

    <div class="max-width" >


    <?php  while(have_posts()) { the_post(); ?> 



      <div class="section-1-post-wrapper">




        <div class="section-1-left-wrapper" >


            <div class="section-1-title">

                <?php echo CFS()->get('_featured_video_title');?>

            </div>
            
            
            
            
            
            <div class="section-1-video-mobile">

            <!--<iframe id="video-iframe" src="<?php echo CFS()->get('_featured_video');?>?api=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>                </iframe> -->
                
                
                            <div class="arrow-right"></div>
                            <div class="bg-border"></div>
    
                            
                            <a href="<?php echo CFS()->get('_featured_video'); ?>" class="venobox" data-vbtype="video"> </a>    
                                
                            <img class="desktop_video_industry" src="<?php echo CFS()->get('industry_desktop_thumbnail');?>"/>  
                            
                            <img class="mobile_video_industry" src="<?php echo CFS()->get('industry_mobile_thumbnail');?>"/>            
                

            </div>







            <div class="section-1-content">

                <?php the_content(); ?>

            </div>




        </div> <!----- section-1-left-content ----->









        <div class="section-1-right-wrapper" >


            <div class="section-1-video">

            <!--<iframe id="video-iframe" src="<?php echo CFS()->get('_featured_video');?>?api=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>                </iframe> -->
                
                
                            <div class="arrow-right"></div>
                            <div class="bg-border"></div>
    
                            
                            <a href="<?php echo CFS()->get('_featured_video'); ?>" class="venobox" data-vbtype="video"> </a>    
                            <img class="desktop_video_industry" src="<?php echo CFS()->get('industry_desktop_thumbnail');?>"/>          
                

            </div>




        </div> <!----- section-1-right-content ----->





      </div> <!-------------------Section-1-post-wrapper------------------------>




    <?php } ?>










    </div> <!--------- MAX WIDTH ------------>

</section>













        <?php while(have_posts()){ the_post();


            //Get Category name from Page;



            $values = CFS()->get('_type_of_industry');
            foreach ( $values as $key => $label ) {
                $category_name = $label;
            } // end of foreach



             } // end of while

             ?>




            <div class="category-button-wrapper">





                                 <div class="<?php if ($category_name=="Software & Saas"){echo "active";} ?> category-button">  <a href="<?php bloginfo('url');?>/software"> <p> Software & Saas</p> </a> </div>
                                <div class="<?php if ($category_name=="Business Solution"){echo "active";} ?> category-button"> <a href="<?php bloginfo('url');?>/business"> <p> Business Solution</p> </a> </div>
                                <div class="<?php if ($category_name=="Educational"){echo "active";} ?> category-button">    <a href="<?php bloginfo('url');?>/educational"> <p> Educational</p> </a> </div>
                                <div class="<?php if ($category_name=="Science and Technology"){echo "active";} ?> category-button">    <a href="<?php bloginfo('url');?>/science"> <p> Science & Tech</p> </a> </div>
                                <div class="<?php if ($category_name=="Products"){echo "active";} ?> category-button">  <a href="<?php bloginfo('url');?>/products"> <p> Products</p> </a> </div>

                                <div class="<?php if ($category_name=="E-Commerce"){echo "active";} ?> category-button">    <a href="<?php bloginfo('url');?>/ecommerce"> <p> E-commerce</p> </a> </div>

                                <div class="<?php if ($category_name=="Healthcare"){echo "active";} ?> category-button">    <a href="<?php bloginfo('url');?>/healthcare"> <p> Healthcare</p> </a> </div>

                

                
                

                

                <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><?php echo $category_name; ?>  <i class="fa fa-bars" aria-hidden="true"></i></button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="<?php bloginfo('url');?>/software">Software & Saas</a>
                    <a href="<?php bloginfo('url');?>/business">Business Solution</a>
                    <a href="<?php bloginfo('url');?>/educational">Educational</a>
                    <a href="<?php bloginfo('url');?>/science">Science & Technology</a>
                    <a href="<?php bloginfo('url');?>/products">Products</a>
                    <a href="<?php bloginfo('url');?>/ecommerce">E-commerce</a>
                    <a href="<?php bloginfo('url');?>/healthcare">Healthcare</a>
                  </div>
                      
                </div>






                 <!-- <div class="dropdown category-button-mobile">
                  <div class="dropbtn"> Works by Industry  <p> &#x2263; </p> </div>
                  <div class="dropdown-content">
                    <a href="<?php bloginfo('url');?>/sample-work/healthcare">Healthcare</a>
                    <a href="<?php bloginfo('url');?>/sample-work/e-commerce">E-commerce</a>
                    <a href="<?php bloginfo('url');?>/sample-work/products">Products</a>
                    <a href="<?php bloginfo('url');?>/sample-work/science-and-technology">Science & Technology</a>
                    <a href="<?php bloginfo('url');?>/sample-work/business-solution">Business Solution</a>
                    <a href="<?php bloginfo('url');?>/sample-work/software-and-saas">Software & Saas</a>
                  </div>
                </div> -->






 </div>









<section class="sample-work-section-2">  <!-----------------sample-work-section-2------------------->

    <div class="max-width" >







            <div class="industry-video-wrapper">







            <?php 

   
                $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => $category_name,
                'posts_per_page' => 9,
            );
                
            $arr_posts = new WP_Query($args);
             
            if ($arr_posts->have_posts()) :
             
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    ?>





            <div class="industry-outer-wrap">

              <div class="industry-video-post">

                <div class="industry-grid-box">

                    <div class="industry-inner-grid-box">

                        <div class="arrow-right"></div>
                        <div class="bg-border"></div>


                        <a href="<?php echo CFS()->get('_video_url'); ?>" class="venobox" data-vbtype="video">
                         
                        </a>

                        <img class="video-thumbnail-image" src="<?php echo CFS()->get('_video_thumbnail_image');?>"/>


                        <img class="mobile_thumbnail_image" src="<?php echo CFS()->get('mobile_thumbnail_image');?>"/>

                    </div>

                </div>


                <div class="video-post-title">

                <p> <?php the_title(); ?> </p>

                <?php 

               
                 $subcategoryvalues = CFS()->get('_videosubcategories');
                            foreach ( $subcategoryvalues as $key => $sub_label ) {
                                $sub_category = $sub_label;
                 } //end of foreach 
               

                ?>


                <p> <?php echo $sub_category;?> </p>
               
                </div>



              </div> <!------------------industry-video-post----------------->

            </div> <!------------------industry-outer-wrap----------------->


              <?php

              endwhile;
              endif; 
                
              ?>


             </div> <!------------------industry-video-wrapper----------------->



    </div> <!--------- MAX WIDTH ------------>

</section>











<section class="sample-work-section-3">  <!-----------------sample-work-section-3------------------->

    <div class="max-width" >


<div class="testimonial-wrapper">







<div class="swiper-container testimonial-container">


            <div class="swiper-wrapper">



            <?php $the_query = new WP_Query(array(

                'post_type' => 'industry_testimonial',
                 'posts_per_page' => -1,
                 'order' => ASC

                )); 



                if($the_query->have_posts()) {  
                            
                            while($the_query->have_posts()) {   $the_query->the_post();         
                            
                            $tst_left =  ($testimonial_counter%2 == 0)?'right':'left';
                            $tst_right = ($testimonial_counter%2 == 0)?'left':'right';
                        
                ?>  





            <div class="swiper-slide testimonial video-testimonial-<?php echo $tst_right;?>">
                

                <div class="testimonial-box-content-<?php echo $tst_right; ?>">


                    <div id="testimonial -<?php the_title(); ?>" class="testimonial-content-wrapper-<?php echo $tst_right; ?>">



                        <div class="client-testimonial-pic-<?php echo $tst_right; ?>">

                            <div class="testimonial-img-<?php echo $tst_right; ?>">
                                <?php the_post_thumbnail();?>
                            </div>


                            <div class="client-testimonial-name hide-mobile">
                                <?php the_title();?>
                            </div>


                            <div class="client-testimonial-position hide-mobile">
                                <?php echo CFS()->get('_client_position');?> at <a href="<?php echo CFS()->get('_website_url');?>" target="_blank"> <?php echo CFS()->get('_website_name');?> </a>
                            </div>


                        

                        </div>




                    

                        <div class="testimonial-content-<?php echo $tst_right; ?>">
                            
                            <div class="content-arrow-<?php echo $tst_right; ?>"></div>



                            <span>  <?php 

                                    $excerpt =  wp_trim_words( get_the_content(),40);


                                    echo $excerpt;

                                     ?>

                            <!-- ------------GET FIRST WORD OF TITLE-------------- -->

                            <?php $title = get_the_title(); 
                            $title_array = explode(' ', $title);
                            $first_word = $title_array[0]; ?>
                            
                            <a class="venobox read-more-link" href="#<?php echo $first_word;?>" data-vbtype="inline">READ MORE</a>



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
                <div class="swiper-button-next testimonial-button-next"></div>
                <div class="swiper-button-prev testimonial-button-prev"></div>




    </div> <!--------- TESTIMONIAL WRAPPER ------------>




    </div> <!--------- MAX WIDTH ------------>

</section>








<div class="footer-promo-link">

<a href="<?php bloginfo('url');?>/promo-950-0319" target="_blank">  
    

    </a>

</div>















<?php get_template_part('footer2'); ?>




<script type="text/javascript">




/* ---------------- DROPDOWN LIST --------------------


 When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}











/*-------------------POPUP button------------------------



      jQuery(function() {
        
        jQuery('.promo-link-bg').attr('style','display:none;');
       

     });    





        jQuery( document ).ready(function() {
        
             if ($(window).width() > 900) {
        
             jQuery(document).one('mouseleave', function() {
              
              jQuery('.promo-link-bg').attr('style','display: block;');
              
              
              
              
            });
                 
             }   
                 
    
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


  jQuery('.footer-promo-link').attr('style','bottom:-5px;');


}); 
    

*/  
    
    
    
    
    






    
$(document).ready(function() {





var swiper = new Swiper ('.testimonial-container', {
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
        delay: 3000,
        disableOnInteraction: true,
  },


      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

});





$(".category-button-wrapper .category-button p").append('<div class="underline-hover"></div>');




});



</script>