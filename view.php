<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Teacher<span>Student</span></h1>
		<nav>
		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="../../applicationlayer/teacherstudent.php">Logout</a></li>
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my">My<span class="mys">Appointment</span></h1>

		<?php 
		$sql3="SELECT  * FROM bookapp , teacher   WHERE studentID=('$userprofile') AND  teacherID='$teacherID' "  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["teacherID"]."</td><td>".$row3['teachername']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["subject"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table> -->


	<table class="table2">
		<tr>
		<th>Teacher Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Subject</th>
		

		</tr>
		<?php $sql4="SELECT teacher.teachername,teacher.Address,teacher.ContactNumber,teacher.subject FROM teacher " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["teachername"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["subject"]."</td></tr>";
			}
			echo "</table";
		}

		?>
		
	</table>





</body>
</html>

