<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dc' ); ?></a>

	<header id="masthead" class="site-header navbar-static-top"  role="banner">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">

				<div class="navbar-brand">
					<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
						<a href="<?php echo esc_url( home_url( '/' )); ?>">
							<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						</a>
					<?php else : ?>
						<a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
					<?php endif; ?>
				</div>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
					wp_nav_menu(array(
						'theme_location'    => 'primary',
						'container'       => 'div',
						'container_id'    => 'main-nav',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav',
						'depth'           => 3,
						'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						'walker'          => new wp_bootstrap_navwalker()
					));
				?>
			</div>
		</nav>
		<div class="subnav character-menu">
			<ul>
				<li>Heroes</li>
				<li>Villains</li>
			</ul>
		</div>
		
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
			<!-- Slide One - Set the background image for this slide in the line below -->
			<div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
				<div class="carousel-caption d-none d-md-block">
				<h2 class="display-4">First Slide</h2>
				<p class="lead">This is a description for the first slide.</p>
				</div>
			</div>
			<!-- Slide Two - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
				<div class="carousel-caption d-none d-md-block">
				<h2 class="display-4">Second Slide</h2>
				<p class="lead">This is a description for the second slide.</p>
				</div>
			</div>
			<!-- Slide Three - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
				<div class="carousel-caption d-none d-md-block">
				<h2 class="display-4">Third Slide</h2>
				<p class="lead">This is a description for the third slide.</p>
				</div>
			</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
		</div>

	</header><!-- #masthead -->
