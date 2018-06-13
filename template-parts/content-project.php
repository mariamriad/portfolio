<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php portfolio_post_thumbnail(); ?>
	<?php
		 if(function_exists('get_field')) {

			 echo "<p>";
			 the_field('full_project_description');
			 echo "</p>";

			 echo "<a class='cta-button' href='";
			 the_field('project_link');
			 echo "'>Visit Live Site</a>";

			 }
	?>

	<?php
	// vars
	$tools = get_field('project_tools');

	// check
	if( $tools ): ?>
	<ul>
		<?php foreach( $tools as $tool ): ?>
			<li><?php echo $tool; ?></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>

	<?php
		 if(function_exists('get_field')) {
			 echo "<p>";
			 the_field('project_writeup');
			 echo "</p>";

			 echo "<ul>";
			 echo "<li style='background-color:" . get_field('color_palette_1') . "'>" . the_field('color_palette_1') . "</li>";
			 echo "<li style='background-color:" . get_field('color_palette_2') . "'>" . the_field('color_palette_1') . "</li>";
			 echo "<li style='background-color:" . get_field('color_palette_3') . "'>" . the_field('color_palette_1') . "</li>";
			 echo "</ul>";
		 }
	?>

	<?php
	if(function_exists('get_field')) {
			echo wp_get_attachment_image(get_field('project_image_1'), 'medium');
	}

	if(function_exists('get_field')) {
			echo wp_get_attachment_image(get_field('project_image_2'), 'medium');
	}

	if(function_exists('get_field')) {
			echo wp_get_attachment_image(get_field('project_image_3'), 'medium');
	}
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<div class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'portfolio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</div><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
