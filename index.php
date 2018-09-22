<?php
$pageName = "test Site";
print"
<!DOCTYPE html>
	<head>
		<meta http-equiv=\"content-type\" content=\"text/html\" charset=\"UTF-8\" />
		<meta charset=\"UTF-8\" />
		<meta name = \"viewport\" content=\"width=device-width,initial-scale=1\">
		<meta name=\"author\" content=\"$pageName\" />
		<title>$pageName</title>";

require'headerBackend.php';// This file calls all of the css files 
						   //and libraries that are necessary for this page
?>
	</head>
	<body>
			<?php
				require 'headerFrontend.php'; // This contains the  physical header for each page. 
											  // You can think about it as being static in its contents
			?>
			<?php
				require 'main.php'; //This contains logical statements 
									//to determine which content should be shown
			?>
 
			<?php
				require "footer.php";//This is similar to the headerFrontend in its static nature.
									 //That's not to say that it can't be dynamic based on what 
									 //page you're on, but only that I haven't done that because
									 // I don't have a reason to do so. Making it "dynamic"
									 // in this sense would just involved using code similar to
									 // main.php.
			?>
	</body>
</html>
