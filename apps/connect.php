<?php 
session_start();
date_default_timezone_set('Asia/Taipei'); ?>

<?php

include_once("mysql_connect.inc.php");
$phone = $_POST['phone'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user where user_phone = '$phone'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

if($phone != null && $pw != null && $row['user_phone'] == $phone && $row['user_pwd'] == $pw ) {
  $_SESSION['phone'] = $phone;
	$_SESSION['loginname'] = $row['user_name'];
	$_SESSION['id'] = $row['id'];
  $_SESSION['permission'] = $row['user_permission'];
    
    if ($row['user_permission'] == 1){
         $_SESSION['user_permission'] = $row['user_permission'];
        echo '管理員登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url="../admin/index.php">';
    }

    if ($row['user_permission'] == 2){
        $_SESSION['user_permission'] = $row['user_permission'];
        echo "使用者登入成功";
        echo '<meta http-equiv=REFRESH CONTENT=1;url="../member.php">';
    }

}else{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url="../index.php">';
}
?>
