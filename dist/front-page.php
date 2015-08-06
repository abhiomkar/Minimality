<?php
/**
 * Minimality template for displaying the Front-Page
 *
 * @package WordPress
 * @subpackage Minimality
 * @since Minimality 1.0
 */

get_header(); ?>

	<ul id="post-list">

		<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'loop', get_post_format() );

				endwhile;

			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>
		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</ul>

<?php get_footer(); ?>
