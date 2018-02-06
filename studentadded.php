<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php

	if(isset($_POST['sumbit'])){
		if(empty($_POST['first_name'])){

			// Add firstname to array
			$data_missing[] = 'First Name';

		} else {

			// get rid of white space from name and store the firstname
			$f_name = trim($_POST['first_name']);

		}

		if(empty($_POST['last_name'])){

			// Add lastname to array
			$data_missing[] = 'Last Name';

		} else{

			// get rid of white space from the name and store the lastname
			$l_name = trim($_POST['last_name']);

		}

		if(empty($_POST['email'])){

			// add email to array
			$data_missing[] = 'Email';

		} else {

			// get rid of white space white space from the name and store
			$email = trim($_POST['email']);

		}

		if(empty($_POST['street'])){

			// add street to array
			$data_missing[] = 'Street';

		} else {

			// Trim white space and store
			$street = trim($_POST['street']);

		}

		if(empty($_POST['city'])){

			// add city to array
			$data_missing[] = 'City';

		} else {

			// Trim white space and store
			$city = trim($_POST['city']);

		}

		if(empty($_POST['state'])){

			// add state name to array
			$data_missing[] = 'State';

		} else {

			// get rid of white space from the name and store
			$state = trim($_POST['state']);

		}

		if(empty($_POST['zip'])){

			// Adds Code to array
			$data_missing[] = 'Zip Code';

		} else {
			
			$zip = trim($_POST['zip']);

		}

		if(empty($_POST['phone'])){

			// Add Phone to array
			$data_missing[] = 'Phone Number';

		} else {

			// Trim white space from the name and store the name
			$phone = trim($_POST['phone']);

		}

		if(empty($_POST['birth_date'])){

			// Adds name to array
			$data_missing[] = 'Birth Date';

		} else {

			// Trim white space from the name and store the name
			$b_date = trim($_POST['birth_date']);

		}

		if(empty($_POST['sex'])){

			// Adds name to array
			$data_missing[] = 'Sex';

		} else {

			// Trim white space from the name and store the name
			$sex = trim($_POST['sex']);

		}

		if(empty($_POST['lunch'])){

			// Adds name to array
			$data_missing[] = 'Lunch Cost';

		} else {

			// Trim white space from the name and store the name
			$lunch = trim($_POST['lunch']);

		}
	}

?>

</body>
</html>