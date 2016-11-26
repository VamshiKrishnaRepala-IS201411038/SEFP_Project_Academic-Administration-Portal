<?php
session_start();

include_once 'dbconnect.php';
 if (isset($_SESSION['usr_id']))  
  {
  	//echo $_SESSION['usr_id']; 
  	$id=$_SESSION['usr_id'];
  	 $cid=$_SESSION['cid1'];
        $n=$_SESSION['n1'] ;
  }
$r=$_GET['reply-content'];

 if(strlen($r)!=0)
  {
  	$res=mysqli_query($con,"INSERT INTO POSTS(post_content,post_date,post_topic,post_by) VALUES ('".$r."',NOW(),'".$cid."','".$id."')");
  	$_SESSION['form_submit']='true';
  	$location="factopdisc.php?tid=$cid";
  	header("Location:".$location);
  }

?>