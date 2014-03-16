<?php session_start(); 
date_default_timezone_set('Asia/Taipei'); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$l_id = $_POST['id'];

$sql = "SELECT user_phone FROM user WHERE id = $l_id";
$getphone_sql = mysql_query($sql);
$getphone = @mysql_fetch_assoc($getphone_sql);
$phone = $getphone['user_phone'];

$l_start = $_POST['l_start'];
$l_end = $_POST['l_end'];
$l_condition = $_POST['l_condition'];
$l_other = $_POST['l_other'];

if (strtotime($l_start) > strtotime($l_end)){
	echo "時間格式有誤";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}else {

if($_SESSION['username'] != null)
{
  $sql =" insert into vk (l_phone,l_start,l_end,l_condition,l_memo, id) values ('$phone', '$l_start','$l_end','$l_condition','$l_other', $l_id)";
      mysql_query($sql)  or die(mysql_error());
      echo "請假申請已成功,等待專員審核,通過後將會以mail通知";
	  echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';

}else{
   echo '表格未填好!請重新填表!';
   echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}

	

}



?>

