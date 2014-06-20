<?php 

mail ( "katie.elizabeth.williams@gmail.com" , 
		"Signup Request",
		"New message from the website:

		Name: ".$_GET['name']."
		e-mail: ".$_GET['e-mail']."
		School: ".$_GET ['School']."
		Interests: ".implode(", ", $_GET['Interests'])."


		Kind regards, 

		Rise of Code");


header("Location: signup_success.html");