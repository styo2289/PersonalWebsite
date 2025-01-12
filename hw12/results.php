<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Summer's homepage!</title>
		<!--<link href="Assets/css/pages.css" rel="stylesheet"/>-->
		<link href="Assets/css/bootstrap.css" rel="stylesheet"/>
	</head>
	<body class="body">
		<div>
		<!--CAT HEADER IMAGE-->
			<div>
				<p align="center">
				<img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fclipart-library.com%2Fimages%2F6Tp5angkc.png&f=1&nofb=1&ipt=1b332dcef6e97b4ee784ca46b2dacc2da6022b807c7107540b86dd8d7ed87035&ipo=images" width="300" height="150" alt="Cat header image">
				</p>
			</div>
		<!--TOP NAVIGATION BAR-->
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">ST</a>
					</div>
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="index.html">Home</a></li>
						<li role="presentation" class="active"><a href="School_Info.html">School info</a></li>
						<li role="presentation" class="active"><a href="Hobbies.html">Hobbies</a></li>
						<li role="presentation" class="active"><a href="Work_Info.html">Work info</a></li>
						<li role="presentation" class="active"><a href="Contact.html">Contact</a></li>
					</ul>
				</div>
			</nav>
		<!--CONTACT INFO-->
			<div class="text-center">
				<div class="page-header">
					<h1 id="Home">Contact Me</h1>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-body">
							Contact Form Results
						</div>
						<?php
							$firstName = $_GET['firstName'];
							$lastName = $_GET['lastName'];
							$email = $_GET['email'];
							$phoneNumber = $_GET['phoneNumber'];
							$username = $_GET['username'];
							$password = $_GET['password'];
							$comments = $_GET['comments'];
							$submit = $_GET['submit'];
						
							if(isset($submit)){
								echo "<h3>First Name: $firstName</h3>";
								echo "<h3>Last Name: $lastName</h3>";
								echo "<h3>Email: $email</h3>";
								echo "<h3>Phone Number: $phoneNumber</h3>";
								echo "<h3>Username: $username</h3>";
								echo "<h3>Password: $password</h3>";
								echo "<h3>Comments: $comments</h3>";
							}
							else {
								echo "<h3>Please fill out the form on the contact page. </h3>";
							}
						
							
						?>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script src="Assets/js/contactform.js"></script>