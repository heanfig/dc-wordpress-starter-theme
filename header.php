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
	<link rel="icon" href="https://www.dccomics.com/sites/all/themes/dc_comics_bp/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dc' ); ?></a>

	<header id="masthead" class="site-header navbar-static-top"  role="banner">
		<nav class="navbar navbar-expand-md">
			<div class="container">

				<div class="navbar-brand">
					<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
						<a href="<?php echo esc_url( home_url( '/' )); ?>">
							<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						</a>
					<?php else : ?>
						<a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
							<img class="logo-img" src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/favicon.ico" />
							<?php esc_url(bloginfo('name')); ?>
						</a>
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
			<?php 
				$taxonomies = get_terms( 
					array(
						'taxonomy' => 'character_type',
						'hide_empty' => false,
					) 
				); 
			?>
			<ul>
				<?php if( count($taxonomies) > 0 ){ ?>
					<?php foreach($taxonomies as $term){ ?>
						<li>
							<a href="<?php echo get_term_link($term->term_id); ?>">
								<?php echo $term->name; ?>
							</a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
	</header><!-- #masthead -->

	<div class="container">