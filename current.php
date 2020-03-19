<!DOCTYPE html>
<html>
<head>
	<title> Weather Forecast using Openweathermap </title>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	

	

</head>
<style type="text/css">
	input{
		margin: 15px;
	}
	h3
	{
		text-align: center;
	}
	div
	{
		width: 50%; text-align: left; padding: 50px;
	}
</style>
<body>
	<div>
		<form action="add.php" method="GET">
					<h3>Add City and Country Name</h3><hr>
					<label>City Name:</label>
					<input type="text" name ="city" placeholder="cityname"><br>		
					<label>Country:</label>
					<input type="text" name ="country" placeholder="countryname"><br>	
					<input type="submit" name="submit" value="Add city">
		</form>
	</div>
	<div>
		
	</div>
	


</body>
</html>
