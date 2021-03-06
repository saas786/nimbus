<article <?php post_class(); ?>>

	
	<?php 	
	
		// Get the featured image
		$image_id = get_post_thumbnail_id();  
	
		// Get the full size image details
		$image_url = wp_get_attachment_image_src($image_id, 'full');
		$image_url = $image_url[0];	
	
		// Get the smaller image
		$bw_image_url = wp_get_attachment_image_src($image_id, 'thumbnail-bw');
		$bw_image_url = $bw_image_url[0];	
	
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	?>
	
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'nimbus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="img-wrap"><img class="featured-image wp-post-image" src="<?php echo $bw_image_url; ?>" data-fullsrc="<?php echo $image_url; ?>" title="<?php the_title(); ?>" id="post-featured-img" /></a>
		
	<?php } ?>
	
	<h1 class="title" data-text="<?php the_title(); ?>"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'nimbus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	
	
	<section class="article-content">
		<?php 
		if ( is_single() ) { 
			the_content();
		} else {
			the_excerpt();
		}
		wp_link_pages();
		?>	
	
	</section><!--/.article-content-->
	
	<aside class="meta">
	
		<?php nimbus_post_meta(); ?>
	
	</aside>
	
			
</article>
