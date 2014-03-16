<?php
	include("mysql_connect.inc.php");
	
	 $pk = $_GET['user_phone'] ;
     $sql = "delete from user where user_phone = $pk";
	 mysql_query($sql);
?>

<meta http-equiv=REFRESH CONTENT=0;url=admin.php>