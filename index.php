<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class( 'animated fadeIn' ) ?>>
	<div class="container-fluid">

		<!-- add extra container element for Masonry -->
		<div class="grid">
			<div class="grid-sizer col-lg-4 col-sm-6 col-xs-12"></div>
			<div class="grid-item grid-item--highlight col-xs-12 visible-xs-block">
				<div class="grid-item-content">
					<div class="grid-item-content-wrapper">
						<img src="<?php echo get_template_directory_uri() ?>/images/harri-heljala.jpg" class="avatar img-responsive center-block" />
						<h1>Harri Heljala</h1>
						<p>consectetur adipisicing elit. Adipisci eum et animi, doloremque ratione consequuntur optio deserunt ullam beatae. Nulla pariatur neque eum expedita repudiandae, unde dolor aliquam quas blanditiis.</p>
					</div>
				</div>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<!-- add inner element for column content -->
				<a href="index.html" class="grid-item-content grid-item-content--category">
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">#products</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item grid-item--highlight col-sm-6 hidden-xs hidden-lg">
				<div class="grid-item-content grid-item-content--height2">
					<div class="grid-item-content-wrapper">
						<img src="<?php echo get_template_directory_uri() ?>/images/harri-heljala.jpg" class="avatar img-responsive center-block" />
						<h1>Harri Heljala</h1>
						<p>consectetur adipisicing elit. Adipisci eum et animi, doloremque ratione consequuntur optio deserunt ullam beatae. Nulla pariatur neque eum expedita repudiandae, unde dolor aliquam quas blanditiis.</p>
					</div>
				</div>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">websitedownloader.io</h2>
						<div class="show-on-hover">
							<p>Download all the source code and assets of any website.</p>
							<iframe src="https://yvoschaap.com/producthunt/counter.html#href=https%3A%2F%2Fwebsitedownloader.io%2F&amp;layout=wide" width="100" height="25" scrolling="no" frameborder="0" allowtransparency="true" class="center-block"></iframe>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item grid-item--highlight col-lg-4 visible-lg-block">
				<div class="grid-item-content grid-item-content--height2">
					<div class="grid-item-content-wrapper">
						<img src="<?php echo get_template_directory_uri() ?>/images/harri-heljala.jpg" class="avatar img-responsive center-block" />
						<h1>Harri Heljala</h1>
						<p>consectetur adipisicing elit. Adipisci eum et animi, doloremque ratione consequuntur optio deserunt ullam beatae. Nulla pariatur neque eum expedita repudiandae, unde dolor aliquam quas blanditiis.</p>
					</div>
				</div>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">htmltowordpress.io</h2>
						<div class="show-on-hover">
							<p>Convert an HTML website into a WordPress theme in seconds.</p>
							<iframe src="https://yvoschaap.com/producthunt/counter.html#href=http%3A%2F%2Fhtmltowordpress.io%2F&amp;layout=wide" width="100" height="25" scrolling="no" frameborder="0" allowtransparency="true" class="center-block"></iframe>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">Lorem ipsum</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">Lorem ipsum</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<!-- add inner element for column content -->
				<a href="index.html" class="grid-item-content grid-item-content--category">
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">#opensource</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">Lorem ipsum</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">Lorem ipsum</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<a href="#" class="grid-item-content grid-item-content--post">
					<div class="background-cover" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)),  url(https://placeimg.com/800/800/tech)"></div>
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">Lorem ipsum</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>