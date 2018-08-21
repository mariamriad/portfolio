<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/isp3uso.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="background-landing">
	<header>
		<div id="navbar">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="heading">
				<!-- <img src="/wp-content/themes/portfolio/assets/mariamriad-logo.svg" alt="heart logo" class="logo" width="40px"> -->
				<h2 class="heading-name">Mariam Riad</h2>
			</a>
			<nav>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
		</div>
	</header>
