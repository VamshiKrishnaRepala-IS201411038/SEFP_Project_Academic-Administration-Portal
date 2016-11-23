<?php
session_start();
if (isset($_SESSION['login'])!=true)
{
header("Location:Student_Login.php");
}

include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>AcaD | Academic Administration Application</title>
	   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
     <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />

<style>
div.transbox {
    margin-left: 1060px;
    margin-top: -50px;
    width: 300px;
    height: 350px;
  position:relative;
  background-color: blue;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}
div.transbox1 {
    margin-left: 5px;
    margin-top: -450px;
    width: 500px;
    height: 500px;
  position:relative;
  background-color: blue;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}
div.transbox1 p {
  margin: 5%;
  font-weight: bold;
  color: #ffffff;
}
div.transbox1 a {
  color:#ffffff;
}
div.transbox1 a:hover{
  color:green;
}
div.transbox2 {
    margin-left: 600px;
    margin-top: -400px;
    width: 300px;
    height: 450px;
  position:relative;
  background-color: blue;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}
div.transbox2 p {
  margin: 5%;
  font-weight: bold;
  color: #ffffff;
}
div.transbox2 a {
  color:#ffffff;
}
div.transbox2 a:hover{
  color:green;
}
div#transbox {
    margin-left: 950px;
    margin-top: -50px;
    width: 300px;
    height: 200px;
  position:relative;
  background-color: white;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}
div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #ffffff;
}
div.transbox a {
  color:#ffffff;
}
div.transbox a:hover{
  color:green;
}
h1 {
            font-size: 20px;
            color: #111;
        }

        .content {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .tt-hint,
        .hello1 {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 30px;
            line-height: 25px;
            outline: medium none;
            padding: 8px 12px;
            width: 310px;
        }
 .tt-hint,
        .hello {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 300px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
                }
      .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>

  $(function() {
    $( "input.hello1" ).autocomplete({
      source: "search1.php"
    });
  });
</script>
</head>


<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbar1">
          	<a href="index.html"><img src="images/logo3.png" width="200px" height="120px" title="logo" /></a>

            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name'];
                $u=$_SESSION['usr_id'] ;?></p></li>
                <li><a href="logout.php">Log Out</a></li>

                <li><a href="login.php"></a></li>
                <li><a href="register.php"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!--<center>
		<div class="form-group">
                        <a target="_BLANK" href="courses.php?u=<?php //echo $u;?>"><input type="submit" name="COURSES" value="Courses Offered" class="btn btn-primary" / method="GET" ></a>
                    </div>
</center>-->
<center>
<div class="button_box2">
<div align="right">
<form action="coursedescription.php" method="get"><br>
<input class="hello1" id="search" name="search" type="text" placeholder="Search Courses">
<input id="submit" class='btn btn-primary' role='button' name="submit" type="submit" value="Register"  align="center" >
</div>
</center>
</form>
<div class="form-group">
        <a href="display_timetable.php"><input type="back" value="TIME TABLE" class="btn btn-primary" /></a>
<!-- </div>
<div class="form-group"> -->
        <a href=""><input type="back" value="Attendance" class="btn btn-primary" /></a>
<!-- </div>
<div class="form-group"> -->
        <a href=""><input type="back" value="Offered Courses" class="btn btn-primary" /></a>
</div>

<br>
<br>
<br>
<br>
<br>
<div class="top-grids">
  <div class="wrap">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="top-grid">
   <center> <h3>Courses Registered</h3></center>

  <p><?php
include('dbconnect.php');
$res1=mysqli_query($con,"select * from courseregistered where sid=$u");
while($name=mysqli_fetch_array($res1))
{
    $cid=$name['cid'];
     $res2=mysqli_query($con,"select * from courses where cid=$cid");
while($name1=mysqli_fetch_array($res2))
{
    $cname=$name1['cname'];
    echo "<p> <a href=details.php?cid=$cid>$cname</a></p>";
}
}
  ?>
</div>
<div class="top-grid">
   <center> <h3>Discussions</h3></center>

  <p><?php
include('dbconnect.php');
$res1=mysqli_query($con,"select * from courseregistered where sid=$u");
while($name=mysqli_fetch_array($res1))
{
    $cid=$name['cid'];
     $res2=mysqli_query($con,"select * from courses where cid=$cid");
while($name1=mysqli_fetch_array($res2))
{
    $cname=$name1['cname'];
    $res11=mysqli_query($con,"select * from topicsstu where topic_name='$cname' order by topic_date desc");
    while($res22=mysqli_fetch_array($res11))

     {
     	$tid=$res22['topic_id'];
      $sid=$res22['topic_by'];
      $dat=$res22['topic_date'];

     	$topic_sub=$res22['topic_subject'];

     	  echo "<p> <a href=topicdisc2.php?tid=$tid>$topic_sub in $cname</a></p>";
   // echo "<p>--> <a href=details.php?cid=$cid>$cname</a></p>";
}
}
}
  ?>
<br> <br>
</div>


<div class="top-grid last-topgrid">
   <center> <h3>Announcements</h3></center>

  <p><?php
include('dbconnect.php');
$res1=mysqli_query($con,"select * from courseregistered where sid=$u");
while($name=mysqli_fetch_array($res1))
{
    $cid=$name['cid'];
     $res2=mysqli_query($con,"select * from courses where cid=$cid");
while($name1=mysqli_fetch_array($res2))
{
    $cname=$name1['cname'];
    $res11=mysqli_query($con,"select * from announcement where sub='$cname' order by dt desc");
    while($res22=mysqli_fetch_array($res11))

     {


      $topic_sub=$res22['des'];

        echo "<p> <a>$topic_sub in $cname</a></p>";
   // echo "<p>--> <a href=details.php?cid=$cid>$cname</a></p>";
}
}
}
  ?>
  <br> <br>
</div>
<div class="clear"> </div>


</div>
</div>
</body>
</html>
