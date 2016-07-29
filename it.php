<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Chandan Prusty - No Copyright -->
  <title>IT Department-Write Up!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<style>
div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 16px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.jumbotron {  
    background-color:white;
    color:#C94B4B;
    padding:50px 15px;
  }
.jumbotron {
    font-family: Montserrat, sans-serif;
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
.navbar {
    font-family: Montserrat, sans-serif;
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
<div class="jumbotron text-center">
  <h1 id="h01">CSE FACULTIES</h1>
</div>
<div class="container">
<?php
    require 'connect.inc.php';
    $query="SELECT * from Faculty where Department='IT'";
    $query_run=mysqli_query($handle,$query);
    $query_num_rows=mysqli_num_rows($query_run);
    if($query_num_rows==0)
    {
        echo 'Sorry no faculties registered yet.';
    }
    else
    {
        while($query_row=mysqli_fetch_array($query_run))
        {
            $gender=$query_row['Gender'];
            $first_name=$query_row['Firstname'];
            $last_name=$query_row['Lastname'];
            $contact=$query_row['Contact'];
            $email_id=$query_row['Email_id'];
            if($gender=='Male')
            {
?>
<div class="responsive">
  <div class="img">
      <img src="img_avatar.png" alt="<?php echo $first_name.' '.$last_name; ?>" width="300" height="200">
    <div class="desc">
    <h4 style='color:green;'><?php echo $first_name.' '.$last_name; ?></h4>
    <p><strong>Contact:</strong><?php echo $contact; ?></p>
    <p><strong>Email id:</strong><?php echo $email_id; ?></p>
    </div>
  </div> 
</div>
<?php
            }
            else
            {
?>
<div class="responsive">
  <div class="img">
      <img src="img_avatar2.png" alt="<?php echo $first_name.' '.$last_name; ?>" width="300" height="200">
    <div class="desc">
    <h4 style='color:green;'><?php echo $first_name.' '.$last_name; ?></h4>
    <p><strong>Contact:</strong><?php echo $contact; ?></p>
    <p><strong>Email id:</strong><?php echo $email_id; ?></p>
    </div>
  </div> 
</div>
<?php
            }
  }
}
?>
</div>
</body>
</html>


