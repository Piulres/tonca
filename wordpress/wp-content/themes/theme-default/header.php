<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="../../favicon.ico">

	<!-- wp_head -->

	<?php wp_head(); ?>

	<?php include 'le_styles.php' ?>

	<?php include 'le_scripts.php' ?>

</head>

<body <?php body_class(); ?>>

	<nav class="navbar navbar-default">

		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Mobile navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Menu</a>
			</div>
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
					<li><a href="/tonca/wordpress/">Home</a></li>
					<li><a href="/tonca/wordpress/page-1">Page #1</a></li>
					<li><a href="/tonca/wordpress/page-2">Page #2</a></li>
				</ul>
				
				<?php if ( is_page_template( 'page-default-1.php' ) ) { ?>

				<ul class="nav navbar-nav navbar-right filters">
					
					<li class="dropdown">
					<a href="#" class="dropdown-toggle drop-color" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Filters - Colors </b><span class="caret"></span></a>
						<ul class="button-group dropdown-menu" data-filter-group="color">
							<li><a href="#" class="button" data-filter=".red">Filter Red</a></li>
							<li><a href="#" class="button" data-filter=".blue">Filter Blue</a></li>
							<li><a href="#" class="button" data-filter=".yellow">Filter Yellow</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#" class="button is-checked" data-filter="">All</a></li>
						</ul>
					</li>

				</ul>

				<?php } else { /* page-default-1.php is not used */ } ?>

			</div><!-- /.navbar-collapse -->

		</div><!-- /.container-fluid -->

	</nav>

	<header class="container">
			
		<h1>Tonca <small>The Starter Project</small></h1>

		<div class="description">

			<p>Tonca is a wordpress system using many technologies and ready to development.</br></p>

		</div>
		
	</header>