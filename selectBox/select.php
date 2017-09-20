<html>
<head>

</head>
<body>
<form method="POST">
	<select name="selectBox" id="selectBox" onchange="this.form.submit()">
		<option value="">Select Country</option>
		<option value="bangladesh">Bangladesh</option>
		<option value="australia">Australia</option>
		<option value="usa">USA</option>
	</select>
</form>
</body>
</html>

<?php
if(isset($_POST)) {
	print_r($_POST);
	$country=$_POST['selectBox'];
	print "<br/>".$country;
}

?>