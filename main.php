<?php
$pageValue = $_GET['page']; // This get the file name
$arrayOfPages = array("fileName1","fileName2","fileName3"); // these are the content files for your page
															// Type the names of those files here
if (in_array($pageValue,$arrayOfPages)) // Checks if the $pageValue is in the  $arrayOfPages 
										// If it is then it's called. If not the default is called
										// When you just  do go to your website ie not a specific page
										// it goes to default because $pageValue is null.
{
        require_once( $pageValue.".php");
}
else
{
        require_once( "fileName1.php");
}
?>
