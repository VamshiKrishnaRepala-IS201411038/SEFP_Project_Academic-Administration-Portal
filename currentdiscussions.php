<?php
session_start();
if (isset($_SESSION['login'])!=true)
{
header("Location:Student_Login.php");
}

include_once 'dbconnect.php';
?><html>
<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

body {
    /*background-color: lightblue;
    text-align: center;         /* make sure IE centers the page too */
}

#wrapper {
    width: 900px;
    margin: 0 auto;             /* center the page */
}

#content {
    background-color: #fff;
    border: 1px solid #000;
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 100%;                /* fill up the entire div */
}

#menu {
    float: left;
    border: 1px solid #000;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0 30px;
    background-color: #FFF;
    text-align: left;
    font-size: 85%;
}

#menu a:hover {
    background-color: #009FC1;
}

#userbar {
    background-color: #fff;
    float: right;
    width: 250px;
}

#footer {
    clear: both;
}

/* begin table styles */
table {
    border-collapse: collapse;
    width: 100%;
}

table a {
    color: #000;
}

table a:hover {
    color:#373737;
    text-decoration: none;
}

th {
    background-color: #B40E1F;
    color: #F0F0F0;
}

td {
    padding: 5px;
}

/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}

h3 {margin: 0; padding: 0;}

/* Menu styles */
.item {
    background-color: #00728B;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}

.leftpart {
    width: 70%;
}

.rightpart {
    width: 30%;
}

.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}

.topic-post {
    height: 100px;
    overflow: auto;
}

.post-content {
    padding: 30px;
}

textarea {
    width: 500px;
    height: 200px;
}
</style>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">

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
</body>
<?php

include_once 'dbconnect.php';
 if (isset($_SESSION['usr_id']))
  {
  	//echo $_SESSION['usr_id'];
  	$id=$_SESSION['usr_id'];
  	 $cid =$_SESSION['cid'];
        $n=$_SESSION['n1'] ;
  }
  $n1=urldecode($n);

  echo "<center><h2>Discussions in $n1</h2></center><br><br>";
$res1=mysqli_query($con,"select * from topicsstu where topic_name='$n1' and subject_id=$cid order by topic_date desc");

echo '<div class = "container"> <table border="1">
                      <tr>
                        <th><center> Topic</center></th>
                        <th><center>Created by</center></th>
                      </tr>';
while($res2=mysqli_fetch_array($res1))

     {
     	$tid=$res2['topic_id'];
      $sid=$res2['topic_by'];
      $dat=$res2['topic_date'];
       $a1=mysqli_query($con,"select * from students where sid=$sid");
       $a2=mysqli_fetch_array($a1);
       $sid1=$a2['Name'];
     	$topic_sub=$res2['topic_subject'];

      echo "<tr>";
      echo "<td class='leftpart'>";
     	  echo "<center> <a href=topicdisc.php?tid=$tid>$topic_sub</a></center>";
        echo "</td>";
        echo "<td class='rightpart'><center>";
        echo "$sid1 on $dat";
        echo "</center></td>";
        echo "</tr>";
            }

?>

</html>
