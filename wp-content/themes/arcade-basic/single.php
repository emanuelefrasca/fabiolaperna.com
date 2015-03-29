<?php
/**
 * The Template for displaying all single posts.
 *
 * @since 1.0.0
 */
get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" <?php bavotasan_primary_attr(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">Torna alle sequenze</a>
					
					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>