<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Teacher<span>Student</span></h1>
		<nav>
		<ul> 
			
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchstudent.php">Search Student</a></li>
			<li><a href="../../applicationlayer/teacherstudent.php">Logout</a></li>
		</ul>
		
	</nav>

</header>

<body>
	<h1 class="my1">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>StudentID</th>
		<th>StudentName</th>
		<th>StudentAddress</th>
		<th>StudentEmail</th>
		<th>StudentContactNumber</th>
		</tr>
		<?php $sqlteacher="SELECT  * FROM bookapp , student   WHERE teacherID=('$teacherprofile') AND  studentID='$userprofile' "  ;
		$resultteacher=$mysqli->query($sqlteacher);
		if(mysqli_num_rows($resultteacher)>= 1){
			while ($rowteacher=$resultteacher->fetch_assoc()) {

				echo "<tr><td>".$rowteacher["AppoID"]."</td><td>".$rowteacher["Date"]."</td><td>".$rowteacher["Time"]."</td><td>".$rowteacher["UserID"]."</td><td>".$rowteacher['Name']."</td><td>".$rowteacher['Address']."</td><td>".$rowteacher['Email']."</td><td>".$rowteacher["ContactNumber"]."</td><td>";
			}
			echo "</table";

		}

		?>
		
	</table>





</body>
</html>

