<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link href="Assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<?php
	include("function.php");
		//TODO: ERROR CHECKING FOR REGISTER. Must check for pre-existing account. if account exists
		//redirect to self, and display error message. 
		//if unique account, direct to login page with success message
		session_start();
		if(!isset($_POST['submit'])){
			echo '<h2>Please fill out the following form:</h2>';
			echo '<form method="post" action="">';
			
			if(isset($_GET['usernameErr'])){
				if($_GET['usernameErr'] == "duplicate"){
					echo '<div class="form-group has-error">';
					echo '<label class="control-label">Username:</label>';
					echo '<input  name="username" type="text" class="form-control">';
					echo '<div id="unFeedback"></div>';
					echo '<span class="help-block" id="usernameStatus">Username already exists.</span>';
					echo '</div>';
				}
				else {
					echo '<div class="form-group has-error">';
					echo '<label class="control-label">Username:</label>';
					echo '<input  name="username" type="text" class="form-control">';
					echo '<div id="unFeedback"></div>';
					echo '<span class="help-block" id="usernameStatus">Username cannot be null.</span>';
					echo '</div>';
				}
//				echo '<div class="form-group has-error" id="usernameGroup">
//						<label class="control-label">Username</label>
//						<input type="text" class="form-control" id="username" name="username">
//						<span class="help-block" id="usernameStatus">Username cannot be null.</span>
//					</div>';
				
			}	
			else{
				if(isset($_SESSION['username'])){
//					echo '<div class="form-group has-success" id="usernameGroup">';
//					echo'<label class="control-label">Username</label>';
//					echo'<input type="text" class="form-control" id="username" name="username" value="'.$_SESSION['username'].'">';				echo'<span class="help-block" id="usernameStatus"></span>';
//					echo'</div>';
					
					echo '<div class="form-group has-success">';
					echo '<label class="control-label">Username:</label>';
					echo '<input  name="username" type="text" class="form-control" value="'.$_SESSION['username'].'">';
					echo '<div id="unFeedback"></div>';
					echo '</div>';
				}
				else{
					echo '<div class="form-group">';
					echo '<label class="control-label">Username:</label>';
					echo '<input  name="username" type="text" class="form-control">';
					echo '<div id="unFeedback"></div>';
					echo '</div>';
				}
			}
			//---------------
			if(isset($_GET['passwordErr'])){
				
				echo '<form method="post" action="">';
				echo '<div class="form-group has-error">';
				echo '<label class="control-label">Password:</label>';
				echo '<input  name="password" type="password" class="form-control">';
				echo '<div id="pwFeedback"></div>';
				echo '<span class="help-block" id="passwordStatus">Password cannot be null.</span>';
				echo '</div>';
			}
			else{
				if(isset($_SESSION['password'])){
//					echo '<div class="form-group has-success" id="passwordGroup">';
//					echo'<label class="control-label">Password</label>';
//					echo'<input type="password" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'">';
//					echo'<span class="help-block" id="passwordStatus"></span>';
//					echo'</div>';
					
					echo '<form method="post" action="">';
					echo '<div class="form-group has-success">';
					echo '<label class="control-label">Password:</label>';
					echo '<input  name="password" type="password" class="form-control" value="'.$_SESSION['password'].'">';
					echo '<div id="pwFeedback"></div>';
					echo '</div>';
				}
				else{
					echo '<form method="post" action="">';
					echo '<div class="form-group">';
					echo '<label class="control-label">Password:</label>';
					echo '<input  name="password" type="password" class="form-control">';
					echo '<div id="pwFeedback"></div>';
					echo '</div>';
				}
			}
			
			echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
			echo '</form>';
		}
		else {
			$errors=array();
			
			$username = $_POST['username'];
			$dblink = db_connect("contact_data");
			$userSelect = "Select `username` from `accounts` where username='$username'";
			$results = $dblink->query($userSelect) or
				die("<h2>Somethign went wrong with $sql<br>".$dblink->error."</h2>");
			if($username == NULL){
				$errors[]="usernameErr=null";
			}
			else if($results->num_rows > 0){
				$errors[]="usernameErr=duplicate";
			}
			else{
				$_SESSION['username'] = $username;
			}
			$password = $_POST['password'];
			if($password == NULL){
				$errors[]="passwordErr=null";
			}
			else{
				$_SESSION['password'] = $password;
			}
			
			if(count($errors) > 0){
				$errorString = implode("&", $errors);
				//header("Location: Contact.php?$errorString");
				redirect("register.php?$errorString");
				//echo '<div class="panel-body"><h2>Data sent to database!</h2></div>';
			}
			else {
				$salt = "Winston24";
				$hash = hash('sha256',$username.$password.$salt);
				$dblink = db_connect("contact_data");
				$sql = "Insert into `accounts` (`username`, `hash`) values ('$username', '$hash')";

				$dblink->query($sql) or 
					die("<h2>Somethign went wrong with $sql<br>".$dblink->error."</h2>");
				redirect("index.php?page=Login");
				
			}
		}
		
	?>
</body>
</html>