<!-- made by knsn 2021.09.10 -->
<!DOCTYPE html> <!-- using HTML5 -->
<html>
<head>
	<title> Login</title>
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
				<h1>LOGIN</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="login_server.php" method="POST">
					<input type="text" name="id" placeholder="ID"
					 style="width: 100%;"/> <br/>
					<input type="password" name="pw" placeholder="PASSWORD"
					 style="width: 100%;"/><br/>
				    <input type="submit" value="login" name="login"
				     style="width: 100%;"/>
				</form>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-4">
				<input type="button" value="Sign Up" id="btn_login"
				 style="width: 100%;" onclick="goSignUp()"/>
			</div>
			<div class="col-4">
				<input type="button" value="Find ID"
				 style="width: 100%;" onclick="goFindID();"/>
			</div>
			<div class="col-4">
				<input type="button" value="Find PW"
				 style="width: 100%;" onclick="goFindPW()"/>
			</div>
		</div>
	</div>
</body>
</html>