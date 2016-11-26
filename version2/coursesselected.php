<html>
<head>
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
       
    </div>
</nav>
<?php
session_start();
$_SESSION['login']=false;
$u=$_GET['var2'];
require_once 'dbconnect.php';
$var1=$_GET['var1'];
$res=mysqli_query($con,"select * from courses where fid='$var1'");
echo $u;
?>

<form action='coursesregistered.php' method='get'>
<?php
while($name=mysqli_fetch_array($res))
{
$cnam=$name['cname'];
$cid=$name['cname'];
$fid=$name['fid'];
echo "<input type='checkbox' name='check_list[]' value='$cid,$fid,$u' ><label>$cnam</label><br>";
}
echo "<input type='submit' name='submit' value='submit'>";
?>
</form>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>