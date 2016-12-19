//	*****************************
//	Prep...
//	*****************************
// This script depends on jQuery; put this in your HTML file...
// 	<script src="http://code.jquery.com/jquery.js"></script>
// 
// And then link to this JS file too...
// 	<script src="js/menu-highlighter.js"></script>

// Also, this script assumes you created some CSS to style the ".current" class
// Put something like this in your CSS...
// 	.current {
// 		background-color: black;
// 		color: white;
// 	}


//	*****************************
//	The way this works...
//	*****************************
// Step 1: grab the current "location" (URL) of this webpage and put it in a variable
var currentPage=document.location.href;

// Step 2: check each anchor in the navigation element (btw - did you code your HTML like this?)...
$("nav a").each(function() {

	// Step 2a: if there's a match...
	if (currentPage.indexOf(this.href) > -1) {

		// Step 2a-a: then add the "current" class to the anchor
		$(this).addClass("current");
	}
});