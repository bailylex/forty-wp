<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forty_wp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<noscript><link rel="stylesheet" href="<?php wp_enqueue_style('noscript', get_template_directory_uri() . '/assets/css/noscript.css'); ?>"></noscript>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class('is-preload'); ?>>
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Header -->
			<header id="header" class="alt">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
					<strong>
						<?php bloginfo('name'); ?>
					</strong> 
					<?php 
					$forty_wp_description = get_bloginfo( 'description', 'display' );

					if ( $forty_wp_description || is_customize_preview() ) :
						?>
						<span><?php echo $forty_wp_description; /* WPCS: xss ok. */ ?></span>
					<?php endif; ?>
				</a>

				<nav>
					<a href="#menu"><?php esc_html_e('Menu', 'forty-wp'); ?></a>
				</nav>
			</header>

			<!-- Menu -->
			<nav id="menu">
				<?php
				wp_nav_menu(array(
					'menu'           => 'primary',
					'theme_location' => 'main-menu',
					'menu_class'     => 'links',
					'container'      => false,
					'fallback_cb'    => false
				));
				?>

				<ul class="actions stacked">
					<li><a href="<?php echo esc_url('/wp-login.php?action=register'); ?>" class="button primary fit">Register</a></li>
					<li><a href="<?php echo esc_url('/wp-login.php'); ?>" class="button fit">Log In</a></li>
				</ul>
			</nav>

			<!-- Main -->
			<div id="main">
