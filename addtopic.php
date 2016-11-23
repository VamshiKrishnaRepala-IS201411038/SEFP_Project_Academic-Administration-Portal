
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
$n1=urldecode($n);
$error = false;

//check if form is submitted
if (isset($_POST['createtopic'])) {
    $cname = mysqli_real_escape_string($con, $_POST['topic_name']);

    $descp = mysqli_real_escape_string($con, $_POST['topic_description']);

    //name can contain only alpha characters and space
    if (strlen($cname) ==0) {
        $error = true;
        $cname_error = "create some topic";
    }

    if(strlen($descp) ==0) {
        $error = true;
        $descp_error = "You should enter some description";
    }
    $fid=$_SESSION['usr_id'];
    if (!$error)
{

       if(mysqli_query($con, "INSERT INTO topicsstu(topic_subject,topic_date,topic_name,topic_description,topic_by,subject_id) VALUES('".$cname."',NOW(), '" . $n1 . "', '" . $descp. "','".$id."','".$cid."')")) {
       	$successmsg = "Successfully Created topic! <a href='details.php?cid=$cid'>BACK</a>";

	}

}
        else {
            $errormsg = "Error in submitting please submit the form...Please try again later!";
      }
    /*if(!$error)
    {
    	$topicid = mysqli_insert_id($con);

    	if(mysqli_query($con,"INSERT INTO  posts(post_content,post_date,post_topic,post_by) values ('".$descp."',NOW(),'".$topicid."','".$id."')")){ $successmsg = "Successfully Created topic! <a href='details.php?cid=$cid'>BACK</a>";};
    }

         else {
            $errormsg = "Error in submitting please submit the form...Please try again later!";
      }*/
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>ADD TOPIC</title>
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

          </div>
          <div class="collapse navbar-collapse" id="navbar1">
          	<a href="index.html"><img src="images/logo3.png" width="200px" height="120px" title="logo" /></a>
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>


                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" name="topic_name" placeholder="Enter Topic Name" required value="<?php if($error) echo $cname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($cname_error)) echo $cname_error; ?></span>
                    </div>






                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea  name="topic_description"  rows = "5" cols = "60" placeholder="Enter the description of this discussion" required class="form-control" /></textarea>
                        <span class="text-danger"><?php if (isset($descp_error)) echo $descp_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="createtopic" value="Add TOPIC" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
  <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

            </div>
    </div>
    </div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php




?>
</body>
</html>
