
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
date_default_timezone_set('Asia/Taipei'); 


include("mysql_connect.inc.php");

$user_phone=$_SESSION['username'];

$sql = "SELECT user_join FROM user WHERE user_phone=$user_phone";
$result = mysql_query($sql);
$fetch = mysql_fetch_assoc($result);

$join = strtotime($fetch['user_join']);
$sepecial = "";

// $time_diff = round(abs($join - strtotime(date('Y-m-d')))/60/60/24/52, 0);
$time_diff = round(abs($join - strtotime(date('Y-m-d')))/60/60/24/365, 0);

/*
if wage smaller than 10 years
1~3 give 7 days 
..
..
..
if wage bigger than 10 years 
*/

if($time_diff < 10) { 
  if($time_diff >= 1 && $time_diff < 3) $sepecial = 7;
  elseif($time_diff >= 3 && $time_diff < 5) $sepecial = 10;
  elseif($time_diff >= 5 && $time_diff < 10) $sepecial = 14; 
}else $sepecial =  ($time_diff - 9) + 14 ;

if ($sepecial > 30) $sepecial = 30;

// echo "年資".$time_diff."年<br>";
// echo "特休".$sepecial."天";
 ?>