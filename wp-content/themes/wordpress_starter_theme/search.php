<?php get_header(); ?>
<div class="main">
	<div class="wrapper">

		<div class="content">
			<?php if ( have_posts() ) : ?>

				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>
				
			<div class="search-nothing">
				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				<div class="search-form">
					<label for="s">Search Form</label>
					<?php get_search_form(); ?>
				</div>
			</div>

			<?php endif; ?>
		</div> <!-- /.content -->

		<?php get_sidebar(); ?>

	</div><!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>
