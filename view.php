<?php
include_once 'connect.inc.php';
include 'core.inc1.php';
 $first_name=getuserfields('Firstname');
 $last_name=getuserfields('Lastname');
  $username=getuserfields('Username');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Submissions Faculty-Write Up!</title>
<link rel="stylesheet" href="style.css" type="text/css" />

    <link rel="stylesheet" href="css1/normalize.css">

    
        <link rel="stylesheet" href="css1/style.css">
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <style>
        .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
}
.navbar {
    margin-bottom: 0;
    background-color: transparent;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #C94B4B !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #fff !important;
    background-color: #C94B4B !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #C94B4B !important;
}
        </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="" style="font-size:20px; color:#C94B4B";><span class="glyphicon glyphicon-pencil" style="color:#000"></span>Write Up!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="loginfac.php"> HOME</a></li>
   <li><a href="logoutfac.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="container">
<h1>The<span> submissions for assignments</span> posted by <span><?php echo $first_name.' '.$last_name; ?></span></h1>
<div id="body">
 <table width="80%" border="1" class="responstable">
    <tr>
    <th colspan="12">YOUR UPLOADS...<label><a href="post_assignment.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td><strong>Assignment Id</strong></td>
    <td><strong>File Name</strong></td>
    <td><strong>File Type</strong></td>
    <td><strong>Dept</strong></td>
    <td><strong>Year</strong></td>
    <td><strong>Subject</strong></td>
    <td><strong>Date</strong></td>
    <td><strong>View</strong></td>
    <td><strong>Submission</strong></td>
    </tr>
    <?php
 $sql="SELECT * FROM Assignment where Username='".mysqli_real_escape_string($handle,$username)."'";
 $result_set=mysqli_query($handle,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['Assignmentid'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['Department'] ?></td>
        <td><?php echo $row['Year'] ?></td>
        <td><?php echo $row['Subject'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        <td><a href="student_submission.php?Assignmentid=<?php echo $row['Assignmentid'] ?>&Subject=<?php echo $row['Subject'] ?>" class="button">View Submission</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
</div>
</div>
</body>
</html>