<?php get_header(); ?>

<!--sample -->


    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">


          <?php if(have_posts()) :  ?>


            <?php while(have_posts()) : the_post(); ?>


          <div class="blog-post">


            <h2 class="blog-post-title"> 
  
              <?php the_title();?>
 
            </h2>


            <?php the_content();?>


          </div><!-- /.blog-post -->


        <?php endwhile;?>

          <?php else:?>


            <p> <?php __('No Page Found'); ?> </p>

        <?php endif; ?>






        </div> <!-- /.blog-main -->



        




       


   <?php get_footer(); ?>
