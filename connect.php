<?php
session_start();
date_default_timezone_set('Asia/Taipei');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("mysql_connect.inc.php");
$phone = filter_input(INPUT_POST,'id');
$pw = filter_input(INPUT_POST,'pw');

$sql = "SELECT * FROM user WHERE user_phone = '$phone'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

if ($phone != null && $pw != null && $row['user_phone'] == $phone && $row['user_pwd'] == $pw) {
    $_SESSION['username'] = $phone;
    $_SESSION['loginname'] = $row['user_name'];
    $_SESSION['id'] = $row['id'];

    if ($row['user_permission'] == 1) {
        $_SESSION['user_permission'] = $row['user_permission'];
		include_once("fixed.php");
        echo '<br /><br /><br /><center>管理員登入成功!</center>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=admin.php>';
    }

    if ($row['user_permission'] == 2) {
        $_SESSION['user_permission'] = $row['user_permission'];
        include_once("float.php");
        echo "<br /><br /><br /><center>使用者登入成功</center>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
    }
} else {
    echo '<br /><br /><br />登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}