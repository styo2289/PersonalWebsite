<?php
include("function.php");
$dblink = db_connect("contact_data");
$sql = "Select * from `contact_info`";
$results = $dblink->query($sql) or 
	die("<h2>Somethign went wrong with $sql<br>".$dblink->error."</h2>");

echo '<div class="text-center">';
echo '<div class="page-header">';
echo '<h1 id="Home">Database Entries</h1>';
echo '</div>';
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Auto ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Username</th><th>Password</th><th>Comments</th>';
echo '</tr';
echo '</thead>';
echo '<tbody>';
while($info=$results->fetch_array(MYSQLI_ASSOC)){
	
	echo "<tr>"; 
	echo '<td>'.$info['auto_id'].'</td>';
	echo '<td>'.$info['first_name'].'</td>'; 
	echo '<td>'.$info['last_name'].'</td>'; 
	echo '<td>'.$info['email'].'</td>';
	echo '<td>'.$info['phone'].'</td>';
	echo '<td>'.$info['username'].'</td>';
	echo '<td>'.$info['password'].'</td>';
	echo '<td>'.$info['comments'].'</td>';
	echo "</tr>";
}
echo '</tbody>';
echo '</table>';
echo '</div>';
?>