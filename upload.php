<?php
include_once 'connect.inc.php';
include 'core.inc1.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $department= $_POST['department'];
 $year=$_POST['year'];
 $subject=strtolower($_POST['subject']);
 $date=$_POST['date'];
 $first_name=getuserfields('Firstname');
 $last_name=getuserfields('Lastname');
 $email_id=getuserfields('Email_id');
 $username=getuserfields('Username');
 generate:
 $assignmentid=rand(1,1000000);
 $query="SELECT Assignmentid from Assignment where Assignmentid='$assignmentid'";
 $query_run=mysqli_query($handle,$query);
 $query_num_rows=mysqli_num_rows($query_run);
 if($query_num_rows==1)
 { 
    goto generate;   
 }
 @mkdir('./uploads/');
 $folder= "uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO Assignment VALUES('','$assignmentid','$final_file','$file_type','$new_size','$username','$first_name','$last_name','$department','$year','$subject','$date')";
  mysqli_query($handle,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='post_assignment.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='post_assignment.php?fail';
        </script>
  <?php
  }
}
?>