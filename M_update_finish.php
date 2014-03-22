
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");



$user_phone = trim($_POST['phone']);

$pwd = trim($_POST['pwd']);


if($_SESSION['username'] != null && $user_phone!= null &&$pwd != null  ){

        $sql ="UPDATE user SET  user_pwd=$pwd where user_phone=$user_phone ";

        mysql_query($sql)  or die(mysql_error());
        echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';

}


?>


