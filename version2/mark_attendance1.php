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
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

<body>

  <nav class="container" >
      <div class="">
          <div class="navbar-header">

              <a class="navbar-brand" href="index.php"></a>
          </div>
          <!-- <div class="collapse navbar-collapse" id="navbar1">
              <ul class="nav navbar-nav navbar-right">
                  <?php if (isset($_SESSION['usr_id'])) { ?>
                  <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                  <li><a href="logout.php">Log Out</a></li>

                  <li><a href="login.php"></a></li>
                  <li><a href="register.php"></a></li>
                  <?php } ?>
              </ul>
          </div> -->

            	<a href="index.php"><img src="images/logo3.png" width="200px" height="120px" title="logo" /></a>

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
          $sql22= "insert into attendance(sid,cid,fid,dt,mark) values($sid,$a1[$k1],$a1[$k2],'$a1[$k3]','ABSENT')";
  $result22 = $con->query($sql22);
        }
        $i=$i+4;
    }
}
$con->close();
echo "<div id='snackbar'>Succesfully taken attendance !!!</div>";
function myFunction() {
  echo"<script>

    var x = document.getElementById('snackbar');
    x.className = 'show';
    setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);";
    echo "</script>";
}

$_SESSION['message']="Succesfully taken attendance !!!";

 echo "<script LANGUAGE='JavaScript'>
 //window.alert('Succesfully taken attendance !!!');
window.location='facpage.php';

</script> ";
?>


</body>
</html>
