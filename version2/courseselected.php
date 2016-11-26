<html>
<head>
<title>
courses</title>
</head>
<body>
</body>
<?php
require_once 'dbconnect.php';
$var1=$_GET['var1'];
$res=mysqli_query($con,"select * from courses where fid='$var1'");
while($name=mysqli_fetch_array($res))
{
$cnam=$name['cname'];

echo "<center>";
echo "<h1>";
echo "$cnam";
echo "</h1>";
echo "</center>";

echo "<br>";
}
?>
</html>