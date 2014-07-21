<?php 

mail ( "katie.elizabeth.williams@gmail.com" , 
		"Signup Request",
		"New message from the website:

		Name: ".$_GET['name']."
		e-mail: ".$_GET['email']."
		School: ".$_GET ['school']."
		Age: ".$_GET['age']."


		Kind regards, 

		Rise of Code");


header("Location: http://www.eventbrite.com/o/rise-of-code-6585748783");
