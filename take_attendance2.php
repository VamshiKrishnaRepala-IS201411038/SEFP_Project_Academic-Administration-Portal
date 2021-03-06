<?php
session_start();
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
include_once 'dbconnect.php';
$cid = mysqli_real_escape_string($con,$_GET['cid']);
$sql = " select now() as t,s.sid,c.cid,c.fid,s.name,s.roll_no from students s,courseregistered c where c.sid = s.sid and c.cid=$cid;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<div class='container'><table class='table table-striped '>
    <thead>
      <tr>
        <th><center>Mark attendance</center></th>
        <th><center>Student Name</center></th>
        <th><center>Roll No.</center></th>
        </tr>
    </thead>
    <tbody>";
$t = 0;
echo "<form action='mark_attendance.php' method='post'>";
    while($row = $result->fetch_assoc()) {

        echo "<tr><td><center><input type='checkbox' name='check_list[]' value='$row[sid],$row[cid],$row[fid],$row[t]'>
        </center></td><td><center>"."$row[name]"."</center></td><td><center>"."$row[roll_no]"."</center></td> </tr>";
        echo "<br>";
    }
    echo "</div>
    </tbody>
    </table>
    <center>
<input type='submit' name='submit' value='submit'></center></form>";


} else {
  $t = 1;
    echo "Sorry 0 results <br> ";
}
$con->close();

?>
<div class="form-group">
        <a href="admin_home.php"><input type="back" value="Back to home" class="btn btn-primary" /></a>
</div>

</body>
</html>
