<?php
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_agn']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['profession']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password_agn=$_POST['password_agn'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$profession=$_POST['profession'];
		if(!empty($username) && !empty($email) && !empty($password) && !empty($password_agn) && !empty($firstname) && !empty($lastname) && !empty($gender) && !empty($profession))
		{
			if($password!=$password_agn)
			 	{
			 		echo '<script type="text/javascript">alert("Please fiil in the details!")</script>';
			 	}
		}
		else
		{
			echo '<script type="text/javascript">alert("Please fiil in the details!")</script>';
		}
	}
?>