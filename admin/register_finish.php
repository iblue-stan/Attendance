<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once("cklv.php");
include("mysql_connect.inc.php");

$id = trim($_POST['id']);
$pw = trim($_POST['pw']);
$pw2 = trim($_POST['pw2']);

$user_name = trim($_POST['user_name']);

$pick_class = trim($_POST['pick_class']);

$AA = trim($_POST['AA']);

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2) {
  $query = mysql_query("SELECT user_phone FROM user WHERE user_phone=$id ");
  if (mysql_num_rows($query) != 0) {
    echo "Username already exists";
    header("refresh:1; url=register.php");

  }else {
        $sql = "insert into user (user_phone, user_pwd, user_name, user_class,user_permission) values ('$id', '$pw', '$user_name','$pick_class','$AA')";
        if(mysql_query($sql))
        {
             echo '新增成功!';
             echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';
        }else {
             echo '新增失敗!';
             echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';
        }

    
  }

}else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.html>';
}

?>