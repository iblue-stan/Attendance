<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$phone = trim(filter_input(INPUT_POST, 'phone'));
$name = trim(filter_input(INPUT_POST, 'name'));
$pwd = trim(filter_input(INPUT_POST, 'pwd'));
$class = trim(filter_input(INPUT_POST, 'class'));

if ($_SESSION['username'] != null && $phone != null && $pwd != null) {
    $sql = "UPDATE user SET user_name='$name', user_class= '$class', user_phone='$phone', user_pwd=$pwd where user_phone=$phone ";
    mysql_query($sql) or die(mysql_error());

    if ($_SESSION['username'] != null) {
        if ($_SESSION['user_permission'] == 1) {
            echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';
        } elseif ($_SESSION['user_permission'] == 2) {
            echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
    } else {
        echo '<h1><center>登入失敗!</center></h1>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        exit();
    }
}