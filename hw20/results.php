<script src="Assets/js/jquery-3.5.1.js"></script>
<?php
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
echo '<tbody id="results">';

echo '</tbody>';
echo '</table>';
echo '</div>';
?>

<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-142-248-42.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){refresh_data();}, 500);
</script>