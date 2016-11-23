<?php

$connect = mysqli_connect("localhost","root","","pv1") or die("Opps! Something went wrong.");
mysqli_select_db($connect,"sakila") or die("Opps! DB went something wrong.");

?>