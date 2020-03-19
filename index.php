<!DOCTYPE html>
<html>
<head>
	<title>Forecast Weather with Openweathermap</title>
</head>
<style type="text/css">
	input{
		margin: 15px;
	}
	h2
	{
		text-align: center;
	}

	
	form
	{
		text-align: center;
		
	}
</style>

<body>
	<div class="jumbotron" style="margin-bottom:0px;background-color: lightblue;">
	<h2 class="text-center" style="font-size:40px;font-weight:600;">Current Weather</h2>
	
	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Weather') or die("Unable to Connect");

	$city_name = $conn->query("SELECT city FROM city_table");

	echo"<form action = 'add.php', method='POST'>";

	echo "<select name = 'city'>";

	while ($rows = $city_name->fetch_assoc())
	{
		$city = $rows['city'];
		echo"<option value='$city'>$city</option>";
	}

	echo"</select>";

	echo"<input type='submit' name='submit' value='Get Weather Report'>";

	echo"</form>";

	?>

</body>
</html>