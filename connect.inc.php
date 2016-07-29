<?php
	$conn_error = 'Could not connect.';
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_password = '';

	$mysql_db = 'project2k16';
	$handle = @mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	/*if(!$handle || !@mysqli_select_db($handle, $mysql_db))
	{
		die($conn_error);
	}*/
?>