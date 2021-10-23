<!-- made by knsn 2021.09.10 -->
<!DOCTYPE html> <!-- using HTML5 -->
<html>

<head>
	<title> Sign Up </title>
	<!-- unicode 8 bit -->
	<meta charset="utf-8">
	<!-- react web -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- import css -->
	<link rel="stylesheet" type="text/css" href="../css/style-login.css?after" />
	<!-- import js-->
	<script src="../js/script.js"></script> 
</head>

<body>
	<div class="box">
		<!-- main box -->
		<div class="row">
			<div class="col-12">
				<!-- box title -->
				<h1>SIGN UP</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- 보안 전송 -->
				<form action="signUp_server.php" method="POST">
					<!-- 회원가입 종류 -->
					<input type="text" name="id" placeholder="PUT ID" style="width: 100%;" /> <br />
					<input type="password" name="pw" placeholder="PUT PASSWORD" style="width: 100%;" /><br />
					<input type="password" name="checkpw" placeholder="CONFIRM PASSWORD" style="width: 100%;" /><br />
					<input type="text" name="email" placeholder="PUT e-mail address" style="width: 100%;" /><br />
					<input type="submit" value="Make " style="width: 45%;"/>
					<input type="button" value="GO Login" style="width: 45%;" onclick="goLogin()"/> </br>
				</form>
			</div>
		</div>
	</div>
</body>

</html>