// The below php code to get connection to database using the connection.php file where the connection establishment happened.

<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	//This head tag consists of title and the link to the css of this page.
	<title>Users List</title>
	<link rel="stylesheet" type="text/css" href="users.css">
	
</head>
<body>
	//Heading in the content.
	<div><h1>List of Users</h1></div>
//Wrapping up the table in a container.
<div class="filter">
	//Creating a table.
			<table border="0" cellspacing="0" cellpadding="0">
				//Creating Column headilngs.
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Gmail</th>
					<th>Credits</th>
				</tr>	
				//This php code is to retrieve data from the database and place them in the table along with css.
				<?php
					$sql = "SELECT * FROM `my database`";
					$retr = $con -> query($sql);

					if ($retr -> num_rows > 0) {
						while($row = $retr -> fetch_assoc()){
							echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Gmail"]."</td><td>".$row["Credits"]."</td><td>";

						}
						echo "</table>";
					}
					else{
						echo "0 result";
					}
				?>
			</table>
	//These two links takes you to the transfer of credits page and another to the index page.
			<div class="change"><a href="transfer.php">Transfer Credits</a></div>
			<div class="back"><a href="MainPage.php">Back</a></div>
</div>




</body>
</html>