<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","project");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['Register'])){

	$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$Address 	= $mysqli -> real_escape_string($_POST['Address']);
	$ContactNumber= $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
    
	if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($Address)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}
if(count($errors)==0){
	$Password=md5($Password);

	$sql = "INSERT INTO  student (UserID, Name, Address, ContactNumber, Email, Password) VALUES ('$UserID','$Username','$Address','$ContactNumber','$Email','$Password') ";
    
	if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
    
 
}
    if(move_uploaded_file($_FILES[''])){


  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/student/index.php');


}
	


	# code...
}

}


if (isset($_POST['Login'])) {

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['password']);
if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

		$Password=md5($Password);
		
	

	$query="SELECT * FROM student WHERE UserID=('$UserID')AND Password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows($result) ==1 )  {
	
	

	
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/student/index.php');
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	# code...


if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}


	if (isset($_GET['My info'])) {
	header('location:login.php');
	}



	$userprofile=isset($_SESSION['UserID']);
$query="SELECT * FROM student WHERE UserID=('$userprofile')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);


 if (isset($_POST['Login2'])) {

		$TeacherID2	= $mysqli -> real_escape_string($_POST['teacherID']);
		$TeacherPassword2= $mysqli -> real_escape_string($_POST['teacherpassword']);
if (empty($TeacherID2)) {
	array_push($errors,"Teacher ID is required");
	# code...
}
if (empty($TeacherPassword2)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryD="SELECT * FROM teacher WHERE teacherID=('$TeacherID2')AND password=('$TeacherPassword2')";
	$resultD=mysqli_query($mysqli,$queryD);
	if (mysqli_num_rows($resultD) ==1 )  {
	
	

	
	$_SESSION['teacherID']=$TeacherID2;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentaionlayer/teacher/index2.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}




$teacherprofile=isset($_SESSION['teacherID']);
$queryteacher="SELECT * FROM teacher WHERE teacherID=('$teacherprofile')";
 $resultteacher= mysqli_query($mysqli, $queryteacher);
 $colD= mysqli_fetch_assoc($resultteacher);


 if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}


 $mysqli -> close();
 ?>