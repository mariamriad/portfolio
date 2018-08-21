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
	<!-- <header class="entry-header"> -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="subtitle"><?php the_field('subtitle'); ?></p>
	<!-- </header> -->

<div class="page-layout contact-wrapper">
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<div class="contact-info">
		<div class="contact-email">
			<h2>Email</h2>
			<a href="mailto:hello@mariamriad.com">hello@mariamriad.com</a>
		</div>

		<br>
		<div class="contact-social">
			<h2>Follow me</h2>
			<ul>
				<li><a href="https://twitter.com/mariamriad" target="_blank">
							<i class="fab fa-twitter"></i>
							<span class="sr-only">Twitter: Mariam Riad</span>
						</a>
				</li>
				<li><a href="https://www.linkedin.com/in/mariamriad/" target="_blank">
							<i class="fab fa-linkedin-in"></i>
							<span class="sr-only">Linkedin: Mariam Riad</span>
						</a>
				</li>
				<li><a href="https://github.com/mariamriad" target="_blank">
							<i class="fab fa-github"></i>
							<span class="sr-only">Github: Mariam Riad</span>
						</a>
				</li>
			</ul>
		</div>
	</div>

	<?php portfolio_post_thumbnail(); ?>
</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
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
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
