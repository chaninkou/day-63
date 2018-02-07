<html>
<head>
<title>Student Added Page</title>
</head>
<body>
<?php

	if(isset($_POST['sumbit'])){
		
		$data_missing = array();
		// Getting the first_name from addstudent.php
		// check if it's empty or not
		if(empty($_POST['first_name'])){

			// if its empty, then add it to data_missing
			$data_missing[] = 'First Name';

		} else {

			// store the first_name and trim will trim off the white space
			$f_name = trim($_POST['first_name']);

		}

		if(empty($_POST['last_name'])){

			$data_missing[] = 'Last Name';

		} else{
			
			$l_name = trim($_POST['last_name']);

		}

		if(empty($_POST['email'])){

			$data_missing[] = 'Email';

		} else {

			$email = trim($_POST['email']);

		}

		if(empty($_POST['street'])){

			$data_missing[] = 'Street';

		} else {

			$street = trim($_POST['street']);

		}

		if(empty($_POST['city'])){

			$data_missing[] = 'City';

		} else {

			$city = trim($_POST['city']);

		}

		if(empty($_POST['state'])){

			$data_missing[] = 'State';

		} else {

			$state = trim($_POST['state']);

		}

		if(empty($_POST['zip'])){
			
			$data_missing[] = 'Zip Code';

		} else {
			
			$zip = trim($_POST['zip']);

		}

		if(empty($_POST['phone'])){

			$data_missing[] = 'Phone Number';

		} else {
			
			$phone = trim($_POST['phone']);

		}

		if(empty($_POST['birth_date'])){

			$data_missing[] = 'Birth Date';

		} else {

			$b_date = trim($_POST['birth_date']);

		}

		if(empty($_POST['sex'])){

			$data_missing[] = 'Sex';

		} else {

			$sex = trim($_POST['sex']);

		}

		if(empty($_POST['lunch'])){

			$data_missing[] = 'Lunch Cost';

		} else {
			
			$lunch = trim($_POST['lunch']);

		}
		
		if(empty($data_missing)){
			
			// locate it
			require_once('../mysqli_connect.php');
			
			// put ? or the acutal information, Now() will be the time for now. Null will auto create the student id
			$query = "INSERT INTO students (first_name, last_name, email,
			street, city, state, zip, phone, birth_date, sex, date_entered,
			lunch_cost, student_id) VALUES (?, ?, ?,
			?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL)";
			
			$stmt = mysqli_prepare($dbc, $query);
			
			// i Integers, d Doubles, b Blobs, s everything else
			mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,
            $l_name, $email, $street, $city,
            $state, $zip, $phone, $b_date,
            $sex, $lunch);
			
			mysqli_stmt_execute($stmt);
        
			$affected_rows = mysqli_stmt_affected_rows($stmt);
			
			// check if the query went on properly
			if($affected_rows == 1){
            
				echo 'Student Entered';
				
				mysqli_stmt_close($stmt);
				
				mysqli_close($dbc);
            
			} else {
            
				echo 'Error Occurred<br />';
				echo mysqli_error();
				
				mysqli_stmt_close($stmt);
				
				mysqli_close($dbc);
            
			}
		// if data were missing
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
}

?>
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