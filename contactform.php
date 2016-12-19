<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>CSC174 Project3</title>

    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <script type="text/javascript">
         <!--
            // Form validation code will come here.
            function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }

          if( document.myForm.phone.value == "" )
         {
            alert( "Please provide your Phone number!" );
            document.myForm.phone.focus() ;
            return false;
         }

         {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email address")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
         
      }
         //-->
      </script>

</head>

<body>

    <?php include 'inc/nav.inc'; ?>

    <div class="container">

    <header class="entry">
		<h1>Visitor Contact Entry</h1>
	</header>

		<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate()); return(validateEmail());">

			<div>
			<label for="name"> Name: </label>
				<input type="text" name="name" id="name">
			</div>

			<div>
			<label for="email"> Email: </label>
				<input type="text" name="email" id="email">
			</div>

			<div>
			<label for="phone">Phone number: </label>
				<input type="text" name="phone" id="phone">
			</div>

			<div>
			<label for="message">Message: </label>
			<textarea name="message" id="message"></textarea>
		    </div>

		<input type="submit" value="Send">

		</form>

		<br>

        <div><a href="index.php">Click Here and Go Back</a></div>

    </div><!--.container-->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/menu-highlighter.js"></script>


</body>

</html>