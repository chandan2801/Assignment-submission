<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Chandan Prusty - No Copyright -->
  <title>StudentLogin-Write Up!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
   .jumbotron {
      background:url("slide22.jpg");  
    color:#C94B4B;
    padding:100px 25px;
  }
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
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px !important;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .closebtn {
    font-size: 40px !important;
    top: 15px;
    right: 35px;
  }
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
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    <a href="login.php">Home</a>
    <a href="studentprofile.php">My Profile</a>
    <div style="align: center;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Department<span class="caret"></span></a>
            <li><a href="cse.php">CSE</a></li>
            <li><a href="it.php">IT</a></li>
          </div>
  </div>
</div>
<br><br>
<div class="row">
            <section class="col col-sm-6">
              <img src="Student.jpg" alt="student">
            </section>
            <section class="col col-sm-6" style="padding:30px 30px";>
            <br><br>
              <h1>Hi,</h1>
                  <p1><?php echo $first_name.' '.$last_name; ?></p1>
                  <p><strong>Email Id:</strong><?php echo $email_id; ?></p>
                  <div style="text-align:center";>
                  <form action="view_assignment.php" method="POST">
                  <button class="button"><span>View Assignment</span></button>
                  </form>
                <br>
                <form action="submit_assignment.php" method="POST">
                  <button class="button1"><span>Submit Assignment</span></button>
                </form>
          </section>
</div>
<div style="text-align:center";>
<span style="font-size:70px;cursor:pointer;align:center;" onclick="openNav()"><span class="glyphicon glyphicon-info-sign" style="color:#C94B4B";></span></span>
</div> 
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
</body>
</html>