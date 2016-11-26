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
  </nav><script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>


<?php
if (isset($_SESSION['usr_id']))
{
  $id=$_SESSION['usr_id'];
}
include_once 'dbconnect.php';

$sql = "select courses.cid,courses.cname,faculty.name from courses,faculty where faculty.fid = courses.fid and faculty.fid=$id;";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<div class='container'><table class='table table-striped '>
    <thead>
      <tr>
        <th><center>Course Name</center></th>
        <th><center>Faculty Name</center></th>
        </tr>
    </thead>
    <tbody>";
$t = 0;
    while($row = $result->fetch_assoc()) {
        //$temp = urlencode($row[title]);
        echo "<tr><td><center><a href=take_attendance3.php?cid=$row[cid]>"."$row[cname]"."</center></td><td><center>"."$row[name]"."</center></td> </tr>";
        echo "<br>";
    }
} else {
  $t = 1;
    echo "Sorry 0 results <br> ";
}
$con->close();

?>
</div>
</tbody>
</table>
<div class="form-group">
        <a href="facpage.php"><input type="back" value="Back to home" class="btn btn-primary" /></a>
</div>

</body>
</html>
