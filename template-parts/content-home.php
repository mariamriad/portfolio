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
	<!-- <span>
		<svg class="heart-logo tagline start" x="0px" y="0px" viewBox="0 0 304 232.8" style="enable-background:new 0 0 304 232.8;">
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
	</span> -->
	<div class="tagline">
		<h1 class="tagline start">Hello there,</h1>
		<p class="tagline middle"><strong>I'm Mariam:</strong> a front-end web developer, UX/UI designer, and digital content creator with a passion for building effective digital solutions.</p>
	</div>
<br>
	<div class="tagline">
		<span><a href="./contact" class="tagline finish custom-button">Get in touch</a></span>
	</div>
	<div class="bottom-landing-section">
	</div>
</section>
</div><!--background-landing-->
<!-- <div class="portfolio-link" ></div> -->
<section id="portfolio">
	<h1 class="portfolio-title">Portfolio</h1>
	<div class="container">
	<ul id="filters" class="filters">
			<li><a href="javascript:void(0)" data-filter="*" class="selected">All</a></li>
			<?php
					$terms = get_terms('project-category');
					$count = count($terms); //How many are they?
					if ( $count > 0 ){  //If there are more than 0 terms
							foreach ( $terms as $term ) {  //for each term:
									echo "<li><a href='javascript:void(0)' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
							}
					}
			?>
	</ul>

	<?php
    $args = array(
        'post_type'=> 'project',
        'posts_per_page' => -1,
				'orderby' => 'menu_order title',
				'order' => 'ASC'
    );

    $projects = new WP_Query($args);?>

    <?php if ( $projects->have_posts() ) : ?>
        <div class="portfolio" id="isotope-list">

				<?php $counter = 0; ?>
        <?php while ( $projects->have_posts() ) {
                $projects->the_post();
								// $counter++;
								//
								// if($counter == 1){
								// 	echo "<div class='row'>";
								// }elseif($counter % 4 == 0){
								// 	echo "</div><div class='row'>";
								// }

                    $termList = get_the_terms( $post->ID, 'project-category' );  //Get the assigned terms for a particular item
                    $termName = ""; //initialize the string that will contain the terms
										if ($termList && ! is_wp_error($termList)){
                        foreach ( $termList as $term ) { // for each term
                            $termName .= $term->slug.' '; //create a string that has all the slugs
                        }
										}
        ?>
				<div>
				<a href="<?php the_permalink() ?>" class="box item <?php echo $termName?>">
						<?php the_post_thumbnail('medium_large'); ?>
						<div class="content">
							<div class="overlay"></div>
							<div class="content-text">
								<p><?php the_field('project_description'); ?></p>
								<h2><?php the_title(); ?></h2>
							</div><!-- content-text -->
						</div><!-- content -->
				</a>
				</div>
        <?php }  ?>

			</div> <!-- end portfolio -->
	<?php endif; ?>
	</div><!-- container -->
</section>
<section class="technical-skills">
	<h1>Technical Skills</h1>
	<div class="skills-wrapper">
			<div class="webdev-skills">
				<h2>Web Development</h2>
				<p>HTML, CSS, Sass, PHP, WordPress custom theme development, Gulp, Git, JavaScript, jQuery, Angular, Vue</p>
			</div>
			<div class="design-skills">
				<h2>Design</h2>
				<p>UX/UI design, design briefs, UX planning (user personas, scenarios, journeys), wireframes, mockups, prototypes, Adobe Creative Suite: Adobe XD, Illustrator, Photoshop + InDesign, Sketch, InVision, UX testing</p>
			</div>
			<div class="digitalmarketing-skills">
				<h2>Digital Marketing</h2>
				<p>Copywriting, SEO, Google Analytics, MailChimp, email marketing, and content production for social media platforms including Instagram, Facebook + Twitter</p>
			</div>
	</div>
</section>
