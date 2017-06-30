<html>
<title>State Changer</title>
<body>

Type in the state!<br><br>

<form enctype='application/json' action="changeState.php" method="POST">
	<label for="alert_id">Alert ID : </label><input type="text" name="alert_id"><br>
	<label for="state">State : </label><input type="text" name="state"><br>
	<input type="submit" name="submit" value="Change">
</form>

</body>
</html>