<?php
session_start();
if (isset($_SESSION['login'])!=true)
{
header("Location:Student_Login.php");
}

include_once 'dbconnect.php';
?>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    function myFunction() {
        var x;
       var r = confirm("SUCCESFUULY REGISTERED");

        //else {
         //   x = "You pressed Cancel!";
        //}
        //document.getElementById("demo").innerHTML = x;
    }
</script>
<style>
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
    #button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: -10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


    a:link {
    text-decoration: none;
    color:blue;
}

a:visited {
    text-decoration: none;
    color:blue;
}

a:hover {
    text-decoration: none;
    color:blue;
}

a:active {
    text-decoration:none;
}
div.transbox {
    margin-left: 1000px;
    margin-top: 15px;
    width: 90px;
    height: 50px;
  position:relative;
  background-color: green;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: blue;
}
div.transbox a {
  color:#ffffff;
}
div.transbox a:hover{
  color:green;
}
div#transbox {
    margin-left: 1000px;
    margin-top: 15px;
    width: 70px;
    height: 30px;
  position:relative;
  background-color: white;
  border: 1px solid white;
  opacity: 0.5;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}


div#transbox a {
  color:#ffffff;
}
div#transbox a:hover{
  color:blue;
}
</style>
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
          <center>	<a href="index.html"><img src="images/logo3.png" title="logo" /></a>
          </center>
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


<?php
 if (isset($_SESSION['usr_id']))
  {
  	//echo $_SESSION['usr_id'];
  	$id=$_SESSION['usr_id'];
  }
$var=$_GET['search'];
//echo $var."<br>";
include('dbconnect.php');
$res=mysqli_query($con,"select * from courses where cname='$var' ");
$name=mysqli_fetch_array($res);
$fid=$name['fid'];
$cid=$name['cid'];
$des=$name['descp'];
//echo $fid ." :" . $cid."<br>";

$res1=mysqli_query($con,"select * from courseregistered where sid=$id and cid=$cid and fid=$fid");
$n=mysqli_num_rows($res1);
//echo "$n";
if ($n!=0)
{
	echo "<script type='text/javascript'>alert('Already Registered For the Course $var');
window.location='stupage.php';
</script>";
	//header("Location: stupage.php?message=You have already registered for that course");
}
echo "<center>";
if($n==0)
{
$var1=urlencode($var);
$res3=mysqli_query($con,"select * from faculty where fid=$fid");
$name1=mysqli_fetch_array($res3);
$fname=$name1['name'];
echo "<center>";
echo "<div class='container'><table class='table table-striped '>
<tbody>
  <tr> <td><center> Course </center></td> <td><center> $var </center></td> </tr>";
echo "<br>";
echo "<tr> <td><center> Description </td> <td><center> $des </center></td> </tr>";
echo "<br>";
echo "<tr> <td><center> Faculty </td> <td><center>  $fname </center></td> </tr></tbody></table>";
echo "<br>";
echo "<br>";
echo "<button class='btn btn-info'><a href=regpage.php?id=$id&cid=$cid&fid=$fid&var=$var1><h5>Register</h5></a></button>";
echo "</center>";
	//$res2=mysqli_query($con,"insert into courseregistered (sid,cid,fid) values ($id,$cid,$fid)");
	//echo "<script type='text/javascript'>alert('Succesfully Registered for the Course $var');
//window.location='stupage.php';
//</script>";
}
?>
</body>
</html>
