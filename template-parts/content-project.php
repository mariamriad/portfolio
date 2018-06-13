<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>
<?php if(function_exists('get_field')): ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="project-main">
		<?php the_post_thumbnail('large', array('class' => 'project-main-image')); ?>
		<div class="project-main-text">
			<?php the_title( '<h2 class="project-title">', '</h2>' ); ?>
			<?php
				if(get_field('full_project_description') && get_field('project_link')) {
					 echo "<p>";
					 the_field('full_project_description');
					 echo "</p>";

					 echo "<a class='cta-button' href='";
					 the_field('project_link');
					 echo "'>Visit Live Site</a>";
				}
			?>
		</div>
	</div><!-- .post-thumbnail -->

<div class="project-details">
	<div class="project-tools">
	<?php
	// vars
	$tools = get_field('project_tools');

	// check
	if( $tools ): ?>
	<h3>Project Tools</h3>
	<ul>
		<?php foreach( $tools as $tool ): ?>
			<li><?php echo $tool; ?></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
	</div>

	<?php
		if(get_field('project_writeup')) {
			 echo "<div>";
			 echo "<h3 class='project-writeup'>Project Process</h3>";
			 echo "<p>";
			 the_field('project_writeup');
			 echo "</p>";
			 echo "</div>";
		 }
	?>
</div>

<div class="project-colors">
	<?php
		 if(get_field('color_palette_1') || get_field('color_palette_2') || get_field('color_palette_3')) {
			 echo "<h3>Color Palette</h3>";
			 echo "<ul class='colors'>";
			 	echo "<li>";
					echo "<p>" . the_field('color_palette_1') . "</p>";
			 		echo "<div class='color-block' style='background-color:" . get_field('color_palette_1') . "'></div>";
				echo "</li>";

				echo "<li>";
					echo "<p>" . the_field('color_palette_2') . "</p>";
					echo "<div class='color-block' style='background-color:" . get_field('color_palette_2') . "'></div>";
				echo "</li>";

				echo "<li>";
					echo "<p>" . the_field('color_palette_3') . "</p>";
					echo "<div class='color-block' style='background-color:" . get_field('color_palette_3') . "'></div>";
				echo "</li>";

			 echo "<li>";
				 echo "<p>" . the_field('color_palette_4') . "</p>";
				 echo "<div class='color-block' style='background-color:" . get_field('color_palette_4') . "'></div>";
			 echo "</li>";
			echo "</ul>";
		 }
	?>
</div>

<div class="project-images">
	<?php
	if(get_field('project_image_1')) {
			echo "<h3>Design</h3>";
			echo wp_get_attachment_image(get_field('project_image_1'), 'large');
	}

	if(function_exists('get_field')) {
			echo wp_get_attachment_image(get_field('project_image_2'), 'large');
	}

	if(function_exists('get_field')) {
			echo wp_get_attachment_image(get_field('project_image_3'), 'large');
	}
	?>
</div>

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

<?php endif; ?>
