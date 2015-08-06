<?php
/**
 * Minimality template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage Minimality
 * @since Minimality 1.0
 */
?>

<li>
	<a href='<?php echo esc_url( get_permalink() ); ?>'><aside class="dates"><?php echo get_the_date('M j, Y'); ?></aside></a>
	<a href='<?php echo esc_url( get_permalink() ); ?>'>
		<?php the_title(); ?>
		<?php
				echo '<h2>';
			  echo the_excerpt();
				echo '</h2>';
		?>
	</a>
</li>
