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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
</body>
</html>
<?php
 if (isset($_SESSION['usr_id']))
  {
  	//echo $_SESSION['usr_id'];
  	$id=$_SESSION['usr_id'];
  }
$cid=$_GET['cid'];
include('dbconnect.php');
$res1=mysqli_query($con,"select * from courses where cid=$cid");

while($name=mysqli_fetch_array($res1))
{
	$fid=$name['fid'];
	$cname=$name['cname'];
	$cname1=urlencode($cname);
	$descp=$name['descp'];
	$res2=mysqli_query($con,"select * from faculty where fid=$fid");
    $name1=mysqli_fetch_array($res2);
    $fname=$name1['name'];

    echo "<center>";
    echo "<div class='container'><table class='table table-striped '>
    <tbody>
      <tr> <td><center> Course </center></td> <td><center> $cname </center></td> </tr>";
    echo "<br>";
    echo "<tr> <td><center> Description </td> <td><center> $descp </center></td> </tr>";
    echo "<br>";
    echo "<tr> <td><center> Faculty </td> <td><center>  $fname </center></td> </tr></tbody></table>";
    echo "<br>";
    echo "<br>";



echo "<br>";
echo " <a href=unregpage.php?id=$id&cid=$cid&fid=$fid&var=$cname1 class='btn btn-primary' role='button'><h6>Unregister</h6></a>";
}
$n=urlencode($cname);
  $_SESSION['cid'] = $cid;
  $_SESSION['n1'] = $n;

echo "<a href=addtopic.php class='btn btn-primary' role='button'><h6> Add Discusion</h6> </a>";
//$s=urlencode('current discussions.php');
echo "<a href=currentdiscussions.php class='btn btn-primary' role='button'><h6>Current Discussions</h6></a>";

?>
