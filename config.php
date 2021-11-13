<?php # Script 9.2 mysqli connect.phip


define('DB_USER', 'id17931319_root');

define('DB_PASSWORD', '8IP&fY?$F}2Rsjdo');

define('DB_HOST', 'localhost');

define('DB_NAME','id17931319_indian_bank');


 // Make the connection:

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to the databases'.mysqli_connect_error());



mysqli_set_charset($conn, 'utf8');

?>
