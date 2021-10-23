<!-- made by knsn 2021.09.10 -->
<!DOCTYPE html> <!-- using HTML5 -->
<html>

<head>
	<title> Find PW </title>
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
				<h1>FIND PW</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form>
					<input type="text" name="name" placeholder="NAME" style="width: 100%;" /> <br />
					<input type="text" name="e-mail" placeholder="e-mail" style="width: 100%;" /><br />
					<input type="text" name="id" placeholder="ID" style="width: 100%;" /><br />
					<hr/>
					<input type="submit" value="Find PW" id="btn_findPW" style="width: 45%;" />
					<input type="button" value="GO Login" style="width: 45%;" onclick="goLogin()"/> </br>
				</form>
			</div>
		</div>
	</div>
</body>

</html>