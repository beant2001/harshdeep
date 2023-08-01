<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	<link rel="stylesheet"  href="style3.css">

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


	
<form method="post" action="searchstudent.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Student ID</label>
		<label style="font-weight: bold">*Student Name</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Student Information</caption>>

		<tr>
		<th>StudentID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<!--<th>BloodGroup</th>-->


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  student   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>";
			}


			echo "</table";
	


		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchP'])) {

         ?>	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Tution History</caption>>
		<tr>
		<th>StudentID</th>
		<th>StudentName</th>
		<th>Subject</th>
		<th>Teacher's Note</th>	


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["subject"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table>";
	


		}
	}?>
 </table>
	


</body>
</html>

