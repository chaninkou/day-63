<?php
require_once('../mysqli_connect.php');

$query = "SELECT first_name, last_name, email, street, city, state, zip, phone, birth_date, FROM students";

$response = @mysqli_query($dbc, $query);

?>