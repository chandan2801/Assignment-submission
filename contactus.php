<?php
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments']))
	{
		$user_name = $_POST['name'];
		$user_email = $_POST['email'];
		$user_text = $_POST['comments'];
		$to = 'cprusty58@gmail.com';
		$subject = 'Contact form submission!!';
		$body = $user_name."\n".$user_text;
		$header = 'From: '.$user_email;
		if(@mail($to,$subject,$body,$header))
		{
			echo '<script type="text/javascript">alert("Thank you for contacting us.")</script>';
			header( "refresh:0;url=new.php" );
		}
		else
		{
			echo '<script type="text/javascript">alert("Error!!Please try again later.")</script>';
			header( "refresh:0;url=new.php" );
		}
	}
?>