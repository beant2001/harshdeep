<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >Teacher<span>Student</span></h1>
		<nav>
	
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchstudent.php">Search Student</a></li>
			<li><a href="../../applicationlayer/teacherstudent.php">Logout</a></li>
			

		</ul>
		



	</nav>

</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">

<div class="Dcontent">


	<label>ID: <?php echo $_SESSION['teacherID'];?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['teachername']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Subject : <?php echo $colD['subject']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   
	
</div>
</form>
</body>
</html>