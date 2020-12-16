
<?php get_header(); ?>




    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">


          <?php if(have_posts()) :  ?>


          <?php while(have_posts()) : the_post(); ?>


          <?php get_template_part('content');?>


        <?php endwhile; ?>

          <?php else : ?>


            <p> <?php __('No posts Found');?> </p>

        <?php endif; ?>


        </div><!-- /.blog-main -->




   <?php get_footer(); ?>
