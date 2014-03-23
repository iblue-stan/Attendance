<?php 
  include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");
	$pk = $_GET['pk'];
	$sql = "UPDATE vk SET l_check = if(l_check=0,1,0) WHERE pk = $pk";
	mysql_query($sql);

	echo '<meta http-equiv=REFRESH CONTENT=0;url=attendance.php>'

 ?>