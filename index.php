<html>
	<head>
		<title>Letter - Registrieren</title>
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link rel="stylesheet" href="css/regist.css" type="text/css" />
	</head>
	<body>
		<div id="regist">
			<form action="index.php" method="POST">
				<p align="center">Username: <input type="text" maxlength="30" name="name"/></p>
				<p align="center">Passwort: <input type="password" maxlength="30" size="100" name="pwd" /></p>
				<p align="center"><input type="submit" value="einloggen" /></p>
			</form>
		</div>
	</body>
</html>
<?php
if ($_POST['name'] != "" and $_POST['pwd'] != "") {
	if ($_POST['name'] == "Julian" and $_POST['pwd'] == "hallo") {
		echo "<h1>EINGELOGGT!!!!</h1>";
	}
	elseif ($_POST['name'] != "Julian") {
		echo "<h1>Hallo Unbekannter</h1>"; }
}
?>
