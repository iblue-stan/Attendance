<?php 
session_start(); 
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

$phone = trim($_POST['phone']);
$time = trim($_POST['time']);


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($phone != null && $time != null) {
  
$sql = "SELECT * FROM user where user_phone ='$phone' ";
$r = mysql_query($sql);
$row = mysql_fetch_assoc($r);
$id=$row['id'];
  if ($id == 0) {
    echo "無恥員工+.+";
    //header("refresh:1; url=register.php");

  }else {
        $sql = "insert into var (var_phone, var_time,id) values ('$phone', '$time', '$id')";
        if(mysql_query($sql))
        {
             
             echo '新增成功!';

             echo '<meta http-equiv=REFRESH CONTENT=0;url=../admin/attendance.php>';
        }else {
             echo '新增失敗!';
             echo '<meta http-equiv=REFRESH CONTENT=0;url=../admin/attendance.php>';
        }

    
  }

}else{
        echo '您無權限觀看此頁面!';
       // echo '<meta http-equiv=REFRESH CONTENT=0;url=index.html>';
}

?>