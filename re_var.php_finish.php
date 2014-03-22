<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once("cklv.php");
include("mysql_connect.inc.php");

$var_phone = trim($_POST['id']);
$var_time = trim($_POST['re_var']);




//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($var_phone != null && $var_time != null) {
  
$sql = "SELECT * FROM user where user_phone ='$var_phone' ";
$r = mysql_query($sql);
$row = mysql_fetch_assoc($r);
$id=$row['id'];
  if ($id == 0) {
    echo "無恥員工+.+";
    //header("refresh:1; url=register.php");

  }else {
        $sql = "insert into var (var_phone, var_time,id) values ('$var_phone', '$var_time', '$id')";
        if(mysql_query($sql))
        {
             
             echo '新增成功!';

             //echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';
        }else {
             echo '新增失敗!';
             //echo '<meta http-equiv=REFRESH CONTENT=0;url=admin.php>';
        }

    
  }

}else{
        echo '您無權限觀看此頁面!';
       // echo '<meta http-equiv=REFRESH CONTENT=0;url=index.html>';
}

?>