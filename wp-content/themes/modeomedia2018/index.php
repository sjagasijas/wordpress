<?php get_header(); ?>




    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="theme-post-container col-sm-8 blog-main ">


          <?php if(have_posts()) :  ?>


            <?php while(have_posts()) : the_post(); ?>


              <?php get_template_part('content',get_post_format());?>

            <?php endwhile; ?>



          <?php else:?>


            <p> <?php __('No posts Found');?> </p>

        <?php endif; 


        //Append Here

        ?>


        </div><!-- /.blog-main -->




        <div class="container text-center">
          <a class="btn btn-lg btn-default load-more-btn" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>"> <span class="fa-load"> </span> Load More</a>

        </div>





      </div> <!-- /.row -->

    </div> <!-- /.container -->


   <?php get_footer(); ?>
