<?php
/*
 * project   : OD Base
 * file name : header-topmenu.php
 * created   : 2017/06/20
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header class="site-header">
	<div class="site-header__branding">
		<?php if ( is_home() || is_front_page() ): ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else: ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</div>
	<nav class="site-header__gnavi">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'global',
				'menu_class' => 'gnavi gnavi_topmenu',
				'depth' => 1,
			) );
		?>
	</nav>
	<?php if ( get_header_image() ): ?>
	<figure class="custom-header-image">
		<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" />
	</figure>
	<?php endif; ?>
</header>
<div id="content" class="site-content">