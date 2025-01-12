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
						Please feel free to contact me if you have any questions.
						</div>
						<form action="results.php" method="get">
						<div class="form-group" id="firstNameGroup">
						  	<label class="control-label">First Name</label>
						  	<input type="text" class="form-control" id="firstName" name="firstName">
							<span class="help-block" id="firstNameStatus"></span>
						</div>
						<div class="form-group" id="lastNameGroup">
						  	<label class="control-label">Last Name</label>
						  	<input type="text" class="form-control" id="lastName" name="lastName">
							<span class="help-block" id="lastNameStatus"></span>
						</div>
						<div class="form-group" id="emailGroup">
						  	<label class="control-label">Email</label>
						  	<input type="text" class="form-control" id="email" name="email">
							<span class="help-block" id="emailStatus"></span>
						</div>
						<div class="form-group" id="phoneNumberGroup">
						  	<label class="control-label">Phone Number</label>
						  	<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
							<span class="help-block" id="phoneNumberStatus"></span>
						</div>
						<div class="form-group" id="usernameGroup">
						  	<label class="control-label">Username</label>
						  	<input type="text" class="form-control" id="username" name="username">
							<span class="help-block" id="usernameStatus"></span>
						</div>
						<div class="form-group" id="passwordGroup">
						  	<label class="control-label">Password</label>
						  	<input type="password" class="form-control" id="password" name="password">
							<span class="help-block" id="passwordStatus"></span>
						</div>
						<div class="form-group" id="commentsGroup">
						  	<label class="control-label">Comments</label>
						 	<input type="text" class="form-control" id="comments" name="comments">
							<span class="help-block" id="commentStatus"></span>
						</div>
							<button class="btn btn-default" type="submit" name="submit">Submit</button>
						</form>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script src="Assets/js/contactform.js"></script>