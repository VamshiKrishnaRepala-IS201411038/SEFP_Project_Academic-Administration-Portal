
<?php
session_start();

include_once 'dbconnect.php';
 if (isset($_SESSION['usr_id']))  
  {
  	//echo $_SESSION['usr_id']; 
  	$id=$_SESSION['usr_id'];
  	 $cid =$_SESSION['cid'];
        $n=$_SESSION['n1'] ;
  }
$res1=mysqli_query($con,"select * from topicsstu where topic_subject='$n' and subject_id=$cid");
if(mysql_num_rows($res1) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else 
            {
            	echo "something is there";
            }

?>