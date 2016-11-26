

<?php
session_start();
include_once 'dbconnect.php';
 if (isset($_SESSION['usr_id'])) {
$usr_id=$_SESSION['usr_id'];
 }

$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {

    $descp = mysqli_real_escape_string($con, $_POST['descp']);
    $select1 = mysqli_real_escape_string($con, $_POST['hello']);
    $c1=mysqli_query($con,"select * from courses where cid=$select1");
    while($num1=mysqli_fetch_array($c1))
    {
        $k1=$num1['cname'];
    }
    if(strlen($descp) ==0) {
        $error = true;
        $descp_error = "You should enter some description";
    }

    if (!$error)
{
	 if(mysqli_query($con, "INSERT INTO announcement(sub,des,dt,aid) VALUES('".$k1."','".$descp."',NOW() ,'".$usr_id."') ") ) {
            $successmsg = "NOTIFICATION SENT! <a href='facpage.php'>BACK</a>";
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
    <title>ANNOUNCEMENT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

  <nav class="container" >
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
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="signupform">
                <fieldset>


                    <div class="form-group">
                     <label for="name">SUBJECT</label>

           <select name="hello" Emp Name="NEW"  required class="form-control">
            <option value="" >--- Select ---</option>
            <?php
               mysqli_connect ("localhost","root","");
                mysqli_select_db ("testdb");
                $select="testdb";
                if (isset ($select)&&$select!=""){
                $select=$_POST ['NEW'];
            }
            ?>
            <?php
                $list=mysqli_query($con,"select * from courses where fid=$usr_id");

            while($row_list=mysqli_fetch_assoc($list)){
            ?>
                    <option value="<?php echo $row_list['cid']; ?> "<?php if($row_list['cid']==$select){ echo "selected"; } ?> >
                                         <?php echo $row_list['cname']; ?>
                    </option>

                <?php
            }

                ?>
                <span class="text-danger"><?php if (isset($d_error)) echo $d_error; ?></span>
            </select>
                    </div>



                    <div class="form-group">
                        <label for="name">TEXT</label>
                        <textarea  name="descp"  rows = "5" cols = "60" placeholder="Enter the subject" required class="form-control" /></textarea>
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
