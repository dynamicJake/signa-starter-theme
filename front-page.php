<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

get_header('home'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="flex">
			<div class="col-twice">
				<h3>Testing</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
				industry. Lorem Ipsum has been the industry's standard dummy text ever since thewhen an 
				unknown printer took a galley of type and scrambled it to make a type specimen book. 
				It has survived not only five centuries, but also the leap into electronic typesetting, 
				remaining essentially unchanged.</p>
			</div>
			<div class="col" style=" display: flex; justify-content: center;">
				<svg class="icon icon-content"><use xlink:href="#icon-github"></use></svg>
			</div>
			<div class="col">

			</div>
			<div class="col">

			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
