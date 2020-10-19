// All of the code written by S.Dilip Reddy
// This is the index page of Credits Management System.

<!DOCTYPE html>
<html>
<head>
	//The head tag that includes all of the connection to bootstrap and to css of this page.
	<title>Credits Distribution</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Kreon&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

//This code is for the header of the page.	
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#" style="background-color: #007bff;">Credits Management System</a>
    </li>
  </ul>
</nav>

	//This code is to create the box like elements in the content area. Like creating two of them with different classes.
//1st one.	
<div class = "box">
<div class="card" style="width:300px ; height: 450px">
  <img class="card-img-top" src="https://img.freepik.com/free-vector/decorative-social-media-business-blog-users-profile-avatar-trendy-hairstyle-design-icons-collection-isolated-flat-vector-illustration_1284-2399.jpg?size=338&ext=jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Users</h4>
    <p class="card-text">View all of the users</p>
    <a href="Users.php" class="btn btn-primary" style="width: 200px;">Enter
     </a>

  </div>
</div>

//2nd one
<div class="card" style="width:300px ; height: 450px">
  <img class="card-img-top" src="https://image.freepik.com/free-vector/file-transfer-concept-illustration_114360-580.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Transfer Credits</h4>
    <p class="card-text">Exchange your credits</p>
    <a href="transfer.php" class="btn btn-primary" style="width: 200px;">Enter
     </a>

  </div>
</div>
</div>
	

</body>
</html>
