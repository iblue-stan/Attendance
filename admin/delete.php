<?php
include("../apps/mysql_connect.inc.php");

$pk = $_GET['phone'] ;
$sql = "delete from user where user_phone = $pk";

if(mysql_query($sql)){
  echo "success";
}else 
echo "fail";

?>
