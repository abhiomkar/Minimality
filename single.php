<?php
/**
 * Minimality template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage Minimality
 * @since Minimality 1.0
 */

get_header(); ?>

<article class="post">
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
	<section id="post-body">
		<?php
		if ( have_posts() ) : the_post();
				the_content();
			endif;
		?>
	</section>

	<footer id="post-meta" class="clearfix">
		<div><span>Posted on </span><?php the_date('M j, Y'); ?></div>
		<div><span>Written by</span><?php the_author(); ?></div>

		<section id="sharing">
			<a class="twitter" href="https://twitter.com/share"><span class="icon-twitter-circled"></span></a>

			<a class="facebook" href="#"
				onclick="
					window.open(
						'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
						'facebook-share-dialog',
						'width=626,height=436');
					return false;"><span class="icon-facebook-circled"></span>
			</a>

		</section>
	</footer>
</article>

<?php
	if ( comments_open() || get_comments_number() > 0 ) :
		comments_template( '', true );
	endif;
?>


<footer>
<nav id="post-nav">
	<span class="prev">
		 <?php previous_post_link( '%link', __( '&larr; %title', 'minimality' ) ) ?>
	</span>


	<span class="next">
		<?php next_post_link( '%link', __( '%title &rarr;', 'minimality' ) ) ?>
	</span>
</nav>
</footer>
