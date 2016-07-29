<?php
include_once 'connect.inc.php';
include 'core.inc.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $assignmentid= $_POST['assignmentid'];
 $subject=strtolower($_POST['subject']);
 $query="SELECT Assignmentid from Assignment WHERE Assignmentid='$assignmentid'";
 $query_run=mysqli_query($handle,$query);
 $date=$_POST['date'];
 $first_name=getuserfield('Firstname');
 $last_name=getuserfield('Lastname');
 $email_id=getuserfield('Email_id');
 $username=getuserfield('Username');
 $query1="SELECT Username,Assignmentid from Submission WHERE Username='$username' and Assignmentid='$assignmentid'";
 $query_run1=mysqli_query($handle,$query1);
 $query2="SELECT Assignmentid, Subject from Assignment WHERE Subject='$subject' and Assignmentid='$assignmentid'";
 $query_run2=mysqli_query($handle,$query2);
 $department=getuserfield('Department');
 $year=getuserfield('Year');
 @mkdir('./submissions/');
 $folder= "submissions/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 if(mysqli_num_rows($query_run)!=1)
  {
    echo '<script type="text/javascript">alert("No Such AssignmentId Found.")</script>';
    header( "refresh:0;url=submit_assignment.php?fail" );
  }
  else if(mysqli_num_rows($query_run2)>=1)
  {
     echo '<script type="text/javascript">alert("Assignment Id and Subject Donot Match. Please verify again.")</script>';
     header( "refresh:0;url=submit_assignment.php?fail" );
  }
  else if(mysqli_num_rows($query_run1)>=1)
  {
    echo '<script type="text/javascript">alert("You have already submitted your assignment for the mentioned Assignment Id.")</script>';
    header( "refresh:0;url=submit_assignment.php?fail" );
  }
 else if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO Submission VALUES('','$assignmentid','$final_file','$file_type','$new_size','$username','$first_name','$last_name','$department','$year','$subject','$date','email_id')";
  mysqli_query($handle,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='submit_assignment.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='submit_assignment.php?fail';
        </script>
  <?php
  }
}
?>