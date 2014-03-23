<?php 
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");


$user_phone = $_POST['phone'];
$pwd = $_POST['pwd'];

if($user_phone!= null &&$pwd != null  ){
  $sql ="UPDATE user SET  user_pwd=$pwd where user_phone=$user_phone ";
  echo $sql;
  mysql_query($sql)  or die(mysql_error());
  echo '<meta http-equiv=REFRESH CONTENT=0;url=../member.php>';

}


?>


