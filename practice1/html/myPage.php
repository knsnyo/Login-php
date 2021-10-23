<!-- made by knsn 2021.09.10 -->
<?php
// 전역 변수 사용할 것
session_start();
?>

<!DOCTYPE html> <!-- using HTML5 -->
<html>
<head>
	<title> MY PAGE </title>
	<!-- unicode 8 bit -->
	<meta charset="utf-8">
	<!-- react web -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- import css -->
	<link rel="stylesheet" type="text/css" href="../css/style-login.css?after"/>
	<!-- import js-->
	<script src="../js/script.js"></script> 
</head>
<body>
	<div class="box"> <!-- main box -->
		<div class="row">
			<div class= "col-12"> <!-- box title -->
				<h1>MY PAGE</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="logout_server.php" method="POST">
                    <p> <?php echo $_SESSION['id']; ?> </p>
				    <input type="submit" value="logout" name="logout"
				     style="width: 100%;"/>
				    <input type="submit" value="withdrawal" name="withdrawal"
				     style="width: 100%;"/>
				</form>
			</div>
		</div>
	</div>
</body>
</html>