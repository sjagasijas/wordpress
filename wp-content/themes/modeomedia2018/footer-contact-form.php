<?php
/*
Template Name: Contact Page CLONE
*/

//get_header();
	
?>






<style>


	
	
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


/*

.max-width {
max-width: 1300px;
margin: auto;
}



.max-width::after {
content: ' ';
display: table;
clear:both;
}

*/
	


.contact-title {
text-align: center;
font-size: 50px;
margin: auto;
margin-top: 100px;
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
    border-radius: 10px;
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





.contact-inner-content {
    width: 65%;
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
	
	
	
	
	
} /*------------------600-------------------*/	
	
		
	
	
	
	
	
	


</style>















<section class="contact-section-1">  <!----------------------------video-section-1-------------------------------->



<div class="max-width">



		<?php while (have_posts()) { the_post(); ?>



		<div class="contact-title"> <?php echo CFS()->get('bottom_contact_form_title');?> </div>


        <div class="contact-subtitle"> <?php echo CFS()->get('bottom_contact_form_content');?> </div>
	
		<div class="contact-contactform"> <?php echo do_shortcode('[contact-form-7 id="213" title="Get in touch"]');?> </div>



		<?php }  ?>


</div>




</section>	













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
	
	
	
	


		

</script>
