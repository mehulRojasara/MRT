<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mrt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mrt' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<?php if(the_custom_logo()): ?><a class="navbar-brand"><?php  the_custom_logo(); ?></a><?php endif; ?>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
				<?php
				$mrt_description = get_bloginfo( 'description', 'display' );
				if ( $mrt_description || is_customize_preview() ) :
					?>
					<small class="site-description d-block"><?php echo $mrt_description; /* WPCS: xss ok. */ ?></small>
					</a>
				<?php endif;
			else :
				?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
				<?php
				$mrt_description = get_bloginfo( 'description', 'display' );
				if ( $mrt_description || is_customize_preview() ) :
					?>
					<small class="site-description d-block"><?php echo $mrt_description; /* WPCS: xss ok. */ ?></small>
					</a>
				<?php endif;
			endif; ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse justify-content-center',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
			?>
			<div class="list-unstyled social-links">
				<ul class="list-group list-group-horizontal">
					<li class="list-group-item"><i class="fab fa-facebook"></i></li>
					<li class="list-group-item"><i class="fab fa-twitter"></i></li>
					<li class="list-group-item"><i class="fab fa-linkedin"></i></li>
					<li class="list-group-item"><i class="fab fa-youtube"></i></li>
				</ul>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
