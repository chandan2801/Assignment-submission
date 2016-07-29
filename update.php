<?php
	include 'connect.inc.php';
      include 'core.inc.php';
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email_id']) && isset($_POST['contact']) && isset($_POST['department']) && isset($_POST['year']) && isset($_POST['about']) && isset($_POST['intermediate']) && isset($_POST['college']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['date_of_birth']) && isset($_POST['year_of_passing']))
		{
			$first_name=$_POST['firstname'];
			$last_name=$_POST['lastname'];
			$email_id=$_POST['email_id'];
			$contact=$_POST['contact'];
			$department=$_POST['department'];
			$year=$_POST['year'];
                  $about=$_POST['about'];
                  $intermediate=$_POST['intermediate'];
                  $college=$_POST['college'];
                  $address=$_POST['address'];
                  $gender=$_POST['gender'];
                  $date_of_birth=$_POST['date_of_birth'];
                  $year_of_passing=$_POST['year_of_passing'];
			$query="UPDATE Student SET Firstname='$first_name', Lastname='$last_name', Email_id='$email_id', Contact=$contact, Department='$department', Year='$year', About='$about', Intermediate='$intermediate', College='$college', Address='$address', Gender='$gender', Date_of_birth='$date_of_birth', Year_of_passing='$year_of_passing' WHERE id='".$_SESSION['user_id']."'";
			if($query_run=mysqli_query($handle,$query))
                  {
			   header('Location: studentprofile.php');
                  }
                  else
                  {
                        echo 'Unable to process.';
                  }
		}
?>