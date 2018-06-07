<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	<footer>
	  <!-- <article class="mariam">
	    <p>Mariam Riad</p>
	    <p>Currently seeking web development and web design opportunities in the Vancouver, BC area. Open to remote opportunities beyond.</p>
	  </article> -->
		<div class="social">
			<ul>
				<li><a href="#0">
							<i class="fab fa-twitter"></i>
							<span class="sr-only">Twitter: Mariam Riad</span>
						</a>
				</li>
				<li><a href="#0">
							<i class="fab fa-linkedin-in"></i>
							<span class="sr-only">Linkedin: Mariam Riad</span>
						</a>
				</li>
				<li><a href="#0">
							<i class="fab fa-github"></i>
							<span class="sr-only">Github: Mariam Riad</span>
						</a>
				</li>
			</ul>
		</div>
	  <div class="email">
	    <h2>Get in touch</h2>
	    <a href="mailto:hello@mariamriad.com">hello@mariamriad.com</a>
	  </div>
	  <div class="made">
	    <p>Made with <i class="fas fa-heart"></i> and <i class="fas fa-coffee"></i></p>
			<!-- <img src="/portfolio/wp-content/themes/portfolio/assets/mariamriad-logo-black.svg"> -->
	    <p>&copy; <?php echo date('Y'); ?> Mariam Riad.</p>
	  </div>
	</footer>
<?php wp_footer(); ?>

</body>
</html>
