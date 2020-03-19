<style type="text/css">
	.weather{
		border: 1px solid black;
		width: 50%;
		text-align: center;
	}
</style>
<?php
require 'db_config.php';
if(isset($_POST['submit']))
{
	

	$city_name = $_POST['city'];
	if(isset($_POST['country'])){
	$country = $_POST['country'];
	}
	else{
		$country = "no name";
	}	

	$test_city = "SELECT city FROM city_table WHERE city='$city_name'";
	$result = mysqli_query($conn,$test_city);
	$flag = 0;
	while($rows = $result->fetch_assoc())
	{
		$city = $rows['city'];
		if($city == $city_name)
		{
			$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid=ac955e198f248e5d8c603390edd8c7c2';
			$jsondata = file_get_contents($url);
			$json = json_decode($jsondata, true);
// header( "Location: http://localhost/weather/city.html" ); 
			$cityname = $json['name'];
			$weather = $json['weather'][0]['main'];
			$temp = $json['main']['temp'];
			$faren = ($temp-273.15)*(9/5)+32;
			$temp = $temp-273.15;
			echo "<div class='weather'>";
			echo "<h2> Weather Status </h2>";
			echo "<h3><u>City:</u>" . ' ' .$cityname. "</h3>";
			echo "<h3><u>Weather:</u>" .' '. $weather. "</h3>";
			echo "<h3><u>Temperature:</u> ". ' ' . $temp. '&#8451'.' / '. $faren . '&#x2109' . "</h3>";
			echo "</div>";
			$flag = 1;	
		}	
	}

	if($flag ==1)
	{
		echo '<script langauge = "javascript">';
		//echo 'alert("City exists already!")';
		echo '</script>';
	}

	else
	{
		$conn->query("INSERT INTO `city_table`(`id`,`city`,`country`) VALUES (NULL, '$city_name','$country')");
		// header( "Location: index.php" ); 
	}

}



?>