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
	<h1>Mariam Riad</h1>
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
		<!-- <div class="arrow down"><i class="fas fa-arrow-down fa-2x"></i></div> -->
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
    );

    $projects = new WP_Query($args);?>

    <?php if ( $projects->have_posts() ) : ?>
        <div class="portfolio" id="isotope-list">

				<?php $counter = 0; ?>
        <?php while ( $projects->have_posts() ) {
                $projects->the_post();
								$counter++;

								if($counter == 1){
									echo "<div class='row'>";
								}elseif($counter % 4 == 0){
									echo "</div><div class='row'>";
								}

                    $termList = get_the_terms( $post->ID, 'project-category' );  //Get the assigned terms for a particular item
                    $termName = ""; //initialize the string that will contain the terms
										if ($termList && ! is_wp_error($termList)){
                        foreach ( $termList as $term ) { // for each term
                            $termName .= $term->slug.' '; //create a string that has all the slugs
                        }
										}
        ?>

				<a href="#0" class="box item <?php echo $termName?>">
						<?php the_post_thumbnail('medium'); ?>
						<div class="content">
							<div class="overlay"></div>
							<div class="content-text">
								<p><?php category_description(); ?></p>
								<h2><?php the_title(); ?></h2>
							</div><!-- content-text -->
						</div><!-- content -->
				</a>

        <?php }  ?>
				</div> <!-- end row div -->
        </div> <!-- end item-list -->
	<?php endif; ?>


</section>
<a href="#" class="scrollToTop"><i class="fas fa-arrow-up fa-2x"></i></a>
