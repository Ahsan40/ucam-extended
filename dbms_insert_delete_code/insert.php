<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body>
	<div class="ui menu">
		<h1 class="header">Insert Data</h1>
	</div>

	<div class="ui text container">
		<h3>New Employee Info</h3>


		<form class="ui form" method=get action=insert_handler.php>

			ID: <input type=text placeholder="enter value greater than 2000 for hr schema" name=EMPLOYEE_ID> <br>

			<p>

			First Name: <input type=text name=FIRST_NAME> <br>

			<p>

			Last Name: <input type=text name=LAST_NAME> <br>

			<p>

			Email: <input type=text name=EMAIL> <br>

			<p>

			Hire Date: <input type=date name=HIRE_DATE> <br>

			<p>

			JOB_ID: <input type=text name=JOB_ID> <br>

			<p>

			<input class="ui big right floated blue button" type=submit value="Insert Entry">

		</form>
	</div>
</body>
</html>

