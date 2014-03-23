<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

$phone = $_POST['phone'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$class = $_POST['class'];
$join = $_POST['join'];

if($_SESSION['phone'] != null && $phone!= null &&$pwd != null  ) {
  $sql ="UPDATE user SET user_name='$name', user_class= '$class', user_phone='$phone', user_pwd=$pwd, user_join='$join' where user_phone = '$phone' ";
  mysql_query($sql)  or die(mysql_error());

  if($_SESSION['phone'] != null) {
    if ($_SESSION['user_permission'] == 1) echo "true";
    elseif ($_SESSION['user_permission'] == 2) echo "true";

  }else{
    echo '登入失敗!';
    exit();   
  }

}
?>
