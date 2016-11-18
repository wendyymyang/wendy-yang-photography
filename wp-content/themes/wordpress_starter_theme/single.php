<?php get_header(); ?>

<div class="main">
  <div class="wrapper">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="title-details">
              <h2><?php the_title(); ?></h2>
              <span class="name"><?php the_author_meta('first_name'); ?></span>

              <?php $date = get_the_date(); ?>
              <span class="date"><?php echo $date ?></span>
          </div>

          <section class="entry-content">

          <div class="post-img">
            <?php the_post_thumbnail('large'); ?>
          </div>

          <div class="post-text">
            <?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
            <?php wp_link_pages( array(
              'before' => '<div class="page-link"> Pages:',
              'after' => '</div>'
            )); ?>    
          </div>
        
          </section><!-- .entry-content -->

          <section class="cat-tags">
            <p><?php the_tags(); ?></p>
            <p>Posted in: <?php the_category(', ') ?></p>
          </section>
              
          <?php endwhile; // end of the loop. ?>

        </article> <!-- End post -->

      </div> <!-- End content -->
      
      <?php get_sidebar(); ?>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>