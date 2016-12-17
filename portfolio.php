<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <title>CSC174 Project3</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Abhinay Omkar" /> 
   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
    <script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script src="js/jquery.imagesloaded.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
    <script src="js/spin.min.js" type="text/javascript"></script>
    <script src="js/portfolio.js" type="text/javascript"></script>

</head>

<body>

	<?php include 'inc/nav.inc'; ?>

	 <div id="gallery">
        <img data-src="images/online1.png" alt="webpage1">
        <img data-src="images/online2.png" alt="webpage2">
        <img data-src="images/online3.png" alt="webpage3">
        <img data-src="images/online4.png" alt="webpage4">
    </div> <!-- .gallery -->

<div class="row">

<div class="pattern col l6 s12">
	<h1>CSC174 Lab01</h1>

	<img src="images/online1.png" alt="webpage1">

	<p>This webpage contains almost every skill earned in CSC 170. All styling CSS are hand-coded. Good readability and W3C school validation. </p>

	<a href="http://www.urcsc170.org/lli42/lab01">Click here to go to the page</a>

</div><!--.pattern-->

<div class="pattern col l6 s12">
	<h1>CSC174 Lab02</h1>

	<img src="images/online2.png" alt="webpage2">

	<p>This webpage is a first-try of a clean, professional looking installation of CSS framework. The CSS framework used for this webpage is "bootstrap", which can create a plain-vanilla look really quick and convenient.</p>

	<a href="http://www.urcsc170.org/lli42/lab03">Click here to go to the page</a>

</div><!--.pattern-->

<div class="pattern col l6 s12">
	<h1>CSC174 Lab09</h1>

	<img src="images/online3.png" alt="webpage3">

	<p>Webpage design follows treading fashions nowdays. The most popular style for a homepage is Z-pattern. Eye-catching giant image and attracting title give no extra information to readers but this clear style is becoming more and more trending.</p>

	<a href="http://www.urcsc170.org/lli42/lab09/">Click here to go to the page</a>

</div><!--.pattern-->

<div class="pattern col l6 s12">
	<h1>CSC174 Project02</h1>

	<img src="images/online4.png" alt="webpage4">

	<p>This project used a bunch of skills learned from CSC 174 and it is made by revising another team's project1. CSS framework, long-scrolly page, javascript powered behaviors, etc.</p>

	<a href="http://www.urcsc170.org/lli42/project02/">Click here to go to the page</a>

</div><!--.pattern-->

</div><!--.row-->


<script>
$( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/mobile-nav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>


<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<!-- portfoliojs (unified with all dependencies) -->
<script src="js/portfolio.pack.min.js"></script>

    <script>

        $(document).ready(function() {
            var p = $("#gallery").portfolio({ logger: true});
            p.init();
        }); // end of ready();

    </script>

</body>

</html>