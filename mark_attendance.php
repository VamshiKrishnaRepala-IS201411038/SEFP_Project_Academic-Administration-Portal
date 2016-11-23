<?php
session_start();
include_once 'dbconnect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance | Academic Administration Application</title>
	   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

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
            <a class="navbar-brand" href="index.php">Academic Administration Application</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>

                <li><a href="login.php"></a></li>
                <li><a href="register.php"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
$a1=array();
foreach($_POST['check_list'] as $selected)
{
  $c=array();
	$c=explode(',',$selected);

    $a11=array_push($a1,$c[0],$c[1],$c[2],$c[3]);
	//echo "$c[0]  :  $c[1] : $c[2] : $c[3] <br>";

  $sql = "insert into attendance(sid,cid,fid,dt,mark) values($c[0],$c[1],$c[2],'$c[3]','Present')";
  $result = $con->query($sql);
}
//echo "$c[1] ";
$sql1="select distinct sid  from courseregistered where cid=$c[1]";
$result1=$con->query($sql1);
while($num=mysqli_fetch_array($result1))
{
    $sid=$num['sid'];

    $k=sizeof($a1);

    $i=0;
    $j=0;
    while($i<sizeof($a1))

    {
        $k=$a1[$i];

        if($sid!=$a1[$i])
        {
           $j=$j+4;
        }
        if($j==sizeof($a1))
        {
         $k1=$i+1;
         $k2=$i+2;
         $k3=$i+3;
         echo "*******";
          $sql22= "insert into attendance(sid,cid,fid,dt,mark) values($sid,$a1[$k1],$a1[$k2],'$a1[$k3]','ABSENT')";
  $result22 = $con->query($sql22);
        }
        $i=$i+4;
    }
}
$con->close();

?>

<div class="container">
  Succesfully taken attendance
</div>
<div class="form-group">
        <a href="admin_home.php"><input type="back" value="Back to home" class="btn btn-primary" /></a>
</div>

</body>
</html>
