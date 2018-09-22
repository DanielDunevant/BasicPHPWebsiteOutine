<?php
// as you can see links work a bit differently in this set up. Usually we call a specific file
// in this case we always  call index.php but then we set the page value as well. This how 
// main.php gets its information. 
print"
	<p id =\"footerLinks\">
		<a class=\"footerLinks\" href=\"index.php?page=fileName1\">Home</a> |
		<a class=\"footerLinks\" href=\"index.php?page=fileName2\">About</a> |
		<a class=\"footerLinks\" href=\"index.php?page=fileName3\">Services</a> |
		<a class=\"footerLinks\" href=\"index.php?page=fileName4\">Contact</a>
	</p>
</div>

	<section id = \"footerLower\">
		<section class=\"id\">
			<p id = \"contactTxt\">Contact us at: support@novaytechnologies.com</p>
			<p id = \"copyrightTxt\">Copyright &copy; date -  Website name</p>
		</section>
	</section>";
?>
