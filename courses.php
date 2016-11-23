<html>
<head>
<style>
 h1 {
            font-size: 20px;
            color: #111;
        }

        .content {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .tt-hint,
        .hello1 {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }
 .tt-hint,
        .hello {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 400px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
                }
            .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>

  $(function() {
    $( "input.hello1" ).autocomplete({
      source: "search1.php"
    });
  });
</script>
<title>
SAERCH COURSES
</title>
</head>
<body>
<!--<center><h1>Faculty members</center>-->
<?php
session_start();
$_SESSION['login']=false;
$u=$_GET['u'];

/*echo "$u";
require_once 'dbconnect.php';
$res=mysqli_query($con,"select * from faculty");
while($name=mysqli_fetch_array($res))
{
$nam=$name['name'];
$fid=$name['fid'];
echo "<table>";
echo "<tr>";
echo "<td align=center valign=middle>";
echo "<button><a href=coursesselected.php?var1=$fid&var2=$u>$nam</a></button>";
echo "</td>";
echo "</tr>";
echo "<table>";
echo "<br>";
}*/

?>
<center>
<div class="button_box2">
<div class="content">
<form action="coursedescription.php" method="get"><br>
<input class="hello1" id="search" name="search" type="text" placeholder="TYPE THE COURSE NAME"><br><br>
<input id="submit" name="submit" type="submit" value="Search" class="button">
</div>
</center>
</form>
</body>
</html