<?php
	require 'core.inc1.php';
	require 'connect.inc.php';

	if(logged_in1())
	{
		$first_name=getuserfields('Firstname');
		$last_name=getuserfields('Lastname');
		$email_id=getuserfields('Email_id');
		$username=getuserfields('Username');
		if($first_name=='')
		{
			echo 'You are already logged in as Student.';
		}
		else
		{
			include 'faculty.php';
		}
	} 
	else
	{
		include 'loginform.incfac.php';
	}
?>