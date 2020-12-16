


<?php



/*

=========================
	 AJAX FUNCTIONS
=========================


*/


add_action ('wp_ajax_nopriv_theme_load_more','load_more_btn');
add_action ('wp_ajax_theme_load_more', 'load_more_btn');


function load_more_btn(){

	//load more post
	$paged = $_POST["page"]+1;
	
	$query = new WP_Query( array(
		'post_type' => 'post',
		'paged' => $paged
	) );


	  if($query->have_posts() ):


            while($query->have_posts()) : $query->the_post(); 


              get_template_part('content',get_post_format());

             endwhile; 



        

      endif;  


        wp_reset_postdata();



	die();
}