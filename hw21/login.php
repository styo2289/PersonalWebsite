<?php
include("function.php");
session_start();
if(!isset($_POST['submit'])){
	echo '<div class="text-center">';
	echo '<div class="page-header">';
	echo '<h1 id="Home">Please Login to your account.</h1>';
	echo '</div>';
	echo '<div class="col-md-4 col-md-offset-4">';
	echo '<div class="panel panel-default">';
	echo '<form method="post" action="">';
	
	if(isset($_GET['usernameErr'])){
		echo '<div class="form-group has-error">';
		echo '<label class="control-label">Username:</label>';
		echo '<input  name="username" type="text" class="form-control">';
		echo '<div id="unFeedback"></div>';
		echo '<span class="help-block" id="usernameStatus">Username cannot be null.</span>';
		echo '</div>';
	}	
	else{
		if(isset($_SESSION['username'])){
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
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
else {
	$errors=array();
	$username = $_POST['username'];
	if($username == NULL){
		$errors[]="usernameErr=null";
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
		redirect("index.php?page=Login&$errorString");
		//echo '<div class="panel-body"><h2>Data sent to database!</h2></div>';
	}
	
	$salt = "Winston24";
	$hash = hash('sha256',$username.$password.$salt);

	$dblink = db_connect("contact_data");
	$sql = "Select `auto_id` from `accounts` where hash='$hash'";
	$result = $dblink->query($sql) or
		die("<h2>Somethign went wrong with $sql<br>".$dblink->error."</h2>");
	
	if($result->num_rows > 0){
		$data = $result->fetch_array(MYSQLI_ASSOC);
		$SIDsalt = microtime();
		$sid = hash('sha256', $hash.$SIDsalt);
		$sql = "Update `accounts` set `session_id`='$sid' where `auto_id`='$data[auto_id]'";
		$dblink->query($sql) or
			die("<h2>Somethign went wrong with $sql<br>".$dblink->error."</h2>");
		redirect("index.php?page=Results&sid=$sid");
	}
	else {
		redirect("index.php?page=Login&error=authError");
	}
}

//echo '<div class="form-group">';
//echo '<label class="control-label">Username:</label>';
//echo '<input  name="username" type="text" class="form-control">';
//echo '<div id="unFeedback"></div>';
//echo '</div>';
//
//echo '<form method="post" action="">';
//echo '<div class="form-group">';
//echo '<label class="control-label">Password:</label>';
//echo '<input  name="password" type="password" class="form-control">';
//echo '<div id="pwFeedback"></div>';
//echo '</div>';


?>