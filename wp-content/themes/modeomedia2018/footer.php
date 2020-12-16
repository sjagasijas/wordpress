 <?php /* if(!is_front_page) : ?>


 <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
         
          <?php if (is_active_sidebar('sidebar')): ?>

            <?php dynamic_sidebar('sidebar'); ?>

          <?php endif; ?>


        </div> <!-- /.blog-sidebar -->

      <?php endif;?>


      </div><!-- /.row -->

    </div><!-- /.container --> <?php */?> 



 </div> <!---container---->





 


<footer class="blog-footer">

      <div class="footer-link-title" > <a href="<?php echo get_theme_mod('link1_url','modeomedia.com'); ?>" target="_blank"> <?php echo get_theme_mod('link1_text','Explainer Videos');?> </a> | <a href="<?php echo get_theme_mod('link2_url','modeomedia.com/illustrations'); ?>" target="_blank"><?php echo get_theme_mod('link2_text','Illustrations');?></a> | <a href="<?php echo get_theme_mod('link3_url','modeomedia.com/infographics'); ?>" target="_blank"><?php echo get_theme_mod('link3_text','Infographics');?></a> | <a href="<?php echo get_theme_mod('link4_url','modeomedia.com/branding'); ?>" target="_blank"><?php echo get_theme_mod('link4_text','Branding');?></a> | <a href="<?php echo get_theme_mod('link5_url','modeomedia.com/Games&Apps'); ?>" target="_blank"><?php echo get_theme_mod('link5_text','Games & Apps');?></a> | <a href="<?php echo get_theme_mod('link6_url','modeomedia.com/3ddesigns'); ?>" target="_blank"><?php echo get_theme_mod('link6_text','3d Designs');?> </a> </div>


      <div class="footer-second-row">ModeoMedia &copy;<?php echo Date('Y'); ?> All Rights Reserved.</div>

      <!--<p>
        <a href="#">Back to top</a>
      </p> -->   
</footer>






    <?php wp_footer();?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

    <script src="<?php bloginfo('template_url');?>/js/swiper.min.js"></script>
    
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    
   <!-- <script src="<?php bloginfo('template_url');?>/js/custom-js.js"></script>-->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.bxslider.min.js"> </script>
	
    




    
  


  </body>
</html>