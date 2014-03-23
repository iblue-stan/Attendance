<?php session_start(); 
date_default_timezone_set('Asia/Taipei'); 
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");
?>

<?php
$phone = $_POST['phone'];

$sql = "SELECT id FROM user WHERE user_phone = $phone";
$geid_sql = mysql_query($sql);
$getid = @mysql_fetch_assoc($geid_sql);
$id = $getid['id'];

$l_start = $_POST['l_start'];
$l_end = $_POST['l_end'];
$l_condition = $_POST['l_condition'];
$l_other = $_POST['l_other'];

if (strtotime($l_start) > strtotime($l_end)){
	echo "時間格式有誤";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}else {

if($_SESSION['phone'] != null)
{
  $sql =" insert into vk (l_phone,l_start,l_end,l_condition,l_memo, id) values ('$phone', '$l_start','$l_end','$l_condition','$l_other', '$id')";
      mysql_query($sql)  or die(mysql_error());
      echo "請假申請已成功,等待專員審核,通過後將會以mail通知";
	  echo '<meta http-equiv=REFRESH CONTENT=0;url="../member.php">';

}else{
   echo '表格未填好!請重新填表!';
   echo '<meta http-equiv=REFRESH CONTENT=2;url="../member.php">';
}

	

}



?>

