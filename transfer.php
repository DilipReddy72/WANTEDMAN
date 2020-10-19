//Below php code creates a connection to the file and database.
<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	//This head tag consists the title and the link to the css of this page.
	<title>Transfer Credits</title>
	<link rel="stylesheet" type="text/css" href="transfer1.css">
	
</head>
<body>

	//ALigning every item to the center.
<center>
	<h1>Transfer Credits</h1>


	//Creating a form to transfer the credits.
	<form action="" method="GET">
		<div class="field"><input type="text" name="id" placeholder="ID:" required=""><br>
		<input type="text" name="name"  placeholder="Name:" required=""><br>
		<input type="text" name="credits"  placeholder="Credits:" required=""><br>
	</div>
	<div class="send"><input type="submit" name="submit" value="UPDATE DATA"></div>	
		
	</form>
</center>
	//Creating a link to go back to the users page.
<div class="back"> <a href="Users.php">View Users</a></div>

</body>
</html>

<?php
//This php code updates the entered value from the existed value in the database.
if(isset($_GET['submit'])) {
	$id = $_GET['id'];
	$credits = $_GET['credits'];

	$query = "UPDATE `my database` SET Credits ='$credits' WHERE ID = '$id' ";
	$data = mysqli_query($con,$query);

	if($data) {
		echo "<script>alert('Record Updated')</script>";
	}
	else{
		echo "<script>alert('Record Not Updated')</script>";
	}
}

?>