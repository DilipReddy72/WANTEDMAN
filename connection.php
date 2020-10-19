
//Below php code establishes the connection between the file and the database.

<?php
	// Assigning the database values to the separate variables.
	$username = "root";
	$password = "";
	$server = 'localhost';
	$db = "credits";	
	
	//Creating a connection.
	$con = mysqli_connect($server,$username,$password,$db);

	if ($con) {
		// echo "Connection Successful";
	?>
		
	<?php
	}else{
		echo "No connection";
	}

?>
