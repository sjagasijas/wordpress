


<?php
session_start();
/*
Template Name: Video Work Page
*/
	get_header();
?>







<?php $the_query = new WP_Query( array('cat' => 6, 'posts_per_page' => -1));  

	if($the_query->have_posts()) {
?>
	
  
  
  
		<div class="work-item-wrapper">
			<div class="grid-section clearfix">
	
<?php 			
				while($the_query->have_posts()) {
						$the_query->the_post();
?>
<?php 						$post_category = '';
								$categories = get_the_category();
								$separator = ' ';
								$output = '';
								$slug_output = '';							
							if (!empty( $categories ) ) { 
							 foreach( $categories as $category ) {
							 		if($category->category_parent) {
				        			$output .=  $category->name. $separator;
				        			$slug_output .= $category->slug. $separator;
				        			
				        				}	
    							}
    							 $post_category = trim( $output, $separator );
    							 $post_slug =  trim( $slug_output, $separator );
    				}
?>				
		
			
		<div class="grid-box <?php echo $post_slug;?>">
				<div class="grid-inner-box">
				
			<?php if(CFS()->get('_video_url')) { ?>	
				  
				  <div class="arrow-right" style="width: 0px;height: 0px;border-top: 18px solid transparent;border-bottom: 18px solid transparent;border-left: 28px solid #fff; margin: auto;position:absolute; z-index:2; opacity: .8;left: 0;right: 0;top: 0;bottom: 0;  -webkit-transition: all 0.5s ease-in-out;-moz-transition: all 0.5s ease-in-out;-o-transition: all 0.5s ease-in-out;-ms-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out; "> </div>	
				  <div class="bg-border" style="background-color: #3c8687;width: 110px;height: 75px;position: absolute;z-index: 1;margin:auto; left: 0;right: 0;top: 0;bottom: 0; opacity: .65; -webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;"> </div>
				 
				  
				  <a href="<?php echo CFS()->get('_video_url');?>" class="venobox grid-redirection bg-hover"  data-type="vimeo" data-gall="myGallery" <?php if(CFS()->get('_hover_color')) { ?> style="background-color: #3c8687;" <?php } ?>>
			<?php } else { ?>
					<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="grid-redirection" style="background-color:/*#87CEFA */ #3c8687">
			<?php } ?>		
					
					<span class="view-more">
						<span class="hover-animate" data-view-animation="fadeInDown">
							<label><?php the_title();?></label>	<br/>
							<label class="postcat"><?php echo $post_category; ?> </label>
						</span>
					</span>

					</a>
					</a>
					

				 <?php if(CFS()->get ('_video_thumbnail_image')) { ?> <img src="<?php echo CFS()->get('_video_thumbnail_image');?>" alt="" class="thumbnail-hover" data-thumb-animation="thumbnail-hover" /> <?php } else { ?>
				   <img src="<?php bloginfo('template_url');?>/images/defaultthumb.png" alt="" class="thumbnail-hover" data-thumb-animation="thumbnail-hover"> <?php } ?>
				 </div>  
			</div>		
				
											
<?php 					
				} // end of while

				?>

		</div>	<!-- end of .grid-section -->		
	</div> <!-- end of work-item-wrapper -->
				
<?php 				
	} // end of if				
?>	