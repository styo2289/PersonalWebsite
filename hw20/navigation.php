<?php
echo'<nav class="navbar navbar-default">';
echo'<div class="container">';
echo'<div class="navbar-header">';
echo'<a class="navbar-brand" href="index.php">ST</a>';
echo'</div>';
echo'<ul class="nav nav-tabs">';
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
	case "School_Info":
		echo'<li role="presentation"><a href="index.php">Home</a></li>';
		echo'<li role="presentation" class="active"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
		break;
	case"Hobbies":
		echo'<li role="presentation"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation" class="active"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
		break;
	case"Work_Info":
		echo'<li role="presentation"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation" class="active"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
		break;
	case"Contact":
		echo'<li role="presentation"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation" class="active"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
		break;
	case"Results":
		echo'<li role="presentation"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation" class="active"><a href="index.php?page=Results">Results</a></li>';
		break;
	default:
		echo'<li role="presentation" class="active"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
		break;
	}
}
else{
	echo'<li role="presentation" class="active"><a href="index.php">Home</a></li>';
		echo'<li role="presentation"><a href="index.php?page=School_Info">School info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Hobbies">Hobbies</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Work_Info">Work info</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Contact">Contact</a></li>';
		echo'<li role="presentation"><a href="index.php?page=Results">Results</a></li>';
}

echo'</ul>';

echo'</div>';
echo'</nav>';
?>