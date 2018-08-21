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
	<a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i></a>

	<footer>
	  <!-- <article class="mariam">
	    <p>Mariam Riad</p>
	    <p>Currently seeking web development and web design opportunities in the Vancouver, BC area. Open to remote opportunities beyond.</p>
	  </article> -->
		<div class="social">
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
	  <div class="email">
	    <h2>Get in touch</h2>
	    <a href="mailto:hello@mariamriad.com">hello@mariamriad.com</a>
	  </div>
	  <div class="made">
	    <p>Made with <i class="fas fa-coffee"></i> in Vancouver, BC, Canada.</p>
			<!-- <img src="/portfolio/wp-content/themes/portfolio/assets/mariamriad-logo-black.svg"> -->
	    <p>&copy; <?php echo date('Y'); ?> Mariam Riad.</p>
	  </div>
	</footer>
<?php wp_footer(); ?>

</body>
</html>
