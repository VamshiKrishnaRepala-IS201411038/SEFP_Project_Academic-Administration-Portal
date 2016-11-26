<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance | Academic Administration Application</title>
	   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>


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
include_once 'dbconnect.php';
 $u=$_SESSION['usr_id'] ;
 $cid=$_GET['cid'];
$fid=$_GET['fid'];
 $res1=mysqli_query($con,"select * from attendance where sid=$u and cid=$cid and fid=$fid order by dt  desc");
 $t=0;
 if(mysqli_num_rows($res1)==0)
 {
    $t=1;
    echo "No Results";
 }
 if($t==0)
 {
 echo "<div class='container'><table class='table table-striped '>
    <thead>
      <tr>
        <th>Attendance</th>
        <th>Mark<th>
        </tr>
    </thead>
    <tbody>";
 while($name=mysqli_fetch_array($res1))
{
    $cid=$name['cid'];
     $res2=mysqli_query($con,"select * from courses where cid=$cid");

while($name1=mysqli_fetch_array($res2))
{
    $cname=$name['dt'];
 $cid=$name['mark'];
 $fid=$name1['fid'];
        echo "<tr><td>$cname</td> <td>$cid</td></tr>";
        echo "<br>";
}
}
}
 $sql = "select * from attendance where sid=$u";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

$t = 0;

} else {
  $t = 1;
    echo "Sorry 0 results <br> ";
}
$con->close();

?>
</div>
</tbody>
</table>
</body>
</html>
