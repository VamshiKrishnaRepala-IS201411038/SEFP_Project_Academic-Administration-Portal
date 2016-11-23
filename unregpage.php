
<?php
$id=$_GET['id'];
$cid=$_GET['cid'];
$fid=$_GET['fid'];
$var=$_GET['var'];
include('dbconnect.php');
$res2=mysqli_query($con,"delete from courseregistered where sid=$id and cid=$cid and fid=$fid");
echo "<script type='text/javascript'>alert('Succesfully UNRegistered !!Course : $var');
window.location='stupage.php';
</script> ";
//sleep(10);
?>