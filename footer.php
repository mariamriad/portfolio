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

	<footer id="colophon" class="site-footer">
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
	  <!-- <article class="mariam">
	    <p>Mariam Riad</p>
	    <p>Currently seeking web development and web design opportunities in the Vancouver, BC area. Open to remote opportunities beyond.</p>
	  </article> -->
	  <div class="email">
	    <h2>Get in touch</h2>
	    <a href="mailto:hello@mariamriad.com">hello@mariamriad.com</a>
	  </div>
	  <article class="made">
	    <p>Made with <i class="fas fa-heart"></i> and <i class="fas fa-coffee"></i></p>
	    <p>&copy; <?php echo date('Y'); ?> Mariam Riad.</p>
	  </article>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
