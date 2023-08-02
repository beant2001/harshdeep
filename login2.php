<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Teacher Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>Teacher ID</label>
		<input type="text" name="teacherID">

	</div>
	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="teacherpassword">
	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>
</form>
</body>
</html>