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
						<a class="navbar-brand" href="index.php">ST</a>
					</div>
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="index.php">Home</a></li>
						<li role="presentation" class="active"><a href="index.php?page=School_Info">School info</a></li>
						<li role="presentation" class="active"><a href="index.php?page=Hobbies">Hobbies</a></li>
						<li role="presentation" class="active"><a href="index.php?page=Work_Info">Work info</a></li>
						<li role="presentation" class="active"><a href="index.php?page=Contact">Contact</a></li>
					</ul>
				</div>
			</nav>
		<!--ABOUT ME-->
			<?php
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				switch($page){
					case "School_Info":
						include("School_Info.php");
						break;
					case "Hobbies":
						include("Hobbies.php");
						break;
					case "Work_Info":
						include("Work_Info.php");
						break;
					case "Contact":
						include("Contact.php");
						break;
					default:
						include("Home.php");
						break;
				}
			}
			else {
				include("Home.php");
			}

			?>
		</div>
	</body>
</html>
