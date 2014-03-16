
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");



$phone = trim($_POST['phone']);
$name = trim($_POST['name']);
$pwd = trim($_POST['pwd']);
$class = trim($_POST['class']);

echo $class;

if($_SESSION['username'] != null && $phone!= null &&$pwd != null  ){

        $sql ="UPDATE user SET user_name='$name', user_class= '$class', user_phone='$phone', user_pwd=$pwd where user_phone=$phone ";

        mysql_query($sql)  or die(mysql_error());
        echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';

}


?>


