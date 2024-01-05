<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>1288xRealty</title>

	<?php wp_head(); ?>

</head>

<body>

	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<header class="header-area header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<a href="<?php echo home_url(); ?>" class="logo">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo.svg">
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="<?php echo home_url(); ?>" class="active">Home</a></li>
							<li class="scroll-to-section"><a href="#men">Model</a></li>
							<li class="scroll-to-section"><a href="#explore">About</a></li>
							<li class="scroll-to-section"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact Us</a></li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>