<?php
/*
Template Name: Team Page 2018
*/

get_header();
	
?>








<style>
  
  
 /* 
 .main {
   max-width: 1850px;
   margin: auto;
   overflow: hidden;
}
  
 */
  
/*--------FOOTER--------*/
 
.contact-title,.footer-intro-p, .footer-contact-frm-wrapper {
display:none;
		
}
  

.footer-wrapper {
padding-top: 15px;
	
}
  
  
/*----------------*/   
  
  
  
  
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
	
	
  padding: 30vh 0;
  position: relative;
  margin: auto;
	
  } 
  
  
 
	
	
	
  .about-detail-left {

  position: relative;
  width: 780px;
  float: left;
  font-family: 'museo_sans100';
  line-height: 36px;
  z-index: 6;
  /* right: -5%; */
  font-size: 18px;
  text-align: justify;

  }
		
	
	  
  .about-title-right {
  width: 48%;
  float: right;
  opacity: .5;
  }
  
  
  .about-title-right img {
  margin-left: 10px;
  }


  .the,.team, .mbl-began {
  display:none;

  }
	
  
  /*		  
  .about-title-right {
  font-family: 'Watchword-Bold-Demo';
  width: auto;
  float: left;
  font-size: 245px;
  color: #f0f0f0;
  position: relative;
  line-height: 225px;
  z-index: 5;
  margin-left: -35px;
  left: -1%;
  letter-spacing: -14px;
  font-weight: bolder;
  text-align: justify;
  }
			
			

  .about-title-right::after {
	content: ' ';
	position: absolute;
	border-width: 42px;
	border-style: solid;
	border-color: #ffffff;
	height: 140px;
	z-index: 6;
	top: -20px;
	left: -2px;
  }

	  */
  
  
  .about-top {
	
	display:none;
	  
  }
  
  
  
	
  
  
  .about-1-underline {
		
  background-color: #eee;
  height: 5px;
  position: relative;
  z-index: 7;
  margin-left: -100%;
  width: 200%;
  margin-top: -5px;	
  }
  
  
 

  
  
	
  /* 
	
  .about-title-full::after {
	content: '';
	position: absolute;
	border-width: 35px;
	border-style: solid;
	border-color: #ffffff;
	height: 0px;
	z-index: 6;
	top: 85%;
	left: -10px;
	width: 100%;
  }
  */
  
  
  
  .about-title-full,.about-title-left,.about-4-title-full,.about-title-full-left,.about-title-full-right {
	
  opacity:.5; 	
  }
	  
	  
	  
	  
	  
	  
  
  
  .about-2-underline {
	
    background-color: #eee;
    height: 5px;
    position: relative;
    z-index: 7;
    width: 102%;
    margin: auto;
    margin-top: auto;
    left: 50%;
    transform: translateX(-50%);
	
}
  
  

  

  .about-pic-1,.about-pic-2,.about-pic-3,.about-pic-4,	
  .about-pic-5,.about-pic-6,.about-pic-7,.about-pic-8,
  .about-pic-9,.about-pic-10,.about-pic-11,.about-pic-12 {
  float: left;
  width: 33.3%;
  }
  
  
  
  

  .about-detail-right {
	
  position: relative;
  width: 765px;
  float: right;
  font-family: 'museo_sans100';
  line-height: 36px;
  z-index: 6;
  font-size: 18px;
  text-align: justify;
  
  }
  
  
  
  
  
  
  .about-title-left {
	
  width: 48%;
  float: left;
  opacity: .5;  
  }
  
  
  
  
  
  
		
		
  /*		
		
  .about-title-left {
		
  font-family: 'Watchword-Bold-Demo';
  width: auto;
  float: left;
  font-size: 245px;
  color: #f0f0f0;
  position: relative;
  line-height: 225px;
  z-index: 5;
  margin-left: -65px;
  left: 4%;
  letter-spacing: -14px;
  font-weight: bolder;		
  }
			  
  */		
			
  /*	
  .about-title-left::after {
  content: '';
  position: absolute;
  border-width: 42px;
  border-style: solid;
  border-color: #ffffff;
  height: 140px;
  z-index: 6;
  top: -20px;
  right: -45px;
  
  }
  
  */
  
  
  
  .about-3-underline {
  
  background-color: #eee;
  height: 5px;
  position: relative;
  z-index: 7;
  width: 100%;
  margin-top: -5px;
  }
  
  
  
  
  
  
  .about-4-underline {
   background-color: #eee;
   height: 5px;
   position: relative;
   z-index: 7;
   width: 100%;
   margin: auto;
   left: 0;
   right: 0;
  }

  
  
 /*  
  
  .about-4-title-full {
  
  padding-top: 17%;
  text-align: center;
  font-family: 'Watchword-Bold-Demo';
  font-size: 240px;
  color: #f0f0f0;
  position: relative;
  line-height: 190px;
  z-index: 4;
  text-align: center;	
  font-weight: bolder;
	
  }
  
  
  
  .about-4-title-full::after {	
	content: '';
	position: absolute;
	border-width: 40px;
	border-style: solid;
	border-color: #ffffff;
	height: 0px;
	z-index: 6;
	top: 82%;
	left: -10px;
	width: 100%;
	
  }
  
  */  
  
  
  
  .happiness{display:none;}
  
  

  .about-pics { position: relative; z-index: 5; margin-top: 10px; }	

  
  .about-pics:after {
    content: " ";
    display: table;
    clear: both;
	
  }
  
  
  
  /*
  
  .about-title-full-left {
  font-family: 'Watchword-Bold-Demo';
  width: 735px;
  float: left;
  font-size: 190px;
  color: #f0f0f0;
  position: relative;
  line-height: 225px;
  z-index: 5;
  margin-left: -65px;
	left: 4%;  
  letter-spacing: -14px;
  font-weight: bolder;
  }  
			
			
			

 .about-title-full-left::after {
  content: '';
  position: absolute;
  border-width: 90px;
  border-style: solid;
  border-color: #ffffff;
  height: 0px;
  z-index: 6;
  top: 55%;
  left: -10px;
  width: 100%;
 }
  
  */
  
  
  .about-detail-full-left {
  float: left;
  z-index: 6;
  position: relative;
  font-family: 'museo_sans100';
  line-height: 36px;
  /* left: -5%; */
  font-size: 18px;
  text-align: justify;
  width: 100%;
  /* margin-top: -14%; */	
}
  
  
  
  .about-5-underline-right {
  background-color: #eee;
  height: 5px;
  position: relative;
  z-index: 7;
  width: 100%;
  margin: auto;
	
}
  
  
  .about-5-underline-left {
  background-color: #eee;
  height: 5px;
  position: absolute;
  z-index: 7;
  width: 39%;
  }		  
			  
			  
  .about-vids:after {
    content: " ";
    display: table;
    clear: both;
}
			  
			  
			  
  .about-vid-1,.about-vid-2,.about-vid-3,.about-vid-4 { width: 50%; float: left; }
  .about-vids { /* margin-left: 30px; */ margin-top: 10px; position: relative;z-index: 5;}
  
  
  .vid-portrait{display:none;}
  
  

  
  .about-5-content-left {
  
  width: 48%;
  float:left;
	
  } 
  

  /*
  .about-title-full-right {
  
  font-family: 'Watchword-Bold-Demo';
  width: 735x;
  float: left;
  font-size: 215px;
  color: #f0f0f0;
  position: relative;
  line-height: 225px;
  z-index: 5;
  margin-left: -65px;
  left: 4%;
  letter-spacing: -14px;
  font-weight: bolder;
  margin-top: 10px;
}
  */
  
  
  .about-title-full-right {
    width: 695px;
    margin: auto;
}
  
  
  
  /*  
  .about-title-full-right::after {
  content: '';
  position: absolute;
  border-width: 40px;
  border-style: solid;
  border-color: #ffffff;
  height: 0px;
  z-index: 6;
  top: 51%;
  left: -10px;
  width: 100%;
}
  
  */  
  
  
  
  .about-5-content-right {
  width: 48%;
  float:right;
  }
	
	
  /*	
  .about-title-full-right {
  
  font-family: 'Watchword-Bold-Demo';
  width: 680px;
  float: right;
  font-size: 180px;
  color: #f0f0f0;
  position: relative;
  line-height: 225px;
  z-index: 5;
  margin-left: -65px;
  left: 4%;
  letter-spacing: -14px;
  font-weight: bolder;	  
}
  */	
		
		

  .about-detail-full-right {
	
  float: right;
  z-index: 6;
  position: relative;
  font-family: 'museo_sans100';
  line-height: 36px;
  font-size: 18px;
  text-align: justify;
  text-align-last: right;
  }
			
				
  .about-1:after,.about-2:after,.about-3:after,
  .about-4:after,.about-5:after {
   content: " ";
   display: table;
   clear: both;
}
  
  
  
  
  
  
  
  



@media only screen and (max-width: 1600px) {
	

	
.about-2-outer {

   height: 2950px;

}	
	
	
	
	

.about-2,.about-4 {
width: 90%;	  
}



	
	
.about-title-full .meet, .dt-began {
display:none;
}
		


.mbl-began{
display:unset;	
}	
  
  
.about-3-underline {
 
display:none;	  
	
}  
  

.about-pics {
    position: relative;
    z-index: 5;
    margin-top: 10px;
 
}
  
  
  
.about-title-right,.about-title-left,.about-4-title-full {
	float:unset;
    text-align: center;
    margin: auto;
    left: 0;
    right: 0;
	width: 650px;
}  
  

  
  
  
  
  
.about-detail-left {
    width: 850px;
    text-align: center;
    margin: auto;
	float: unset;
} 
		  
		  
		  
.about-1-underline {
    background-color: #eee;
    width: 100%;
    left: 50%;
    transform: translateX(-50%);
    margin: unset;
}


  .about-title-full{
  width: 96%;
  margin: auto;
  }
  
.about-title-full .meet {
display:none;
}
	
	
.about-title-full .the {
display:unset;
}	
	


  /*
 .about-title-full::after {
	content: ' ';
	position: absolute;
	border-width: 35px;
	border-style: solid;
	border-color: #ffffff;
	height: 0px;
	z-index: 6;
	top: 85%;
	left: -10px;
	width: 100%;
  } 

 */
  
.about-top {
 
	display:unset;
	  
}   
  
  
  
.about-bottom {
  display:none;
	  
}  
  
  
  
  
  .about-2-underline {

   background-color: #eee;
   height: 5px;
   position: relative;
   z-index: 7;
   width: 100%;
   margin: auto;
   left: 50%;
   transform: translateX(-50%);

}
  
  
  
  
  /*-----------About 3----------*/ 
  
/*   
  
  .about-title-left {
    width: 850px;
    float: unset;
    position: relative;
    margin: auto;
} 
  
 
  .about-title-left {
    font-family: 'Watchword-Bold-Demo';
    width: 100%;
	float: unset;
    font-size: 245px;
    color: #f0f0f0;
    position: relative;
    line-height: 225px;
    z-index: 5;
	margin-left: unset; 
    left: unset; 
    letter-spacing: -14px;
    font-weight: bolder;
    text-align: center;
}
  
  
  
  
  .about-title-left::after {
    content: ' ';
	position: absolute;
	border-width: 50px;
	border-style: solid;
	border-color: #ffffff;
	height: 0px;
	z-index: 6;
	top: 60%;
	left: -10px;
	width: 100%;
			
}
  
  
  */
  
  
  

  
  .about-detail-right {

    position: relative;
    width: 850px;
    float: unset;
    font-family: 'museo_sans100';
    line-height: 36px;
    z-index: 6;
    right: unset;
    font-size: 18px;
    margin: auto;
    text-align: center;
}
  
  
  
  .about-3-underline {

    background-color: #eee;
    height: 5px;
    position: absolute;
    z-index: 7;
    margin-right: unset;
    width: 100%;
    margin: auto;
	left: 0;
	right: 0;

}
  
  
  
  
  
  
  
  
  
  /*-------- About 5 ----------*/ 
  
  
  
  .about-5-content-left {

    width: 850px;
    float: unset;
    margin: auto;
}
  
  
  
  .about-5-content-right {

    width: 850px;
	float: unset;
	padding-top: 6%;
	margin: 30vh auto 0 auto;
	clear: both;
}
	
	
	
	
	.about-title-full-left,.about-title-full-right {
	
	float: unset;
	margin: auto;
	width: auto;
	text-align: center;
	width: 650px;
	  
	}
		
		
		
		
	.about-detail-full-left,.about-detail-full-right {
    float:unset;
	text-align: center;
	text-align-last: unset;
			
   }	
  	
	
  

}  /*----1600-----*/  
  
  
  
  
  
  
  
  
  
  
  
@media only screen and (max-width: 1500px) {
	
	



	
	
/*-------------------- ABOUT 2 ---------------------*/	
	
	
.about-pics {
    position: relative;
    z-index: 5;
    margin: unset;
    width: 100%;
	margin-top: 10px;
}
  
  
  
.about-pic-1, .about-pic-2, .about-pic-3, .about-pic-4,
.about-pic-5, .about-pic-6, .about-pic-7, .about-pic-8,
.about-pic-9, .about-pic-10, .about-pic-11, .about-pic-12 {

    float: left;
    width: 33.3%;
} 
  
  
  
.about-pic-1 img, .about-pic-2 img, .about-pic-3 img, .about-pic-4 img,
.about-pic-5 img, .about-pic-6 img, .about-pic-7 img, .about-pic-8 img,
.about-pic-9 img, .about-pic-10 img, .about-pic-11 img, .about-pic-12 img {

    width: 100%;
} 
 
  
  
}  /*-------------------1500---------------------*/ 
  
  

  
  
  
  
  
  

  
  
  
  
  
  
  
  
  @media only screen and (max-width: 1350px) { /*---------1350-----------*/ 
  
	

  .fun {
  display:none;	  
	
}
  
  
	  
  .happiness {
  display:unset;
 
}
  
  


  

  
  

  
  
  
}  /*---------1350-----------*/ 
  
  







 @media only screen and (max-width: 1200px) { /*---------1200-----------*/


  .the {
  
  display:none;	
}	
	  
  /*
	
  .about-2-underline {
    margin-top: -62px !important;
    width: 55%;
  } 
	
  */
	
  
	
} /*---------1200-----------*/ 
  


  
  
  
  
  
  
  
 
  
  
@media screen and (max-width: 1160px) and (orientation:portrait) {  
  
  
.vid-portrait{ display:unset }  
.vid-landscape{ display:none } 	
	
  
}  /*-------------------- PORTRAIT 1030 --------------------*/ 
  
  
  
  
  

  
  
  
  
  
  






@media screen and (max-width: 1160px) and (orientation:landscape) {  
  
  
.vid-portrait { display:none }
.vid-landscape { display:unset }
	




	

}  /*--------------------- LANDSCAPE 1030 ----------------------*/ 



  
  
  
  
  
  
  
  
  
@media only screen and (max-width: 1000px) {

	  
	  
	  
.about-title-right,.about-title-left { 
 width: 85%;
 float: unset;	
}  
  
  

	  
} /*---------------------1000----------------------*/ 

	
	
	
	
	
	
@media only screen and (max-width: 900px) {  


	  
.about-detail-left {

    width: 90%;
    text-align: center;
    margin: auto;
    float: unset;
}	  
	  
  
  .about-1-underline {
    width: 87vw;
}
  

.about-title-full .the {
display:none;
}
	
	
.about-title-full .team {
display:unset;
}	
	
	
	
  
  
 /*-----------ABOUT-2-----------*/  
  
  .about-title-full {

    font-size: 33vw;

} 
  
  

  
  
  
/*  
  .about-2-underline {

    margin-top: -67px !important;
    width: 90vw;

  }  */
  
 /*----------- about-2 ------------*/	
  
	
	
	
	
	
	
/*----------- ABOUT-3 -----------*/  
	
.about-title-left {

    text-align: center;
    margin: auto;
    left: 0;
}



.about-3-underline {
    width: 89vw;
}
	  
	  
	  
.about-detail-right {
	
    width: 90%;
	
}	
	  
	  
	  
.about-title-full-left, .about-title-full-right {
    float: unset;
    text-align: center;
	width: 90%;
}	  
	  
	
/*-----------about-3------------*/		
	


	  
	  
.about-5-underline-right {
    width: 89vw;
    margin: auto;
    margin-top: -111px;
	left:0;
	right:0;

}
		
		
		
.about-5-underline-left {
    width: 91vw;
    margin: auto;
    margin-top: -105px;
	left:0;
	right:0;
}	
  

	  
	  
	  
.about-detail-full-left, .about-detail-full-right {

    width: 90%;
    margin: auto;

}	  
	  


.about-5-content-left, .about-5-content-right {
	  
    width: 100%;
	
}	  
 
  
	  
} /*---------900-----------*/ 	
  
  

  
  
  
  
  
  
@media only screen and (max-width: 770px) { 

.about-pics {
	
    margin: unset;
		  
}
		
		
		
.bx-wrapper {
	
  margin-top: 10px !important;
			
}
	
	
	
	/*	
,.about-vid-1,.about-vid-2,.about-vid-3,.about-vid-4,
.about-vid-1 img, .about-vid-2 img, .about-vid-3 img, .about-vid-4 img {

    width: 50% !important;
    float: unset;

  }	*/
		
.about-title-full,.about-4-title-full {
    width: 85%;
	margin:auto;
}			
		
			

} /*--------------------- 770 ---------------------*/
  
  
  
 






@media only screen and (max-width: 600px){ 


  
  
  .about-1{
  
	padding: 10vh 0;
    position: relative;
    margin: auto;
}
	
		  
} /*--------------------- 770 ---------------------*/	  
	  
	  
  
  
  
  
/*----------------------- MIN ----------------------*/  
  
  
  
@media only screen and (min-width: 1600px) {
	


	
.about-pic-1, .about-pic-2, .about-pic-3, .about-pic-4, .about-pic-5, .about-pic-6, 
.about-pic-7, .about-pic-8, .about-pic-9, .about-pic-10, .about-pic-11, .about-pic-12 {
	
  float: left;
  width: 25%;
		  
}


		  
		  .about-title-full,.about-4-title-full{width:1300px; margin:auto;}
		  
		
	
} /*--------------------- 1600 ---------------------*/
  
  
  
  
  
  
	
  
  
 /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    	
		
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  
	
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
   
	
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    
	
}
	  

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px){
    
	
} 
  
  



</style>







<div class="main">


   
 <!----------- <div class="about-1-outer"> -----------------------1----------------------------------------- -->
  
  
  	<div class="about-1">
  
	  	<div class="about-title-right"> <div class="about-top"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/About-mobile.svg">  </div> </div>
	  		
	  		 
	  
	  	<div class="about-detail-left">
	  
		  We’re a group of passionate individuals who illustrate concepts, design lifeless brands, recreate messages thru video editing and most especially,
		  we animate ideas that sells. We explore different ways of serving our clients from the complex games & apps to the most detail-focused tech industry – any field,
		  to be exact. With the science of conversion, our illustration is more informative, the infographics 
		  we produce persuades and our 2D animation are flexible to suit any purpose.  
		  
	  	</div> 
	  
	  
	  <span class="about-title-right"> 
		
		
		<div class="about-bottom">  <img src="<?php bloginfo('url');?>/wp-content/uploads/2019/06/About.svg"> <!----- <div class="about-1-underline"> --> </div> 
		
							<!-- <div class="about-bottom"> ABOUT 
		
							<div class="about-1-underline"> </div> 
		
							</div> -->

	  </span>  
	  
		
  
	</div>
  
<!--</div>   about-1-outer -->
  
  
  
  
  
  
  
<!------ <div class="about-2-outer">  ----------------------------2---------------------------- -->
  
  	<div class="about-2"> 
  
  
	  <div class="about-title-full"> <div class="meet"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/TheTeam.svg"> </div> 
		
									 <div class="the"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/TheTeam.svg"> </div> 
		
									 <div class="team"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Team.svg"> </div>

	  
	  		<!-- <div class="about-2-underline"></div> -->
	  
		
	  </div>
	  
	  
	  
	  
	  
	  
	  <div class="about-pics">
	  
	  

		  
		  <div class="about-pic-1"> 
		  
			<img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/1-Denz.jpg">
		  
		  </div>
		  
 
		  
		  
		
		

		  
		  <div class="about-pic-2"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/2-Lex.jpg">
		  
		  </div>
		  
	
		  
		
		  

		  
		  <div class="about-pic-3"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/3-Jessa.jpg">
		  
		  </div>
		  

		  
		  
		  

		  
		  <div class="about-pic-4"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/4-Carlo.jpg">
	
		  </div>
		  

		
		
		
		  
	  

		  
		  <div class="about-pic-5"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/5-Shan.jpg">
		  
		  </div>
		  
	
		  
		  
		

		  
		  <div class="about-pic-6"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/6-Daryl.jpg">
		  
		  
		  </div>
		
	
		  
		  
		
	
		  
		  <div class="about-pic-7"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/7-Roan.jpg">
		  
		  
		  </div>
		  
	
		  
		  
		  
		  
		  <div class="about-pic-8"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/8-Nico.jpg">
	
		  </div>
		
		
		
		
		  
		  <div class="about-pic-9"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/9-Ches.jpg">
		  
		  
		  </div>
		  
		  
		  
		  
		  <div class="about-pic-10"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/10-Boaquie.jpg">
		  
		  
		  </div>
		  
		  
		  
		  
		  <div class="about-pic-11"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/11-Tin.jpg">
		  
		  
		  </div>
		  
		  
		  

		  <div class="about-pic-12"> 
		  
		  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/12-Sam.jpg">
	
		  </div>
		  
	  
	 </div>
	  
</div>
  
  
<!-- </div>    about-2-outer --> 
  
  
  
  
  
  
 <!----- <div class="about-3-outer">  --------------------3----------------------------- -->
  
    <div class="about-3"> 
	  
	  
	  
	  
	  <div class="about-title-left"> <img class="dt-began" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Began.svg">
									 <img class="mbl-began" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Began-mobile.svg">
	  
	  		<!-----<div class="about-3-underline"> </div>  --> 
	  
	  	</div> 
	  
	  
	  
	  
	  
	  	<div class="about-detail-right">
	  
		  
		 The company was founded on 2012 when promotional animated videos were emerging. 
		 Hence, Modeo Media’s name was derived from Promo Video’s last syllables. Dennis, 
		 with years of industry experience and expertise in animation, officially established 
		 the company on 2014 and began expanding its market to the rest of the world. 
		 Along with the rising demand in promotional videos, came the term “explainer videos” 
		 which Modeo Media uses to market its expertise along with design and editing services. 

	  	</div> 

	  
  	</div>
  
<!-- </div>   about-3-outer --> 
  
  
  
  
  
  
 <!---- <div class="about-4-outer">  ---------------------------- 4 ------------------------- -->  
  
    <div class="about-4"> 
  
  		
	  <div class="about-4-title-full" >  <div class="fun">  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Teamwork.svg"> </div>
		 <div class="happiness">  <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Unity-mobile.svg"> </div>
	  
	  	<!-- <div class="about-4-underline"> </div> --> 	
	  
	  </div>
	  
		
	  
	  
	  
	  
	  
	  <div class="about-vids">		  
	  
		
		
		
		<div class="about-vid-slider">
	  
		  
		  
		  
		
			
		  
	  		<div class="about-vid-1"> 
			  
			  
			  
			  
			  <div class="grid-inner-box">
				
				
				  
				  <div class="arrow-right" style="width: 0px;height: 0px;border-top: 18px solid transparent;border-bottom: 18px solid transparent;border-left: 28px solid #fff; margin: auto;position:absolute; z-index:2; opacity: .8;left: 0;right: 0;top: 0;bottom: 0;  -webkit-transition: all 0.5s ease-in-out;-moz-transition: all 0.5s ease-in-out;-o-transition: all 0.5s ease-in-out;-ms-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out; "> </div>	
				  <div class="bg-border" style="background-color: #3c8687;width: 110px;height: 75px;position: absolute;z-index: 1;margin:auto; left: 0;right: 0;top: 0;bottom: 0; opacity: .65; -webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;"> </div>
				 

				  <a href="https://vimeo.com/290821696/3ca064624e" class="venobox grid-redirection bg-hover vbox-item" data-type="vimeo" data-gall="myGallery" data-vbtype="video" style="display: none;">
					
					
					<span class="view-more">
						<span class="hover-animate fadeInDown" data-view-animation="fadeInDown">
							<label>Outdoor Activities</label><br>
						</span>
					</span>
					
					
				  </a>
				
						
				 <img class="vid-landscape" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Outdoor-min.jpg">	
			  	
				 <img class="vid-portrait" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/sOutdoor.jpg">   </div>
						
			  
		     </div>
			
		
		
		
		
		
		
		
		
		
		   <div class="about-vid-2"> 
			  
			 
			 
			  <div class="grid-inner-box">
				
				
				  
				  <div class="arrow-right" style="width: 0px;height: 0px;border-top: 18px solid transparent;border-bottom: 18px solid transparent;border-left: 28px solid #fff; margin: auto;position:absolute; z-index:2; opacity: .8;left: 0;right: 0;top: 0;bottom: 0;  -webkit-transition: all 0.5s ease-in-out;-moz-transition: all 0.5s ease-in-out;-o-transition: all 0.5s ease-in-out;-ms-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out; "> </div>	
				  <div class="bg-border" style="background-color: #3c8687;width: 110px;height: 75px;position: absolute;z-index: 1;margin:auto; left: 0;right: 0;top: 0;bottom: 0; opacity: .65; -webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;"> </div>
				 
				  
				  <a href="https://vimeo.com/290821755/c5bd7f7730" class="venobox grid-redirection bg-hover vbox-item" data-type="vimeo" data-gall="myGallery" data-vbtype="video" style="display: none;">
					
					
					<span class="view-more">
						<span class="hover-animate fadeInDown" data-view-animation="fadeInDown">
							<label>Retreat & Outreach</label><br>
						</span>
					</span>
					
					
				  </a>
				
					
				 <img class="vid-landscape" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Outreach-min.jpg"> 
			 	 <img class="vid-portrait" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/sRetreat.jpg">
				
			 </div>
			 
		
		   </div>
		  
			
		 
		  
		
		
		
		
		
		
		
		
		
		  
		  
		  <div class="about-vid-3" style="margin-top: -1px;"> 
			  
			

			
			  <div class="grid-inner-box">
				
				
				  
				  <div class="arrow-right" style="width: 0px;height: 0px;border-top: 18px solid transparent;border-bottom: 18px solid transparent;border-left: 28px solid #fff; margin: auto;position:absolute; z-index:2; opacity: .8;left: 0;right: 0;top: 0;bottom: 0;  -webkit-transition: all 0.5s ease-in-out;-moz-transition: all 0.5s ease-in-out;-o-transition: all 0.5s ease-in-out;-ms-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out; "> </div>	
				  <div class="bg-border" style="background-color: #3c8687;width: 110px;height: 75px;position: absolute;z-index: 1;margin:auto; left: 0;right: 0;top: 0;bottom: 0; opacity: .65; -webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;"> </div>
				 
				  
				  <a href="https://vimeo.com/290821642" class="venobox grid-redirection bg-hover vbox-item" data-type="vimeo" data-gall="myGallery" data-vbtype="video" style="display: none;">
					
					
					<span class="view-more">
						<span class="hover-animate fadeInDown" data-view-animation="fadeInDown">
							<label>Events & Celebration</label><br>
						</span>
					</span>
					
				  </a>
				
				
					
				   <img class="vid-landscape" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Events-min.jpg">
				   <img class="vid-portrait" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/sEvents.jpg">    </div>
			
		
		   </div>
		  
		  
		
		
		
		
		
		
		  
		  
		  
		   <div class="about-vid-4" style="margin-left: -1.5px;"> 
			   
			 
			 <div class="grid-inner-box">
				
				
				  
				  <div class="arrow-right" style="width: 0px;height: 0px;border-top: 18px solid transparent;border-bottom: 18px solid transparent;border-left: 28px solid #fff; margin: auto;position:absolute; z-index:2; opacity: .8;left: 0;right: 0;top: 0;bottom: 0;  -webkit-transition: all 0.5s ease-in-out;-moz-transition: all 0.5s ease-in-out;-o-transition: all 0.5s ease-in-out;-ms-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out; "> </div>	
				  <div class="bg-border" style="background-color: #3c8687;width: 110px;height: 75px;position: absolute;z-index: 1;margin:auto; left: 0;right: 0;top: 0;bottom: 0; opacity: .65; -webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;"> </div>
				 
				  
				  <a href="https://vimeo.com/290821538/02d30117a1" class="venobox grid-redirection bg-hover vbox-item" data-type="vimeo" data-gall="myGallery" data-vbtype="video" style="display: none;">
					
					
					<span class="view-more">
						<span class="hover-animate fadeInDown" data-view-animation="fadeInDown">
							<label>Arts & Crafts</label><br>
						</span>
					</span>
					
					
				  </a>
				
			 	 <img class="vid-landscape" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Craft-min.jpg">
			   	 <img class="vid-portrait" src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/sCraft.jpg">
			   
			   </div>
			 
		
		   </div>
		  
		   
		  
		  
		  
		</div> <!--about-vid-slider -->
		  
		  
	</div>	
	  
	  
	  
  
  	</div>
  
<!--</div>   about-4-outer -->   
  
  
  
  
  
  
  
  
  
<!---- <div class="about-5-outer">  ---------------------5---------------------->    
  
    <div class="about-5"> 
  
  
	
	  
	 <div class="about-5-content-left">  
	  
	  
	  
	  	<div class="about-title-full-left"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Mission.svg"> 
	  
	  	  <!-- <div class="about-5-underline-left"> </div> -->  
	  	
	  	</div> 
	  
	  
	  
	  
	  
	    <div class="about-detail-full-left">
	  
		  
		  To consistently focus on exceeding the expectations of our clients,
	   	  small or big, by delivering a wide range of animation-related services
	   	  and visual content produced using modern technology, up-to-date software,
	      and the skill set of carefully selected team of professional artists,
	      each with a unique profile and contribution. 
  
	   </div> 
	   
	  
	   
	  
	 </div> 
	  
	  
	  
	  
	  
	  
	  
	  
	  <div class="about-5-content-right">  
	  
	  
	  
	  	<div class="about-title-full-right"> <img src="<?php bloginfo('url');?>/wp-content/uploads/2018/10/Vision.svg"> 
	  
	  	   
	  
	  	</div> 
	  
	  
		<!-- <div class="about-5-underline-right"> </div> --> 
	  
	  
	  
	    <div class="about-detail-full-right">
	  
		  
		  Become a benchmark among visual content providers around the globe, 
		  be grown as a team of unique individuals who share the same goals by 
		  helping companies connect with their audiences through digital work 
		  of art and, impact the youth with our knowledge in animation and design.

	  	 </div> 
	   
	  
	 </div> 
	  
<!-- </div>   about-5-outer -->   	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  
  	</div>

  
  
  

  
  
  
  
  
<script>
  
  
  

  
  
  
jQuery(document).ready(function() {
  
  
var windowWidth = jQuery(window).width(); 

  
  

  
  
  
  
  

 if (windowWidth < 600) {
  
jQuery('.about-pics').bxSlider({

		  infiniteLoop: true,
		  tickerHover: false,
		  controls: false,
		  responsive:true,
  		  minSlides:1,
		  maxSlides:1,
		  adaptiveHeight:true,
		  pager: false,
		  pause: 4000
}); 
  
   
  
 
  
  
jQuery('.about-vid-slider').bxSlider({

		  infiniteLoop: true,
		  tickerHover: false,
		  controls: false,
		  responsive:true,
		  adaptiveHeight:true,
  		  slideWidth: '2000',
		  pager: false,
		  pause: 4000
  
});   
  

   
}
  
  
   
  
  
   
else if ( windowWidth < 780) {  
 
 jQuery('.about-pics').bxSlider({

		  infiniteLoop: true,
		  tickerHover: false,
		  controls: false,
   		  minSlides:2,
		  maxSlides:2,
   		  slideWidth: '1000',
		  responsive:true,
		  adaptiveHeight:true,
		  pager: false,
		  pause: 4000
});
  
  
  
  
  
  
jQuery('.about-vid-slider').bxSlider({

		  infiniteLoop: true,
		  tickerHover: false,
		  controls: false,
		  responsive:true,
		  adaptiveHeight:true,
  		  minSlides:2,
		  maxSlides:2,
  		  slideWidth: '2000',
		  pager: false,
		  pause: 4000
  
}); 


  
   
  
} 












jQuery('.grid-inner-box').hover(function () {
    //  grid_ref = jQuery(this);
    //grid_ref.find('img').addClass(jQuery(this).attr('data-thumb-animation'));
    jQuery(this).find('a').fadeIn(500, function () {
      jQuery(this).find('.hover-animate').addClass(jQuery(this).find('.hover-animate').attr('data-view-animation'));
    }); 
  
} , function () {
  //  grid_ref.find('img').removeClass(jQuery('.thumb-animate').attr('data-thumb-animation'));
    jQuery(this).find('a').fadeOut(10);
    jQuery(this).find('.hover-animate').removeClass(jQuery(this).find('.hover-animate').attr('data-view-animation'));
  }); 
  

   
   
    
   
   
    
  
 
  
  
});   
   
</script>   
   
   
   
   
   
  
   
   
   
   
   
 

   
   
</div>




<?php get_footer(); ?>

