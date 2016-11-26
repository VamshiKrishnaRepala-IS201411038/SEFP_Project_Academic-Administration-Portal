<
!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<?php
session_start();
$id=$_GET['id'];
$cid=$_GET['cid'];
$fid=$_GET['fid'];
$var=$_GET['var'];
include('dbconnect.php');
$res2=mysqli_query($con,"delete from courseregistered where sid=$id and cid=$cid and fid=$fid");
$res4=mysqli_query($con,"select * from topicsstu where subject_id=$cid");
while($num=mysqli_fetch_array($res4))
{	
	$topic_id=$num['topic_id'];
	$res5=mysqli_query($con,"delete from posts where post_topic=$topic_id and post_by=$id");
}
$res3=mysqli_query($con,"delete from topicsstu where topic_by=$id and subject_id=$cid");
echo "<div id='snackbar'>Succesfully Unregistered !! $var !!!</div>";
function myFunction() {
	echo"<script>

    var x = document.getElementById('snackbar');
    x.className = 'show';
    setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);";
    echo "</script>";
}
$_SESSION['message']="Succesfully Unregistered !!course $var !!!";
 echo "<script LANGUAGE='JavaScript'>
 //window.alert('Succesfully UNRegistered !!Course : $var');
window.location='stupage.php';

</script> ";
//sleep(10);
if (isset($_GET['var']))  
  {
  	
  //myFunction();
  }
?>
<!--<form action='stupage.php' method='POST' name='frm'>
<input type='hidden' name='chars' value='<?php //echo "something"; ?>'>
</form>
<script type="text/javascript">
    document.frm.submit();
</script>
-->
</body>
</html>



