<?php
	include 'core.inc.php';
	include 'connect.inc.php';
	$first_name=getuserfield('Firstname');
	$last_name=getuserfield('Lastname');
	$email_id=getuserfield('Email_id');
	$username=getuserfield('Username');
	$gender=getuserfield('Gender');
	$department=getuserfield('Department');
	$year=getuserfield('Year');
	$date_of_birth=getuserfield('Date_of_birth');
	$college=getuserfield('College');
	$address=getuserfield('Address');
	$year_of_passing=getuserfield('Year_of_passing');
	$intermediate=getuserfield('Intermediate');
	$about=getuserfield('About');
	$contact=getuserfield('Contact');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Chandan Prusty - No Copyright -->
  <title>StudentProfile-Write Up!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  </head>
  <style>
  .container-fluid {
    padding:60px 50px;
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
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
}

.jumbotron {
    font-family: Montserrat, sans-serif;
}

.navbar {
    font-family: Montserrat, sans-serif;
}
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
}

h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
}
p1 {
  color: #A0522D;
  font-size:40px;
}
.button {
    position: relative;
    background-color: #C94B4B;
    border: none;
    font-size: 20px;
    color: #FFFFFF;
    padding: 20px;
    width: 230px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    margin: 5px;
}

.button:hover {
    color: #C94B4B;
    background-color:#FFFFFF;
    box-shadow:5px 5px rgba(0,0,0,0.75);
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
.button1 {
    position: relative;
    background-color: lightgreen;
    border: none;
    font-size: 20px;
    color: #FFFFFF;
    padding: 20px;
    width: 230px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    margin: 5px;
}

.button1:hover {
    color: green;
    background-color:#FFFFFF;
    box-shadow:5px 5px rgba(0,0,0,0.75);
}
.button1:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
footer {
	text-align:center;
	color:#fff;
	background-color:#2F4F4F;
	padding:20px;
	margin:0.5px;
}
h3 {
	color:#C94B4B;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    font-size:18px;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: gray;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color: #F0F8FF;
    color: white;
}

.modal-body {
	padding: 2px 16px;
	text-align:center;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #F0F8FF;
    color: white;
}
</style>
<body style="background-color:#F0F8FF";>
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
      <li><a href="login.php"> HOME</a></li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-info" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
    </div>
  </div>
<div class="container" style="background:#fff";>
<header style="text-align:center;">
<p1>Your Profile</p1>
</header>
<div class="row">
            <section class="col col-sm-4" style="padding:30px";>
            <h1><?php echo $first_name.' '.$last_name; ?></h1>
                  <p><strong>Email id: </strong><?php if(!empty($email_id)){echo $email_id;} else{ echo ' ';} ?></p>
                  <p><strong>Contact: </strong><?php if(!empty($contact)){echo $contact;} else{ echo ' ';} ?></p>
                  <p><strong>Department: </strong><?php if(!empty($department)){echo $department;} else{ echo ' ';} ?></p>
                  <p><strong>Year: </strong><?php if(!empty($year)){echo $year;} else{ echo ' ';} ?></p>
            </section>
            <section class="col col-sm-6"></section>
            <section class="col col-sm-2" style="padding:15px;"><br><button class="btn btn-danger btn-lg" id="myBtn"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</button></section>
            <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Edit Profile</h2>
    </div>
    <div class="modal-body">
      <form action="update.php" method="POST">
      	<strong>First Name: </strong>
      	<input type="text" name="firstname" value="<?php echo $first_name; ?>" maxlength=40 required>
      	<br><br>
      	<strong>Last Name: </strong>
      	<input type="text" name="lastname" value="<?php echo $last_name; ?>" maxlength=40 required>
      	<br><br>
      	<strong>Email Id: </strong>
      	<input type="text" name="email_id" value="<?php if(!empty($email_id)){echo $email_id;} else{ echo ' ';} ?>" required>
      	<br><br>
      	<strong>Contact: </strong>
      	<input type="text" name="contact" value="<?php if(!empty($contact)){echo $contact;} else{ echo ' ';} ?>" maxlength=11 required>
      	<br><br>
      	<strong>Dept: </strong>
      	<input type="text" name="department" value="<?php if(!empty($department)){echo $department;} else{ echo ' ';} ?>" maxlength=10 required>
      	<br><br>
      	<strong>Year: </strong>
      	<input type="text" name="year" value="<?php if(!empty($year)){echo $year;} else{ echo ' ';} ?>" required>
      	<br><br>
      	<strong>About: </strong><br>
      	<textarea name="about" rows=6 cols=30><?php if(!empty($about)){echo $about;} else{ echo ' ';} ?></textarea>
      	<br><br>
      	<strong>Intermediate:</strong>
      	<input type="text" name="intermediate" value="<?php if(!empty($intermediate)){echo $intermediate;} else{ echo ' ';} ?>">
      	<br><br>
      	<strong>Graduation:</strong>
      	<input type="text" name="college" value="<?php if(!empty($college)){echo $college;} else{ echo ' ';} ?>">
      	<br><br>
      	<strong>Address:</strong>
      	<input type="text" name="address" value="<?php if(!empty($address)){echo $address;} else{ echo ' ';} ?>">
      	<br><br>
      	<strong>Gender:</strong>
      	<input type="text" name="gender" value="<?php if(!empty($gender)){echo $gender;} else{ echo ' ';} ?>">
      	<strong>Date of Birth:</strong>
      	<input type="date" name="date_of_birth" value="<?php if(!empty($date_of_birth)){echo $date_of_birth;} else{ echo ' ';} ?>">
      	<strong>Year of Passing:</strong>
      	<input type="text" name="year_of_passing" value="<?php if(!empty($year_of_passing)){echo $year_of_passing;} else{ echo ' ';} ?>">
      	<br><br>
      	<input type="submit" class="btn btn-info btn-lg" value="Update">
      </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>ABOUT ME</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <p><?php if(!empty($about)){echo $about;} else{ echo ' ';} ?></p>    
          </section>
</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>EDUCATION</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <h3>Intermediate:</h3>
              <p><?php if(!empty($intermediate)){echo $intermediate;} else{ echo ' ';} ?></p>
              <h3>Graduation:</h3>
              <p><?php if(!empty($college)){echo $college;} else{ echo ' ';} ?></p>
          </section>
</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>OTHER DETAILS</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <h3>Address: </h3>
              <p><?php if(!empty($address)){echo $address;} else{ echo ' ';} ?></p>
              <h3>Gender: </h3>
              <p><?php if(!empty($gender)){echo $gender;} else{ echo ' ';} ?></p>
              <h3>Date of Birth: </h3>
              <p><?php if(!empty($date_of_birth)){echo $date_of_birth;} else{ echo 'No Data.';} ?></p>
              <h3>Year of Passing: </h3>
              <p><?php if(!empty($year_of_passing)){echo $year_of_passing;} else{ echo ' ';} ?></p>
          </section>
</div>
</div>
<footer>
<p>&copy Copyright  <a href="http://github.com/chandan2801"><span style="color:lightblue";>Chandan Prusty</a></span>  :  Student Profile</p>
</footer>
</body>
</html>


