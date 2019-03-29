<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<header id="" class="header-grid">
			<div class="red grid-item">
				<h1><?php bloginfo('name'); ?></h1>
	      <h4><?php bloginfo('description'); ?></h4>
			</div>

			<div class="blue grid-item">
				<nav class="group">
	        <?php wp_nav_menu(array(
	          'theme_location' => 'mainMenu'
	        )) ?>
	      </nav>
			</div>
		</header>

	<div id="content" class="site-content">
