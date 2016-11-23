<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uplaod Timetable | Academic Administration Application</title>
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
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>

                <li><a href="login.php"></a></li>
                <li><a href="register.php"></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>


<?php
   if(isset($_FILES['pdf'])){
      $errors= array();
      $file_name = $_FILES['pdf']['name'];
      $file_size =$_FILES['pdf']['size'];
      $file_tmp =$_FILES['pdf']['tmp_name'];
      $file_type=$_FILES['pdf']['type'];
      move_uploaded_file($file_tmp,"timetable.pdf");
      echo "Successfully Uploaded";
     }
?>
      <form action="upload_timetable.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="pdf" />
         <input type="submit"/>
      </form>
      <script src="js/jquery-1.10.2.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <div class="form-group">
              <a href="admin_home.php"><input type="back" value="Back to home" class="btn btn-primary" /></a>
      </div>

   </body>
</html>
