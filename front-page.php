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


			<!-- first row -->
			<div id="about-us-wrapper" class="container-fluid py-5">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h3 class="h4 text-uppercase font-weight-bold">About Us</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
							dummy text ever since thewhen an unknown printer took a galley of type and scrambled it to make a type specimen book.
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<div class="col-md-2 col-sm-4">
						<div class="card align-items-center py-4 depth-4">
							<svg class="icon icon-content">
								<use xlink:href="#icon-github"></use>
							</svg>
							<span>
								<strong>12</strong>
							</span>
							<p>Years finished</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4">
						<div class="card align-items-center py-4 depth-4">
							<svg class="icon icon-content">
								<use xlink:href="#icon-github"></use>
							</svg>
							<span>
								<strong>12</strong>
							</span>
							<p>Happy Clients</p>
						</div>
					</div>
					<div class="col-md-2 col-sm-4">
						<div class="card align-items-center py-4 depth-4">
							<svg class="icon icon-content">
								<use xlink:href="#icon-github"></use>
							</svg>
							<span>
								<strong>12</strong>
							</span>
							<p>Awards</p>
						</div>
					</div>
				</div>
				<div class="container my-5 d-flex justify-content-center">
					<a class="btn btn-outline-primary" id="home-btn" href="#">Read More</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="card" id="service-card">
							<img class="card-img-top" src="wp-content/themes/signa-starter-theme/images/card-image.png" alt="Card image cap">
							<div class="card-body">
								<h4 class="h6 card-title text-uppercase">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<div class="card-footer">
									<a class="text-primary font-weight-bold" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" id="service-card">
							<img class="card-img-top" src="wp-content/themes/signa-starter-theme/images/card-image.png" alt="Card image cap">
							<div class="card-body">
								<h4 class="h6 card-title text-uppercase">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<div class="card-footer">
									<a class="text-primary font-weight-bold" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" id="service-card">
							<img class="card-img-top" src="wp-content/themes/signa-starter-theme/images/card-image.png" alt="Card image cap">
							<div class="card-body">
								<h4 class="h6 card-title text-uppercase">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<div class="card-footer">
									<a class="text-primary font-weight-bold" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php
get_footer();