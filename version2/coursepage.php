<?php
session_start();
include_once 'dbconnect.php';

$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $cname = mysqli_real_escape_string($con, $_POST['cname']);
    $cpreq = mysqli_real_escape_string($con, $_POST['cpreq']);
    $climit = mysqli_real_escape_string($con, $_POST['climit']);
    $descp = mysqli_real_escape_string($con, $_POST['descp']);

    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$cname)) {
        $error = true;
        $cname_error = "Name must contain only alphabets and space";
    }

    if(strlen($descp) ==0) {
        $error = true;
        $descp_error = "You should enter some description";
    }
    $fid=$_SESSION['usr_id'];
    if (!$error)
{
	if ($climit!="" and $cpreq!="")
	{

        if(mysqli_query($con, "INSERT INTO courses(fid,cname,cpreq,climit,descp) VALUES('".$fid."','" . $cname . "', '" . $cpreq . "', '" . $climit. "','".$descp."')")) {
            $successmsg = "Successfully Created! <a href='facpage.php'>BACK</a>";
	}


	}
	 if ($climit!="" and $cpreq=="")
	{


	 if(mysqli_query($con, "INSERT INTO courses(fid,cname,climit,descp,cpreq) VALUES('".$fid."','" . $cname . "','" . $climit. "','".$descp."','NULL')")) {
            $successmsg = "Successfully Registered! <a href='facpage.php'>BACK</a>";}

	}
	 if ($climit=="" and $cpreq!="")
	{


	 if(mysqli_query($con, "INSERT INTO courses(fid,cname,cpreq,descp,climit) VALUES('".$fid."','" . $cname . "', '" . $cpreq . "','".$descp."','NULL')")) {
            $successmsg = "Successfully Registered! <a href='facpage.php'>BACK</a>";
	}
	}
	 if ($climit=="" and $cpreq=="")
	{


	 if(mysqli_query($con, "INSERT INTO courses(fid,cname,cpreq,descp,climit) VALUES('".$fid."','" . $cname . "','NULL','".$descp."','NULL')")) {
            $successmsg = "Successfully Registered! <a href='facpage.php'>BACK</a>";
	}
	}
}
         else {
            $errormsg = "Error in submitting please submit the form...Please try again later!";
      }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ADD COURSES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<<nav class="container" >
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
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>


                    <div class="form-group">
                        <label for="name">Course Name</label>
                        <input type="text" name="cname" placeholder="Enter Course Name" required value="<?php if($error) echo $cname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($cname_error)) echo $cname_error; ?></span>
                    </div>





                    <div class="form-group">
                        <label for="name">Prerequisites</label>
                        <input type="text" name="cpreq" placeholder="Enter the prerequisites for this course" class="form-control" />

                    </div>

                    <div class="form-group">
                        <label for="name">Limit</label>
                        <input type="number" name="climit" placeholder="Enter the limit of students (Optional)" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">Course Description</label>
                        <textarea  name="descp"  rows = "5" cols = "60" placeholder="Enter the description of this course" required class="form-control" /></textarea>
                        <span class="text-danger"><?php if (isset($descp_error)) echo $descp_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Add" class="btn btn-primary" />
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
</body>
</html>
