<?php get_header(); ?>

<div class="row">

	<section id="content" class="eightcol" role="main">
		
    	<h1 class="archive_header search">
    		<?php _e( 'Search results for', 'nimbus' ); ?> &ldquo; <?php the_search_query(); ?> &rdquo;
    	</h1>        
        		
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>
			
			<?php nimbus_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'nimbus' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'nimbus' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>
	</section>
	
</div><!--/.row-->

<?php get_footer(); ?>