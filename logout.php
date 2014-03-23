<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['username']);
unset($_SESSION['loginname']);
unset($_SESSION['id']);
unset($_SESSION['user_permission']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>
