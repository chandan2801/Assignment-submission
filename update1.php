<?php
	include 'connect.inc.php';
      include 'core.inc1.php';
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['designation']) && isset($_POST['email_id']) && isset($_POST['contact']) && isset($_POST['department']) && isset($_POST['college']) && isset($_POST['higher_studies1']) && isset($_POST['higher_studies2']) && isset($_POST['specialization']) && isset($_POST['graduate_teach']) && isset($_POST['pg_teach']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['date_of_birth']) && isset($_POST['date_of_joining']))
		{
			$first_name=$_POST['firstname'];
			$last_name=$_POST['lastname'];
                  $designation=$_POST['designation'];
			$email_id=$_POST['email_id'];
			$contact=$_POST['contact'];
			$department=$_POST['department'];
                  $college=$_POST['college'];
                  $higher_studies1=$_POST['higher_studies1'];
                  $higher_studies2=$_POST['higher_studies2'];
                  $specialization=$_POST['specialization'];
                  $graduate_teach=$_POST['graduate_teach'];
                  $pg_teach=$_POST['pg_teach'];
                  $address=$_POST['address'];
                  $gender=$_POST['gender'];
                  $date_of_birth=$_POST['date_of_birth'];
                  $date_of_joining=$_POST['date_of_joining'];
			$query="UPDATE Faculty SET Firstname='$first_name', Lastname='$last_name', Email_id='$email_id', Contact='$contact', Department='$department', Designation='$designation', Higherstudies1='$higher_studies1', Higherstudies2='$higher_studies2', College='$college', Specialization='$specialization', Graduateteach='$graduate_teach', PGteach='$pg_teach', Address='$address', Gender='$gender', Date_of_birth='$date_of_birth', Date_of_joining='$date_of_joining' WHERE id='".$_SESSION['user_id']."'";
			if($query_run=mysqli_query($handle,$query))
                  {
			   header('Location: facultyprofile.php');
                  }
                  else
                  {
                        echo 'Unable to process.';
                  }
		}
?>