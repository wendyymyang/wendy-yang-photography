<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="main">
  <div class="wrapper index">

    <div class="content index">
		<?php //Start the loop ?>
		<?php if(have_posts()) while(have_posts()) : the_post(); ?>

			<div class="post-content">
				<div class="title-content">
					<h2><?php the_title(); ?></h2>

					<div class="title-details">
						<span class="name"><?php the_author_meta('first_name') ?></span>

						<?php $date = get_the_date(); ?>
						<span class="date"><?php echo $date ?></span>
						
					</div>
				</div> <!-- End title content -->

				<div class="post-details">
					<div class="post-img">
						<?php the_post_thumbnail('large'); ?>
					</div>

					<div class="post-text">
						<?php the_content(); ?>
					</div>
				</div> <!-- End post details -->
			</div> <!-- End post content -->	

		<?php endwhile; ?> <!-- End loop -->
    </div> <!--End content -->

  </div> <!-- /wrapper -->
</section> <!-- /main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>