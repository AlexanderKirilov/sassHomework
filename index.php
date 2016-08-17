<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/stylesheets/index.css">

	<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:900" rel="stylesheet">
	<?php 
		require 'assets/snippets/googleMapsCDN_header.php';
	?>
</head>
<body>
<section id="heroBGHeader">
	<?php
		require'assets/snippets/header.html';
	?>
</section>
<section id="heroCategoriesBGnav">
	<?php
		require'assets/snippets/movieCategoryNavigation.html';
	?>
</section>

<header id="heroBannerBG" class="container-fluid" style="min-height:43em;">
	<div id="moviewPreviewWrapper">
		<h1 id="moviePreviewTitle">Ex Machina</h1>
		<p>	&laquo;To erase the line between man and machine is to obscure the line between man and gods &raquo;</p>
		<a class="ctaButton">Learn More</a>
		<a class="ctaButton">Watch Trailer</a>
	</div>
</header>

<section class="heroCategoriesBG">
	<?php
		require'assets/snippets/movieCategoryList.html';
	?>
</section>

<section id="heroFilmsBG">
	<div class="sectionContainerWrapper">
		<h2>More movies..</h2>
		<a class="ctaButton">View More</a>
	</div>
</section>

<section id="heroTestimonialsBG">
	<?php
		require'assets/snippets/testimonials.html';
	?>
</section>
<section class="heroCategoriesBG">
	<?php
		require'assets/snippets/contact.html';
	?>
</section>
<section id="googleMaps">

	<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
    <div id="map"></div>

</section>
<footer>
	<div>Movies &copy; 2015 Privicy Policy</div>
	<div>Questions? Call Us Toll Free: (012) 123-456-7890</div>
</footer>
</body>
</html>