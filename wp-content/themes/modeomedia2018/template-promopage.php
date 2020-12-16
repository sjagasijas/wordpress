<?php
/*
Template Name: Promo Page 
*/
?>







<html>
	
 <head>

	<title> FREE EXPLAINER VIDEO </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel='stylesheet' id='responsive-style-css'  href="<?php bloginfo('template_url'); ?>/style.css?ver=1.9.3.4" type='text/css' media='all'/>
	<link rel='stylesheet' id='responsive-media-queries-css'  href="<?php bloginfo('template_url'); ?>/core/css/style.css?ver=1.9.3.4" type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<?php wp_head();?>
	
	
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.bxslider.min.js"> </script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/countdown.min.js"> </script>
	
	 
  </head>  
  
  <body>
	
	
	
	
	
	
	
	
	
	
	<style>
	  
	  
	  
  /*----------------------------------------------------*/  
  /*-----OVERLAY COLOR BOX X BUTTON------*/


  body {
  margin: unset;	
  }
  


  .ex{
   right: 25px;
   float: right;
   top: 90px;
   position: absolute;
   font-size: 35px;
   color: #fff;
}
  
  
  
  #cboxClose{display:none !important;}
  
/*-----END OF OVERLAY COLOR BOX X BUTTON------*/   
	  
	


	.cus_content_wrapper {

		width: 1115px;
	    margin: 25px auto 10px !important;

	}







	  
	  
	  
	  
	  /*-------------------TOP------------------*/
	  /*--- HEADER---*/
	  
	  .mob_menu_header_div {display:none !important;}
	  
	  
	  
	  .header_outer {
		background-color: #fff;
		border-top: unset;
		height: 85px;
		position: relative;
		width: 100%;
	  }
	  
	  .logo{
		width:55%;
		float: left;
		margin-top: -4px;

	  }
	  
	  .logo img {
		max-width:50%;
	  }
	  
	  
	  .right_mail {
	  color: #858585;
	  float: right;
	  margin-top: 5px;
	  margin-right: 65px;
	  width: 250px;
	  font-size: 18px;
	  font-family: 'museo_sans300';
	  }


	  .right_mail img {
    margin-top: 18px;
    margin-right: 10px;
    vertical-align: middle;
    float: left;
    max-width: 30px;
}


	.right_mail p {
    padding: 0 5px;
    color: #858585;
}
	  
	  /*---------------------------------------*/
	  .body-content{
		position: relative;
	    width: 1115px;
	    margin: auto;
	    margin-top: 85px;
	    height: 70vh;
	  }


	  .body-content::after{
	  	content: ' ';
		display: table;
		clear:both;
	  }



	  .page-content{
	    height:auto;  
		width:100%;
		position:relative;
		/*background-color:#f6f6f6; 
		padding: 4% 0; */
	  }



	  .page-content::after {
		content: ' ';
		display: table;
		clear:both;

		}



		.body-content::after{

		content: ' ';
		display: table;
		clear:both;
	  	
	  	}
	  
	  
	  
	  /*-------------------MIDDLE------------------*/
	  .promo-title{
	  font-family: Open sans;
	  font-size: 39px;
	  line-height: 50px;	
	  }
	  
	  
	  .promo-sub-title{ 
	  font-family: "museo_sans700";
	  font-size: 70px;
		/* padding-top: 13px;
		line-height: 47px;  */
	  }
				
		  
	  .promo-title-wrapper{
		position:relative;
		color:#2c2c2c;
	  }


	  .promo-title-wrapper strike{

	  color:#494949;

	  }


	  .promo-content-left{
		position:relative;
		width:61%;
		float:left;
		color:#383838;
		margin-top: -25px;
   /*	margin-top:50px;  */
	  }
	  
	  .promo-content-wrapper{
		position: relative;
		width: 100%;
		color:#383838;
		margin-top: 40px;
	  }


	  .promo-content-wrapper::after{
	  content: ' ';
	  display: table;
	  clear:both;
	  }


	  .promo-content{
		float: none;
		color: #353535;
	    font-family: Open sans;
	    font-size: 20px;
	    line-height: 35px;
	    font-weight: 400;
		padding-bottom: 40px;
	  }  



	  .promo-content::after{

	  	content: ' ';
		display: table;
		clear:both;

	  }


	  
	  .promo-content-right{
		position:relative;
		width:35%;
		float:right;
		color:#383838;
		margin-top: -25px;
		
	  }



	  .promo-cf-desktop-wrapper {

	    background: #f4f8f9;
	    border-radius: 10px;
	    width: 360px;
	    margin: auto;
	    padding-top: 55px;
	  }
		
		
		
	
		
		
		


	  .promo-slot {

	  	margin-top: -5px;
	    text-align: center;
	    padding-bottom: 55px;
	    font-family: Open sans;
	    font-size: 22px;

	  }


	  
	  .top-detail{
		font-family: 'museo_sans700';
		font-size: 30px;
		letter-spacing: 2px;
		margin: auto;
		color: #383838;
		text-align: center;
		display: inherit;
		margin-top: 50px;
		margin-bottom: 8px;
	  }
	  
	  .promo-cf {
		border: 1px solid #e5e5e5;
		padding: 5%;
		width: 320px;
		margin: 10px auto;
		background: #3c8585;
		color: #fff;
		height: 480px;
	  }
	  
	  
	 
	  
	  ul li {
		background: url(https://modeomedia.com/wp-content/uploads/2017/06/tick.png);
	    list-style: none;
	    background-repeat: no-repeat;
	    margin-left: 3%;
	    font-size: 20px;
	    padding-left: 28px;
	    padding-bottom: 5px;
	    background-position: 0px 4px;
	    width: 40%;
	    float: left;
	    font-family: Open sans;
    }
	  
	  
	  
	  ul, ol {
    margin: 0 1.5em 1.5em 0;
	/* padding-left: 5px; */
	}
	  
	  
	  
	  .list-bottom li {
		
	   background: url('https://modeomedia.com/wp-content/uploads/2017/06/bullet.png');
	   list-style: none;
	   background-repeat: no-repeat;
	   list-style-position: outside;	
	   padding-left: 45px;
			
	  }

















	  /*-----------------NEW CONTACT FORM --------------------*/




	.contact-inner-content {
	width: 80%;
    margin: 40px auto;
    padding: 20px;
    padding-right: 20px;
    padding-bottom: 10px;
    position: relative;
	}



	.cf-title{

	width: 290px;
    text-align: center;
    font-size: 28px;
    font-family: open sans;
    margin: auto;

	}




	.contact-contactform{

	margin-top: 30px;
    padding: 0 35px;

	}



	.frm-submit {
    width: 100%;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
	}


/*

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

*/



	input[type=submit] {
    height: 105px;
    width: 100%;
    background-color: #ffb901;
    color: #422005;
    font-size: 33px;
    font-weight: bold;
    border-bottom: 7px solid #ff8500;
    border-radius: 10px;
	cursor:pointer;
}



	input, textarea {
    width: 100%;
    font-size: 20px;
    border-radius: 10px;
    border: 1px solid #e7e9e8;
    margin-bottom: 20px !important;
}




	  
	  
	  /*-------contact from------*/
	  
	  #countdown{
		text-align: center;
		margin-top: 20px;
	    margin: auto;
	    right: 0;
	    left: 0;
	    width: 380px;
	    color: #3c8687;
	  }
	  
	  #countdown span {
		font-size: 24px;
		font-family: Open sans;
		font-weight: bold;
		/* border: 1px solid rgba(0,0,0,.5); */
		/* width: 70px; */
		margin-right: 5px;
		float: left;
		/* padding: 26px 0; */
		position: relative;
	  } 
	  
	  
	  #countdown span:nth-child(1){border-right: 0px;}
	  
	  #countdown span:nth-child(2){border-right: 0px;}
	  
	  #countdown span:nth-child(3){border-right: 0px;}
	  
	  
	  #cf-title{
	  
	  text-align: center;
	  color: #fff;
	  font-family: museo_sans500;
	  font-size: 36px;
	  font-weight: normal;
	  line-height: 48px;		
			
	  }		
			
	  
	  .bottom-details span {
		margin:auto;
	  }
	  
	  
	  
	  
	  
	  /*
	  .wpcf7-form-control.wpcf7-submit {
	   background: -webkit-repeating-linear-gradient(#ffe252, #ffe252 57%, #f5d94f 43%, #f5d94f 100%);
	   background: -o-repeating-linear-gradient(#ffe252, #ffe252 57%, #f5d94f 43%, #f5d94f 100%);
	   background: -moz-repeating-linear-gradient(#ffe252, #ffe252 57%, #f5d94f 43%, #f5d94f 100%);
	   box-shadow: 0px 7px 0px #0000001a;
	   border: medium none;
	   border-radius: 4px;
	   color: #c4424e;
	   font-family: "proxima_novabold";
	   font-size: 36px;
	   margin: 20px auto;
	   padding: 20px 0;
	   width: 100%;
	  }
	  
	  */
	  
	  
	  
	  div.wpcf7 .ajax-loader {
		/*  background-image: url('');
	  width: 24px;
	  height: 24px;
		margin-left: 10px; */
}
	  
	  
	  input[type="text"]{ text-transform: none !important;}



	  select, input[type="text"], input[type="password"], input[type="email"], textarea {
    background-color: #fff;
    box-sizing: border-box;
    color: #2d2d2d;
    font-size: 20px;
    margin: 0;
    padding: 15px 20px;
    vertical-align: middle;
    width: 100%;
    font-weight: 500;
    font-family: Open sans;
    outline: none;
}


form div {
    margin-bottom: .8em;
}
	  
	  
	  /*------------------BOTTOM-------------------*/  
	  
	  .video-types{
	  
	  display:none;
	  height: 400px;
	 /*  margin-bottom: -40%; */
	  margin-top: 290px ;  
	  }
	  
	  /*.video-types img:last-child {
		width: 45%;
		float: left;
		padding: 2px;
	} */
	  
	  
	  
	  
	  
	  .promo-timer {
	  position: relative;
	  width: 360px;
	  margin: auto;
	  height: 293px;
	  padding-top: 10%;
	  background: rgba(0,0,0,.02);
	  margin-top: 55px;
	  }
	  
	  
	  
	  
	
	
	  /*----------------VIDEO TYPES--------------------*/
	  
	  
	  #cartoon, #motion-graphics, #whiteboard {
		width: 49%;
		/*height: 23.3%; */
		float: left;
		/* padding: 2px; */
		position: relative;
		
	  }
	  
	  
	  .watch-more {
	  font-size: 39px;
	  width: 49%;
	  height: 167px;
	  float: left;
	  /* margin: 3px; */
	  position: relative;
	  background: #3c8687;	
	  text-align: center;
	  transition: all 1s ease-out;
	  }	
	  
	  
	  
	  .watch-more p {
	  color: #fff;
	  text-align: center;	
	  margin-top: 20%;
	  font-family: 'proxima_novalight';
	  }	
	  
	  
	  
	  #spn-one {
	  font-family: "museo_sans500";
	  color: #fff;
	  padding-top: 55px;
	  cursor: pointer;
	  }
	  
	  
	  #spn-number {
	  font-family: "museo_sans700";
	  color: #fff;
	  padding-left:1%;
	  cursor: pointer;
	  }
	  
	  #spn-plus{
	  font-family: "museo_sans100";
	  color: #fff;
	  cursor: pointer;
	  }
	  
	  
	  #spn-two{
	  text-align: center;
	  font-family: "museo_sans100";
	  font-size: 18px;
	  color: #fff;
	  width: 100%;
	  margin-left: -4%;
	  letter-spacing: 1px;
	  cursor: pointer;
	  }
	  
	  
	  
	  .label-wrapper{
	  -webkit-transition: all 1s ease-out;
	  -moz-transition: all 1s ease-out;
	  -o-transition: all 1s ease-out;
	  transition: all 1s ease-out;
	  height: 160px;
	  }
	  
		
		
		
	  .label-wrapper:hover {
	  transform: scale(1.1,1.1);
	  cursor:pointer;
	  }
	  
	  .watch-more:hover{
	  background-color: #2a5d5e;
	  cursor:pointer;
	  -webkit-transition: all 1s ease-out;
	  -moz-transition: all 1s ease-out;
	  -o-transition: all 1s ease-out;
	  transition: all 1s ease-out;
	  }
	  
	  
	  .video-title {
	  position: absolute;
	  z-index: 5;
	  text-align: center;
	  width: 100%;
	  margin-top: 70px;
	  font-size: 25px;
	  color: #fff;
	  font-family: 'museo_sans300';
	  display:none;
	  }
		  
	
	  
	  a:hover .video-title {
	  color: #fff;
	  animation: fadein 2s;
	  -moz-animation: fadein 2s; /* Firefox */
	  -webkit-animation: fadein 2s; /* Safari and Chrome */
	  -o-animation: fadein 2s; 
      display:inline;
	  } 
		
	  
	  
	  @keyframes fadein {
	  from {
		  opacity:0;
	  }
	  to {
		  opacity:1;
	  }
	  }
	  
	  @-moz-keyframes fadein { /* Firefox */
		  from {
			  opacity:0;
		  }
		  to {
			  opacity:1;
		  }
	  }
	  
	  @-webkit-keyframes fadein { /* Safari and Chrome */
		  from {
			  opacity:0;
		  }
		  to {
			  opacity:1;
		  }
	  }
	  
	  @-o-keyframes fadein { /* Opera */
		  from {
			  opacity:0;
		  }
		  to {
			  opacity: 1;
		  }
	  }
	  
		
	
	  /*----------------------------------*/
		  
		  
	  .blog-footer{ display:none; }  
	    
	  
	  
	  .footer-bottom {
		background-color: #2d2d2d;
		position: relative;
		bottom: 0px;
		width: 100%;
		font-family:Open sans;
		font-size: 14px;
		color: #fff;
		padding: 25px 0;
	  /* margin-top: 200px; */
		/* display:none; */
	  } 


	  .footer-bottom .text-center{
	  	width: 310px;
    	margin: auto;

	  }
	  
	  
	  #footer-section {
    display: none;
	}


	  .text-center {

	  text-align: center;

	  }


	  .text-center a {

	  font-weight: 400;
      text-decoration: none;

	  }
	  
	  
	  a:hover .bg-border{

	  height:100% !important;	
	  width: 100% !important;	
	  opacity: 0.9 !important;


	  }
	  
	  a:hover .arrow-right{
	  
	  border-top: 0px solid transparent !important;
	  border-bottom: 0px solid transparent !important;
	  border-left: 0px solid #fff !important;
	  }
	  
	  	  /*----------Client testimonial----------*/   
	  
	  .promo-client-msg {
		position: relative;
		width: 93%;
		margin: auto;
		padding: 20px 30px;
		background: #f9f9f9;
		height: auto;
		min-height: 155px;
		border-radius: 15px;
		/* max-width: 765px; */
		/* height: 255px; */
		height: auto;
		overflow: hidden;
	  } 	
  
  
	  .promo-client-say-left {
		width: 68%; 
	 /* width: 100%; */
	/*	font-size: 15px;  */
		color: #383838;
		line-height: 26px;
		text-align: right;
		padding-left: 6%;
	  }
  
  	  
  
  
	  .promo-client-name-left {
		width: 68%; 
		/*width: 100%; */
		line-height: 26px;
		color: #383838;
		font-weight: 300;
		padding-top: 11px;
		text-align: right;
		padding-left: 6%;
	  }
	  
	  
	  
	  .promo-client-site-left {
		 width: 68%; 
	/*	width:100%; */
	  line-height: 26px;
	  color: #383838;
	  text-align: right;
	  padding-left: 6%;
	  }
	  
	  
	  
	  .promo-client-name-left span {
		color: #3c8687;
		font-weight: 600;
	  }
		  
	  
	  .promo-testimonial .img-left img {
		border-radius: 100px;
		width: 200px;
    	height: 200px;
		float: right;
		margin: 5px auto;
		margin-right: 40px;
		/* display:none; */
	  }
	  
			  
			  
	   /*----------RIGHT-----------*/		  
			  
			  
	   .promo-client-say-right {
	/*	font-size: 15px;   */
		width: 68%; 
	/*	width: 100%; */
		color: #383838;
		float: none;
		padding-left: 28%;  
		line-height: 26px;
	  }
  
  	  
  
  
	  .promo-client-name-right {
		width: 56%; 
		/*width: 100%; */
		line-height: 26px;
		color: #383838;
		font-weight: 300;
		padding-top: 11px;
		padding-left: 28%; 
	  }
	  
	  
	   .promo-client-site-right{
		width: 56%; 
		/* width: 100%; */
		line-height: 26px;
		color: #383838;
		font-weight: 300;
	    padding-left: 28%;  
	  }
	  
	  
	  .promo-client-name-right span {
		color: #3c8687;
		font-weight: 600;
	  }
		  
	  .promo-testimonial .img-right img {
		border-radius: 100px;
		width: 200px;
    	height: 200px;
		float: left;
		margin: 5px auto;
		margin-left: 40px;
	/* display:none; */
	  }
	  
   
  	   /*----------------------*/
			  
			  
	  
	  
	  
	  .bx-prev {
		color: #383838;
		left: 2%;
		position: absolute;
		top: 75%;
		opacity: 0.6;
		z-index: 50;
	  }
	  .promo-prev-arrow {
		opacity: .3;
		border-left: 3px solid;
		border-bottom: 3px solid;
		width: 18px;
		height: 18px;
		transform: rotate(45deg);
	  }
	  
	  
	  .bx-next{
		color: #383838;
		right: 2%;
		position: absolute;
		top: 75%;
		opacity: 0.6;
		z-index: 50;
	  }
	  
	  .promo-next-arrow {
		opacity: .3;
		border-right: 3px solid;
		border-bottom: 3px solid;
		width: 18px;
		height: 18px;
		transform: rotate(-45deg);
	  }
	  
	
  
  
  
  
		.morecontent span {
		  display: none;
	  }
	  
	  
		.morelink:hover,.morelink:active, .morelink:focus,.morelink {
		  display: inline;
		  color: #3c8687;
		  font-weight:bold;
		  text-decoration: underline;
	  }
	  
	 	
		
		.bx-viewport {
			
		min-height: 300px !important;  
		/* min-height: 310px !important;
		max-height: 310px !important; */
	  }





	   .promo-closing {
		color: #2d2d2d;
		text-align: center;
		margin: auto;
		margin-left: 12%;
		width: 410px;
		height: auto;
		font-weight: 500;
		font-family: Open sans;
		font-size: 18px;
		line-height: 30px;
		}
	  
	  

	  .promo-closing::after {
		content: ' ';
		display: table;
		clear:both;

	  }
	  
	  
	  
	  
	  
	  
	  .up{ top: 0;
		position: absolute;
		margin: auto;
		left: 0;
		right: 0;
		width: 30px;} 
	  
	  
	  
	  .down{bottom: -20px;
	  position: absolute;
	  margin: auto;
	  left: 0;
	  right: 0;
	  width: 30px;}
	  
	  
	  
	  
	  
	  .frm-submit{position:relative;}
	  
	  
	  
	  
	  
	  
	  
	  .frm-submit-shine {
/*   positioning */
		position: absolute;
		opacity: 0;
		top: 0;
		bottom:0;
		left: 0;
		margin:auto;
		z-index:55;
  
/*   gradient   */
		background: -moz-linear-gradient(left,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 1%, rgba(255,255,255,1) 30%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 70%, rgba(255,255,255,1) 71%, rgba(255,255,255,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,1)), color-stop(1%,rgba(255,255,255,1)), color-stop(30%,rgba(255,255,255,1)), color-stop(50%,rgba(255,255,255,1)), color-stop(70%,rgba(255,255,255,1)), color-stop(71%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 1%,rgba(255,255,255,1) 30%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 70%,rgba(255,255,255,1) 71%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 1%,rgba(255,255,255,1) 30%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 70%,rgba(255,255,255,1) 71%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 1%,rgba(255,255,255,1) 30%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 70%,rgba(255,255,255,1) 71%,rgba(255,255,255,1) 100%); /* IE10+ */
		background: linear-gradient(to right,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 1%,rgba(255,255,255,1) 30%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 70%,rgba(255,255,255,1) 71%,rgba(255,255,255,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */
    
/*  forming the shine element
    play around with the width, skew and gradient to get different effects
  */
		width: 15%;
		height: 80px;
     transform: skew(-10deg,0deg);
	-webkit-transform: skew(-10deg,0deg);
     -moz-transform: skew(-10deg,0deg);
     -ms-transform: skew(-10deg,0deg);
     -o-transform: skew(-10deg,0deg);
	  
  
/*  animating it  */
     animation: move 3s;
		animation-iteration-count: infinite;
		animation-delay: 8s;
		-webkit-animation: move 3s;
		-webkit-animation-iteration-count: infinite;
		-webkit-animation-delay: 8s;
		-moz-transform: skew(-10deg,0deg);
		-moz-animation: move 3s;
		-moz-animation-iteration-count: infinite;
		-moz-animation-delay: 8s;
		-ms-transform: skew(-10deg,0deg);
		-ms-animation: move 3s;
		-ms-animation-iteration-count: infinite;
		-ms-animation-delay: 8s;
		-o-transform: skew(-10deg,0deg);
		-o-animation: move 3s;
		-o-animation-iteration-count: infinite;
		-o-animation-delay: 8s;
		  
		
	}

/*  */
@keyframes move {
	0%  { left: 0; opacity: 0; }
	5% {opacity: 0.3}
	48% {opacity: 0.6}
	80% {opacity: 0.4}
	100% { left: 80%}
		
}

@-webkit-keyframes move {
	0%  { left: 0; opacity: 0; }
	5% {opacity: 0.3}
	48% {opacity: 0.6}
	80% {opacity: 0.4}
	100% { left: 80%}
}

@-moz-keyframes move {
	0%  { left: 0; opacity: 0; }
	5% {opacity: 0.3}
	48% {opacity: 0.6}
	80% {opacity: 0.4}
	100% { left: 80%}
}

@-ms-keyframes move {
	0%  { left: 0; opacity: 0; }
	5% {opacity: 0.3}
	48% {opacity: 0.6}
	80% {opacity: 0.4}
	100% { left: 80%}
}

@-o-keyframes move {
	0%  { left: 0; opacity: 0; }
	5% {opacity: 0.3}
	48% {opacity: 0.6}
	80% {opacity: 0.4}
	100% { left: 80%}
}
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
/*----------------------FANCYBOX----------------------------*/
  
  	#cboxLoadedContent p{
	display:none;
	
  }
  
  
  	#cboxLoadedContent {
	max-width:500px !important;	
	min-width:500px !important;	
  }
  
  
  
  
  	#cboxContent{
  	max-width:500px !important;	
	min-width:500px !important;	
  }
  
  
  
  #cboxWrapper {
  max-width: 500px !important;
  }
  
  
  #colorbox {
  max-width: 500px !important;
  margin: auto !important;
  right: 0 !important;
  left: 0 !important;
  }
  
  
	
  
 	#cboxLoadedContent p:first-of-type {
	display:block;
	font-size: 19px !important;
	font-family: 'museo_sans300' !important;
	line-height: 25px !important; 
	text-align: center;
	 /* max-width: 400px !important; */
}
    
  
  
 
  
div.wpcf7-validation-errors {
    border: medium none;
    text-align: center;
    font-size: 15px;
    font-family: 'museo_sans300';
    margin-top: 10px;
    padding-top: 0;
    color: red;
}  	  
	  
	  
div.wpcf7-response-output {
    margin: 48px 0;
	text-align: center;
	font-size: 15px;
}	  
	  
	  
	
	  
div.wpcf7 img.ajax-loader {
    margin-top: 190px !important;
	color: #383838;
    position: absolute;
	margin: auto;
	top: -35px;
	left: 0;
	right: 0;
	font-size: 21px;
	font-family: 'museo_sans300';
}	  
	  
	  
	  
	  
	  
	  
	/*------------------------------------------Media Queries----------------------------------------*/
 



 

  

  @media screen and (min-width: 1000px) { 	
  
  .bx-next{
	right: 2%;
}
	  
  .bx-prev{
	left: 2%;

}
 
 
 } /* END OF 1000*/  
  
  
  
  
  
  @media screen and (min-width: 1100px) { 	
  
  .bx-next{
	right: 2%;
}
	  
  .bx-prev{
	left: 2%;

}
 
 
 } /* END OF 1100*/ 
  
  
  
  
  @media screen and (min-width: 1200px) { 	
  
  .bx-next{
	right: -3%;
}
	  
  .bx-prev{
	left: -3%;

}
 
 
 } /* END OF 1200*/   
  
  
  
  
  
 @media screen and (min-width: 1300px) { 	
  
  .bx-next{
	right: -3%;
}
	  
  .bx-prev{
	left: -3%;

}
 
 
 } /* END OF 1300*/  
  
  
  
  
  
     @media screen and (min-width: 1400px) { 	
  
  .bx-next{
	right: -4%;
}
	  
  .bx-prev{
	left: -4%;

}
 
 
 } /* END OF 1400*/ 

  
 
  
  
   @media screen and (min-width: 1500px) { 	
  
  .bx-next{
	right: -6%;
}
	  
  .bx-prev{
	left: -6%;

}
 
 
 } /* END OF 1500*/   
  



   @media screen and (min-width: 1600px) { 	
  
  .bx-next{
	right: -5%;
}
	  
  .bx-prev{
	left: -5%;

}
 
 
 } /* END OF 1600*/ 

  
 
  
   @media screen and (min-width: 1700px) { 	
  
  .bx-next{
	right: -4%;
}
	  
  .bx-prev{
	left: -4%;

}
 
 
 }/* END OF 1700*/ 
  


   @media screen and (min-width: 1800px) { 	
  
  .bx-next{
	right: -3%;
}
	  
  .bx-prev{
	left: -3%;

}
 
 
 }/* END OF 1800*/
  
  
  
  
  
 @media screen and (min-width: 1900px) { 	
  
  .bx-next{
	right: -2%;
		  
}
	  
  .bx-prev{
	left: -2%;

}
 
 
} /* END OF 1900*/ 
 
 
  
  
  
  
  /*--------------MAX----------------*/ 





	  
 @media screen and (max-width: 1750px) { 	  
	  
	  
select, input[type="text"], input[type="password"], input[type="email"], textarea {
    padding: 15px 10px;	  
}	  
	  
}	/* END OF 1750*/ 



		
		
		
		
		
 @media screen and (max-width: 1350px) { 
	 
	.body-content {
    position: relative;
    width: 1115px;
    margin: auto;
    padding: 8% 0;
    height: 100%;
}	
		
		
}	/* END OF 1350*/ 		
		
		
		
		
		
		


  @media screen and (max-width: 1200px) { 	


  	ul li {

  	width: 50%;

  	}




  	.footer-bottom {

  	margin-top: 100px;

  	}


} /*-----1200------*/









	  
	  
	  
 @media screen and (max-width: 1150px) { 	  

.logo img {
    max-width: 80%;
    width: 300px;
}

		
		
	  
.body-content {
    width: 90%;
}	


.promo-client-msg {
    width: 93%;			
	left: 0;
	right: 0;
}	
				
				
.promo-client-testi{	
				  
max-width: 100% !important;					  				  
					  
}				

	  
	  
.watch-more {
    height: 150px;	  
}

	 
	 
	 
.promo-cf-desktop-wrapper {
    width: 320px;	 
}	 
	 
	 
	 
		  
					
} /* END OF 1150*/ 
		
		
		
		
		
		
		
		
		

		
		
		
		
@media screen and (max-width: 1130px) { 			
		
	
	.header_outer {
    width: 90%;
	margin:auto;
	}	
	
	.right_mail{
	float: left;
	margin:auto;
	margin-right:0;
	}
	
	
	.logo{
	margin:auto;		
	}
	

	
	
		
		
} /* END OF 1130*/ 		
		
		
		
		
	  
	  

		  

		
		
		
  @media screen and (max-width: 1000px) { 		
		
		  
.body-content {
    width: 930px;
}	

		  
		
} /* END OF 1000*/ 	  		
		
		
		




 @media screen and (max-width: 950px) { 

		  
.body-content {
    width: 100%;
    height: auto;
}
		  

.header-inner {
    width: 94%;
}			  
			  
			  
			  
		  

.promo-content-left {
    width: 600px;
    float: none;
	margin: auto;			
}
		  
		  

.promo-content-right {
    width: 100%;
    float: none;				
	margin-top: 20px;	
}	



.footer-bottom{

	margin-top: 100px;

}
				  

	 
 .promo-closing{
		 
  margin-left: auto;		 
  margin-top: 5%;		 
 }	 
	 
	 
	  
		  

} /* END OF 950*/ 






		
		
		
  
  @media screen and (max-width: 800px) { 	
  
.promo-testimonial .img-right img, .promo-testimonial .img-left img{
    border-radius: 100px;
    width: 200px;
    height: 200px;
    margin: 0 auto;
    left: 0;
    right: 0;
    display: block;
	float:none;
}
		
		


.promo-client-say-right, .promo-client-say-left {
    width: 90%;
    padding-left: 0%;
    margin: auto;
}
			
			
			
.promo-client-name-right, .promo-client-name-left , .promo-client-site-left ,.promo-client-site-right {
  
    
	width: 90%;
    padding-left: 0%;
    margin: auto;
}			
			

	
.header-inner{
width: 350px;

}



.logo {
    width: 350px;
}



.right_mail{
margin-top: -10px;
margin-left: 25px;
}






  
  
  
 
 } /* END OF 800*/ 
  


  
  
  
  
  
 @media screen and (max-width: 750px) {   


.client-testimonial-text {
width: 70%;
}
			
			
.promo-testimonial-container{ margin-top: 30%;}				
			
	

.right_mail img {
    max-width: 23px;
}



} /* END OF 750*/  


	  
	  
	  
  
  
  
 @media screen and (max-width: 700px) { 
 
	
.client-testimonial-form {
    width: 90%;
}	

			
		  
.bx-viewport {
    min-height: 735px !important;
}
			
			
			
 .bx-next{
	top: 74%;
}
	  
  .bx-prev{
	top: 74%;

}			
			
	
  
} /* END OF 700*/  

		  

	  
	  
	  
	  
 @media screen and (max-width: 650px) { 		  
	  
	.promo-content-left{		
    width: 90%;
	}  


	.promo-title-wrapper{

		text-align: center;

	}
		  
} /* END OF 650*/ 		  
	  
	  
	  
	  
	  
	  
	  
	  
	  
		  
		  
		  


 @media screen and (max-width: 600px) { 	




		  
		
		
.video-types {
 height: 1020px;
}

		
		  
} /* END OF 600*/ 		  
		  
		  


	  
	  
	  
	  
	  

 @media screen and (max-width: 550px) { 	  
	





	  
		  

		
		
.video-types {
    height: 900px;
}		
		
		
		
		
		
.watch-more {
    height: 220px;
}		
		
	

	  
	  
ul li {
    width: 100%;
    float: left;
}

		
.promo-content-left {
    width: 90%;		
}
			



.promo-content-right {
    width: 100%;
    float: none;
    display: table;
}		

			
			
#cartoon, #motion-graphics, #whiteboard {
    width: 100%;
    float: none;
    margin: 0 auto;
    right: 0;
    left: 0;
    display: flex;
    display: -webkit-box;
}

		

.watch-more {
    width: 100%;
    float: none;
    margin: auto;
    height: 250px;
}
		

#spn-one {
    padding-top: 90px;
}
		
		
		
.video-title {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 50%;
    height: 30%;
    margin: auto;		
}		
		
		
		

.video-types {
 height: 1050px;
 margin-top: 50%;
}

	  
	  


.bx-prev {
    top: 79%;
}

	  
.bx-next {
    top: 79%;
}	  
	
	  
.promo-cf {
  /*  margin: 100px auto;	   */
}	  
	  
	  	  
	  
	  
	  
	  
			
			
	  
}	/* END OF 550*/   

	
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

 @media screen and (max-width: 500px) { 		  
.bx-viewport {
    min-height: 755px !important;
}
		
		
		
		
#cboxLoadedContent {
	max-width:360px !important;	
	min-width:360px !important;	
  }
  
  
  
  
  	#cboxContent{
  	max-width:360px !important;	
	min-width:360px !important;	
  }
  
  
  
  #cboxWrapper {
  max-width: 360px !important;
  }
  
  
  #colorbox {
  max-width: 360px !important;
  margin: auto !important;
  right: 0 !important;
  left: 0 !important;
  }		
		
		
		
		  
} /* END OF 500*/ 		  
		  
	  
	  
	  

			  
			  
@media screen and (max-width: 480px) { 				  

			
.video-types {
    height: 850px;
}			
			
			
			
.watch-more {
    height: 200px;
}			  
			  
			  
} /* END OF 480*/ 				  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
 
	  
	  
	</style>
	
	
	
	
	
	
	
	
	<div class="header_outer">
	  <div class="header-inner content-wrapper cus_content_wrapper clearfix">
		<div class="logo">
		  <a href="#" ><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/11/MM-LOGO2018.svg" alt=""></a>
		</div>
		<div class="right_mail"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/11/msg_icon.png" alt=""><p>info@modeomedia.com</p></div>
	  </div>
	</div>
	
	
	
	<div class="page-content">
	  
	  
	  
	  <div class="body-content">
		
		<?php  while(have_posts()) {
	  the_post();
		?>
		
		
		<div class="promo-content-left">
		  
		  
		  <!--PAGE TITLE -->
		  <div class="promo-title-wrapper" > 

			<div class="promo-title">Enjoy high-tier 2D explainer videos at its lowest price!
			</div>

			<!--<div class="promo-sub-title"><?php echo CFS()->get('_page_sub_title'); 
			  ?></div> -->
		  </div>
		  
		  
		  
		  
		  <div class="promo-content-wrapper">
			<div class="promo-content"> <?php the_content();?>
			  </div>
		  </div>
		  
			
			
			

		  
		  
		</div> <!---------------promo-content-left---------------->
		
		
		
		
		


















		
		
	<div class="promo-content-right">
		  

		<div class="promo-cf-desktop-wrapper">

		  <div class="cf-title">High-tier Explainer Video for only <strong>$950</strong></div>
		  


 
		  <div class="contact-contactform"> <?php echo do_shortcode('[contact-form-7 id="448" title="Promo CF"]');?> </div>
		  
		  
		  <!--<div class="promo-slot"> Only <strong>7</strong> Slots Left. </div> -->
		  
		  

		</div> 

<!--	<div class="promo-timer">
		<span class="top-detail"> PROMO ENDS IN</span>
		  
		  
		
	  
	</div> End of promo-timer -->	  
		  
		  
</div> <!-- END promo-content-right -->		  
		  
		  
		  
		  
		  
		  
		  
		    <div class="promo-closing">
				
			  *This Promo runs until December 31, 2018 only. <div id="countdown"> <span id="day">00 days : </span><span id="hour">00 hrs : </span> <span id="mins">00 min : </span> <span id="secs">00 sec : </span> </div>
				  
		</div>  <!--  END OF promo-closing --> 


		  
		  
		  
		  
		  
		  
	


		
		<?php } ?> <!-- END OF POST LOOP-->
		

		
	
		
	  </div><!-- END OF body-content -->
		
		




	  
	  
	  
	  
	<div class="footer-bottom">		
	  
	  <div class="text-center">  
		<a title="ModeoMedia" href="<?php bloginfo('url'); ?>" target="_blank" style="color:#fff;">  ModeoMedia </a> 	&copy; 2012-2019 All Rights Reserved <br></br> info@modeomedia.com </div>		
	 
	</div> <!-- end of .footer-bottom -->	
	
	
	
	
	
	
	
	
<script>



	  
	 jQuery(window).load(function(){
	   
	 jQuery("img.ajax-loader").attr('src', 'https://modeomedia.com/wp-content/uploads/2017/06/send.png');	
	  jQuery("img.ajax-loader").attr('style', ' width: 37%; visibility: hidden;');
	   /* jQuery("img.ajax-loader").attr('onerror', 'this.style.display="none"');	*/
	  



	  
	  
	  


     jQuery('#countdown').countdown({
			date: '12/20/2019 21:38:59',
			offset: +8,
			day: 'Day',
			days: 'Days'
		}, function () {
		  /*document.getElementById("countdown").innerHTML = "EXPIRED"; */
		    document.getElementById("day").innerHTML = "00d";
		    document.getElementById("hour").innerHTML = "00h";
		    document.getElementById("mins").innerHTML = "00m";
		    document.getElementById("secs").innerHTML = "00s";
		    document.getElementById("remaining").innerHTML = "0";

		    document.getElementById("promo-cf").innerHTML = "<span>The PROMO has ended.</span>";
		  	jQuery('#promo-cf span').attr('style','font-size: 29px;line-height: 33px;text-align: center;margin-top: 205px;display: block;');
		  
		  
		  
		  	jQuery('#day').attr('style','color:red');
		    jQuery('#hour').attr('style','color:red');
		    jQuery('#mins').attr('style','color:red');
		    jQuery('#secs').attr('style','color:red');
		});
      

	 });  


       

	  
	   
	  
	  // Set the date we're counting down to
	  var countDownDate = new Date("Dec 31, 2019 23:59:00").getTime();
	  
	  // Update the count down every 1 second
	  var x = setInterval(function() {
		
		// Get todays date and time
		var now = new Date().getTime();
		
		// Find the distance between now an the count down date
		var distance = countDownDate - now;
		
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
		// Output the result in an element with id="demo"
		document.getElementById("day").innerHTML = days + " days :"; 
		document.getElementById("hour").innerHTML =  hours + " hrs :";
		document.getElementById("mins").innerHTML =  minutes + " min :";
		document.getElementById("secs").innerHTML = seconds + " sec ";
		
		// If the count down is over, write some text 
		if (distance < 0) {
		  clearInterval(x);
		  document.getElementById("demo").innerHTML = "EXPIRED";
		}
	  }, 1000);
	  
	  
	 
	  
	  
	

	  
</script>


	
	

	
	<?php get_footer(); ?>
	
  </body>
</html>



