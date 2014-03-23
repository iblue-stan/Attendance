<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$AA = $_POST['AA'];
$class = $_POST['class'];
$join = $_POST['join'];

$query = mysql_query("SELECT * FROM user WHERE user_phone=$phone");
if (mysql_num_rows($query) != 0) {
    echo "User already exists";
}else {
    $sql = "insert into user (user_phone, user_pwd, user_name, user_class, user_permission, user_join) values ('$phone', '$pw', '$name','$class','$AA', '$join')";
    if(mysql_query($sql)) echo 'true';
    else echo "failed";
}


?>