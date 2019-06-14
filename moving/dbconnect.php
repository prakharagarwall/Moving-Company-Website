<?php

	// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.

$user = 'root';
$pwd = 'root';
$db = 'moving_company';
$host = 'localhost';

$link = mysqli_init();
$conn = mysqli_connect($host, $user, $pwd, $db);
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
?>
