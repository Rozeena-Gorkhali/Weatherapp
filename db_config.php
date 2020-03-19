<?php
		//connect to the server
$conn = mysqli_connect('localhost', 'root','') or die("Unable to Connect");		
		//create the database if it does not exists & login ito it
$dbstart = "CREATE DATABASE if not exists Weather;";
$conn->query($dbstart);
mysqli_select_db($conn , "Weather");
			/*	create table if it does not exists
		*/
			$que = "CREATE TABLE if not exists city_table ( 'id' INT(10) NOT NULL AUTO_INCREMENT, 
			'city' VARCHAR(50) NOT NULL , 
			'country' VARCHAR(50) NOT NULL , 										 
			PRIMARY KEY ('id')) ENGINE = InnoDB";
			$conn->query($que);

			?>