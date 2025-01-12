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
						<li role="presentation" class="active"><a href="Contact.php">Contact</a></li>
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
						<?php
							session_start();
							if(!isset($_POST['submit'])){
								echo '<div class="panel-body">Please feel free to contact me if you have 		any questions.</div>';
								echo '<form action="" method="post">';
								
								if(isset($_GET['fnameErr'])){
									if($_GET['fnameErr'] == "null"){
										echo'<div class="form-group has-error" id="firstNameGroup">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" id="firstName" name="firstName">
										<span class="help-block" id="firstNameStatus">First Name cannot be null.</span>
									</div>';
									}
									elseif($_GET['fnameErr'] == "invalid"){
										echo'<div class="form-group has-error" id="firstNameGroup">';
										echo'<label class="control-label">First Name</label>';
										echo'<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
										echo'<span class="help-block" id="firstNameStatus">First Name is invalid.</span>';
										echo'</div>';
									}
								}
								else{
									
									if(isset($_SESSION['firstname'])){
										echo'<div class="form-group has-success" id="firstNameGroup">';
										echo '<label class="control-label">First Name</label>';
										echo '<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
										echo'<span class="help-block" id="firstNameStatus"></span>';
										echo'</div>';
									}
									else{
										echo'<div class="form-group" id="firstNameGroup">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" id="firstName" name="firstName">
										<span class="help-block" id="firstNameStatus"></span>
									</div>';
									}
									
								}
								//---------------
								if(isset($_GET['lnameErr'])){
									if($_GET['lnameErr'] == "null"){
										echo '<div class="form-group has-error" id="lastNameGroup">';
										echo'<label class="control-label">Last Name</label>';
										echo'<input type="text" class="form-control" id="lastName" name="lastName">';
										echo'<span class="help-block" id="lastNameStatus">Last Name cannot be null.</span>';
										echo'</div>';
									}
									else if($_GET['lnameErr'] == "invalid"){
										echo '<div class="form-group has-error" id="lastNameGroup">';
										echo'<label class="control-label">Last Name</label>';
										echo'<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
										echo'<span class="help-block" id="lastNameStatus">Last Name is invalid.</span>';
										echo'</div>';
									}
									
								}
								else{
									
									if(isset($_SESSION['lastName'])){
										echo '<div class="form-group has-success" id="lastNameGroup">';
										echo'<label class="control-label">Last Name</label>';
										echo'<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
										echo'<span class="help-block" id="lastNameStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="lastNameGroup">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" id="lastName" name="lastName">
										<span class="help-block" id="lastNameStatus"></span>
									</div>';
									}
								}
								//---------------
								if(isset($_GET['emailErr'])){
									if($_GET['emailErr'] == "null"){
										echo '<div class="form-group has-error" id="emailGroup">
											<label class="control-label">Email</label>
											<input type="text" class="form-control" id="email" name="email">
											<span class="help-block" id="emailStatus">Email cannot be null.</span>
										</div>';
									}
									else if($_GET['emailErr'] == "invalid"){
										echo '<div class="form-group has-error" id="emailGroup">';
										echo'<label class="control-label">Email</label>';
										echo'<input type="text" class="form-control" id="email" name="email" value="'.$_SESSION['email'].'">';
										echo'<span class="help-block" id="emailStatus">Email is invalid.</span>';
										echo'</div>';
									}
									
								}
								else{
									if(isset($_SESSION['email'])){
										echo '<div class="form-group has-success" id="emailGroup">';
										echo'<label class="control-label">Email</label>';
										echo'<input type="text" class="form-control" id="email" name="email" value="'.$_SESSION['email'].'">';
										echo'<span class="help-block" id="emailStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="emailGroup">
										<label class="control-label">Email</label>
										<input type="text" class="form-control" id="email" name="email">
										<span class="help-block" id="emailStatus"></span>
									</div>';
									}
								}
								//---------------
								if(isset($_GET['phoneNumberErr'])){
									if($_GET['phoneNumberErr'] == "null"){
										echo '<div class="form-group has-error" id="phoneNumberGroup">
											<label class="control-label">Phone Number</label>
											<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
											<span class="help-block" id="phoneNumberStatus">Phone Number cannot be null.</span>
										</div>';
									}
									else if($_GET['phoneNumberErr'] == "invalid"){
										echo '<div class="form-group has-error" id="phoneNumberGroup">';
										echo'<label class="control-label">Phone Number</label>';
										echo'<input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="'.$_SESSION['phoneNumber'].'">';
										echo'<span class="help-block" id="phoneNumberStatus">Phone Number must contain <i>only</i> 10 digits.</span>';
										echo'</div>';
									}
								}
								else{
									if(isset($_SESSION['phoneNumber'])){
										echo '<div class="form-group has-success" id="phoneNumberGroup">';
										echo'<label class="control-label">Phone Number</label>';
										echo'<input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="'.$_SESSION['phoneNumber'].'">';
										echo'<span class="help-block" id="phoneNumberStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="phoneNumberGroup">
										<label class="control-label">Phone Number</label>
										<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
										<span class="help-block" id="phoneNumberStatus"></span>
									</div>';
									}
								}
								//---------------
								if(isset($_GET['usernameErr'])){
									echo '<div class="form-group has-error" id="usernameGroup">
											<label class="control-label">Username</label>
											<input type="text" class="form-control" id="username" name="username">
											<span class="help-block" id="usernameStatus">Username cannot be null.</span>
										</div>';
								}	
								else{
									if(isset($_SESSION['username'])){
										echo '<div class="form-group has-success" id="usernameGroup">';
										echo'<label class="control-label">Username</label>';
										echo'<input type="text" class="form-control" id="username" name="username" value="'.$_SESSION['username'].'">';				echo'<span class="help-block" id="usernameStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="usernameGroup">
										<label class="control-label">Username</label>
										<input type="text" class="form-control" id="username" name="username">
										<span class="help-block" id="usernameStatus"></span>
									</div>';
									}
								}
								//---------------
								if(isset($_GET['passwordErr'])){
									echo '<div class="form-group has-error" id="passwordGroup">
											<label class="control-label">Password</label>
											<input type="password" class="form-control" id="password" name="password">
											<span class="help-block" id="passwordStatus">Password cannot be null.</span>
										</div>';
								}
								else{
									if(isset($_SESSION['password'])){
										echo '<div class="form-group has-success" id="passwordGroup">';
										echo'<label class="control-label">Password</label>';
										echo'<input type="password" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'">';
										echo'<span class="help-block" id="passwordStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="passwordGroup">
										<label class="control-label">Password</label>
										<input type="password" class="form-control" id="password" name="password">
										<span class="help-block" id="passwordStatus"></span>
									</div>';
									}
								}
								//---------------
								if(isset($_GET['commentsErr'])){
									echo '<div class="form-group has-error" id="commentsGroup">
											<label class="control-label">Comments</label>
											<input type="text" class="form-control" id="comments" name="comments">
											<span class="help-block" id="commentStatus">Comments cannot be null.</span>
										</div>';
								}
								else{
									if(isset($_SESSION['comments'])){
										echo '<div class="form-group has-success" id="commentsGroup">';
										echo'<label class="control-label">Comments</label>';
										echo'<input type="text" class="form-control" id="comments" name="comments" value="'.$_SESSION['comments'].'">';
										echo'<span class="help-block" id="commentStatus"></span>';
										echo'</div>';
									}
									else{
										echo '<div class="form-group" id="commentsGroup">
										<label class="control-label">Comments</label>
										<input type="text" class="form-control" id="comments" name="comments">
										<span class="help-block" id="commentStatus"></span>
									</div>';
									}
								}
								//---------------
								echo '<button class="btn btn-default" type="submit" name="submit">Submit</button>
									</form>
									<hr>';
							}
							else{
								$errors=array();
								
								$firstName = $_POST['firstName'];
								if($firstName == NULL){
									$errors[]="fnameErr=null";
								}
								else if(!preg_match('/^[a-zA-Z\'-]+$/', $firstName)){
									$errors[]="fnameErr=invalid";
									$_SESSION['firstName'] = $firstName;
								}
								else{
									$_SESSION['firstName'] = $firstName;
								}
								//---------------
								$lastName = $_POST['lastName'];
								if($lastName == NULL){
									$errors[]="lnameErr=null";
								}
								else if(!preg_match('/^[a-zA-Z\'-]+$/', $lastName)){
									$errors[]="lnameErr=invalid";
									$_SESSION['lastName'] = $lastName;
								}
								else{
									$_SESSION['lastName'] = $lastName;
								}
								//---------------
								$email = $_POST['email'];
								if($email == NULL){
									$errors[]="emailErr=null";
								}
								else if(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)){
									$errors[]="emailErr=invalid";
									$_SESSION['email'] = $email;
								}
								else{
									$_SESSION['email'] = $email;
								}
								//---------------
								$phoneNumber = $_POST['phoneNumber'];
								if($phoneNumber == NULL){
									$errors[]="phoneNumberErr=null";
								}
								else if(!preg_match('/^\d{10}$/', $phoneNumber)){
									$errors[]="phoneNumberErr=invalid";
									$_SESSION['phoneNumber'] = $phoneNumber;
								}
								else{
									$_SESSION['phoneNumber'] = $phoneNumber;
								}
								//---------------
								$username = $_POST['username'];
								if($username == NULL){
									$errors[]="usernameErr=null";
								}
								else{
									$_SESSION['username'] = $username;
								}
								//---------------
								$password = $_POST['password'];
								if($password == NULL){
									$errors[]="passwordErr=null";
								}
								else{
									$_SESSION['password'] = $password;
								}
								//---------------
								$comments = $_POST['comments'];
								if($comments == NULL){
									$errors[]="commentsErr=null";
								}
								else{
									$_SESSION['comments'] = $comments;
								}
								//---------------
								if(count($errors) > 0){
									$errorString = implode("&", $errors);
									header("Location: Contact.php?$errorString");
								}
								
								else{
									echo '<div class="panel-body">
										Please feel free to contact me if you have any questions.
									</div>';
									echo "<h3>First Name: $firstName</h3>";
									echo "<h3>Last Name: $lastName</h3>";
									echo "<h3>Email: $email</h3>";
									echo "<h3>Phone Number: $phoneNumber</h3>";
									echo "<h3>Username: $username</h3>";
									echo "<h3>Password: $password</h3>";
									echo "<h3>Comments: $comments</h3>";
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>