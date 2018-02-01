<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'testing');
DEFINE ('DB_USER', 'student1');
DEFINE ('DB_PASSWORD', 'dragon');

$dbc = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error());
?>