<!DOCTYPE html>
<html>

<head>
	<style>
		body {
			background-color: lightblue;
		}
	</style>
</head>

<body>
	<?php
	echo "<h2>
<p><center>
		Only Ghosals' Restaurant</p>
</h2>";
	echo "<h2>
<p><center>
		11, Dayal Banerjee Road</p>
</h2>";
	echo "<h2>
<p><center>
		Shibpur, Howrah-711102</p>
</h2>";
	echo "</br>";
	echo "<h2>
<p><center>
		Name : " . $_GET['name'] . ". </p>
</h2>";
	echo "<h2>
<p><center>
		Booked For Today " . date("Y/m/d") . "</p>
</h2>";
	echo "<h2>
<p><center>
		Time : " . $_GET['time'] . ". </p>
</h2>";
	echo "<h2>
<p><center>
		Total Number Of Customer : "
		. $_GET['val'] . ". </p>
</h2>";
	echo "<h2>
<p><center>
		Table Number Booked: 32";
	echo "</br>";
	echo "<h3>
<p><center>
		Take A Screenshot For Further Use At Hotel</p>
</h3>";
	echo "<h3>
<p><center>
			Please Bring All Certificates Or Test Reports
			At Visiting Time</p>
</h3>";
	echo "</br>";
	?>
</body>

</html>
