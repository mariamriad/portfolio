<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<section class="landing">
	<h1>Mariam Riad &mdash;</h1>
	<p>Front-end web developer, designer, and digital content creator with a passion for asthetics and delighting the end user.</p>
	<div class="tagline">
		<span><h2 class="tagline start">Design that you'll</h2></span>
		<span>
			<svg class="heart-logo tagline middle" x="0px" y="0px" viewBox="0 0 304 232.8" style="enable-background:new 0 0 304 232.8;">
			<style type="text/css">
				.st0{/*fill:#FFFFFF;*//*stroke:#FFFFFF;*/stroke-miterlimit:10;}
				.st1{/*stroke:#FFFFFF;*/stroke-miterlimit:10;}
			</style>
			<title>Mariam Riad - Logo</title>
			<g id="heart" class="heart">
				<path class="st0 half-heart" d="M148.9,42.3c-27.8-31.8-65.8-48-96.4-38.7C4.2,18.2-8.2,90.9,6,137.3c17,55.4,79,95.1,153.5,95"/>
				<path class="st0 half-heart" d="M149.3,41.9C178.2,10,217.7-6.2,249.5,3.1c50.1,14.7,63,87.5,48.2,134c-17.7,55.5-82.1,95.3-159.5,95.2"/>
				<path class="st1" d="M21,82.1c0,56.8,14.2,102.7,31.6,102.7"/>
			</g>
			</svg>
		</span>
	</div>
	<div class="bottom-landing-section">
		<a href="#portfolio" class="button">View Portfolio</a>
		<div class="arrow down"><i class="fas fa-arrow-down fa-2x"></i></div>
	</div>
</section>
</div><!--background-landing-->
<section class="container" id="portfolio">
	<!-- <div class="filters button-group sort-by-button-group">
		<ul>
			<a href="" data-sort-by="original-order"><li>All</li></a>
			<a href="" data-sort-by="web-dev"><li>Web Development</li></a>
			<a href="" data-sort-by="design"><li>Design</li></a>
			<a href="" data-sort-by="wordpress"><li>WordPress</li></a>
			<a href="" data-sort-by="ux"><li>User Experience (UX)</li></a>
			<a href="" data-sort-by="ia"><li>Information Architecture</li></a>
			<a href="" data-sort-by="branding"><li>Branding</li></a>
		</ul>
	</div> -->
	<ul id="filters">
    <li><a href="#" data-filter="*" class="selected">All</a></li>
		<?php
			$terms = get_terms("category"); // get all categories, but you can use any taxonomy
			$count = count($terms); //How many are they?
			if ( $count > 0 ){  //If there are more than 0 terms
				foreach ( $terms as $term ) {  //for each term:
					echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
					//create a list item with the current term slug for sorting, and name for label
				}
			}
		?>
	</ul>
	<?php $the_query = new WP_Query( 'posts_per_page=50' ); //Check the WP_Query docs to see how you can limit which posts to display ?>
	<?php if ( $the_query->have_posts() ) : ?>
	    <div id="isotope-list">
	    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
	$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
	$termsString = ""; //initialize the string that will contain the terms
	foreach ( $termsArray as $term ) { // for each term
	$termsString .= $term->slug.' '; //create a string that has all the slugs
	}
	?>
	<div class="<?php echo $termsString; ?> item"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
	<h3><?php the_title(); ?></h3>
	        <?php if ( has_post_thumbnail() ) {
	                      the_post_thumbnail();
	                } ?>
	</div> <!-- end item -->
	    <?php endwhile;  ?>
	    </div> <!-- end isotope-list -->
	<?php endif; ?>
	<!-- <div id="filters" class="filters button-group">
		<button class="button is-checked" data-filter="*">All</button>
	  <button class="button" data-filter=".web-dev">Web Development</button>
	</div> -->
	<div class="portfolio" id="isotope-list" data-isotope='{ "itemSelector": ".box", "layoutMode": "fitRows" }'>
		<div class="row">
			<a href="#0" class="box">
					<picture>
						<source media="(max-width: 799px)" srcset="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png">
						<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-square.png" alt="">
					</picture>
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
			<a href="#0" class="box web-dev">
					<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png" alt="">
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
			<a href="#0" class="box">
					<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png" alt="">
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
		</div><!-- row -->
		<div class="row">
			<a href="#0" class="box">
					<picture>
						<source media="(max-width: 799px)" srcset="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png">
						<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-square.png" alt="">
					</picture>
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
			<a href="#0" class="box">
					<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png" alt="">
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
			<a href="#0" class="box">
					<img src="/portfolio/wp-content/themes/portfolio/assets/portfolio-rectangle.png" alt="">
					<div class="content">
						<div class="overlay"></div>
						<div class="content-text">
							<p>Custom WordPress Site Development</p>
							<h2>Early Bird Family Farm.</h2>
						</div><!-- content-text -->
					</div><!-- content -->
			</a>
		</div><!-- row -->
</section>
<a href="#" class="scrollToTop"><i class="fas fa-arrow-up fa-2x"></i></a>
