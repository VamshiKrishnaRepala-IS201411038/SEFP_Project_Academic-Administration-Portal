<?php

foreach($_GET['check_list'] as $selected)
{
	$c=array();
	$c=explode(',',$selected);
	echo "$c[0]:$c[1]:$c[2]";
}


?>