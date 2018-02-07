<html>

<head>
	<title>Student add</title>
</head>

<body>
	<form action = "http://localhost/studentadded.php" method="post">
		<b>Enter your information</b>
		
		<p>First Name:
			<input type="text" name="first_name" size="25" value="" />
		</p>

		<p>Last Name:
			<input type="text" name="last_name" size="25" value="" />
		</p>

		<p>Email:
			<input type="text" name="email" size="25" value="" />
		</p>

		<p>Street:
			<input type="text" name="street" size="25" value="" />
		</p>

		<p>City:
			<input type="text" name="city" size="20" value="" />
		</p>

		<p>State (2 Letters):
			<input type="text" name="state" size="5" maxlength="2" value="" />
		</p>

		<p>Zip Code:
			<input type="text" name="zip" size="10" maxlength="5" value="" />
		</p>

		<p>Phone Number:
			<input type="text" name="phone" size="15" value="" />
		</p>

		<p>Birth Date(MM-DD-YYYY):
			<input type="text" name="birth_date" size="15" value="" />
		</p>

		<p>Sex (M or F):
			<input type="text" name="sex" size="5" maxlength="1" value="" />
		</p>

		<p>Lunch Money:
			<input type="text" name="lunch" size="5" value="" />
		</p>

		<p>
			<input type="submit" name="submit" value="Send" />
		</p>

	</form>
</body>
</html>