
<?php
$id=$_GET['id'];
$cid=$_GET['cid'];
$fid=$_GET['fid'];
$var=$_GET['var'];
include('dbconnect.php');
$res2=mysqli_query($con,"insert into courseregistered (sid,cid,fid) values ($id,$cid,$fid)");
echo "<script type='text/javascript'>alert('Succesfully Registered !!Course : $var');
window.location='stupage.php';
</script> ";
//sleep(10);
?>