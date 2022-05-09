<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insertion</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body>
	

	<div class="ui padded text segment container" style="margin-top: 20vh;">
		<?php

			$EMPLOYEE_ID = $_GET["EMPLOYEE_ID"];
			$FIRST_NAME = $_GET["FIRST_NAME"];
			$LAST_NAME = $_GET["LAST_NAME"];
			$EMAIL = $_GET["EMAIL"];
			$HIRE_DATE = $_GET["HIRE_DATE"];
			$JOB_ID = $_GET["JOB_ID"];


			require_once('db_connect.php');

			$connect = mysqli_connect( HOST, USER, PASS, DB )

				or die("Can not connect");



			mysqli_query( $connect, "INSERT INTO employees (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, HIRE_DATE, JOB_ID) VALUES ($EMPLOYEE_ID, '$FIRST_NAME', '$LAST_NAME', '$EMAIL', '$HIRE_DATE', '$JOB_ID')" )

				or die("Can not execute query");


			echo "<h2>Record inserted for employee = ''$FIRST_NAME $LAST_NAME'' </h2> <br> <br>";



			echo "<p><a href=read.php><button class='ui right floated blue button'>OK</button></a></p>";

		?>
		
	</div>
</body>
</html>

