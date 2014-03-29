<?php session_start();
date_default_timezone_set('Asia/Taipei'); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>個人管理系統</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<?php
	$id = $_SESSION['username'];//user_phone
	include("float.php");
	include("mysql_connect.inc.php");

	$working_time = "08:00";//上班時間
	$working_outtime = "18:00";//下班時間

//$sql = "SELECT id, user_name FROM user WHERE user_phone = $id";
//$getID_sql = mysql_query($sql);
//$getID = mysql_fetch_assoc($getID_sql);
?>
<input type = hidden name = var_phone value = <?php echo $id; ?>>
<br /><br /><br />

	<form action = "member.php" method = "get">
		輸入日期： 
		    <input type="text" name="keyword" id="datetimepicker">
		    <input class="btn btn-default" type="submit" value="送出">
	</form>
<?php
	$keyword = "";
	if(isset($_GET['keyword']) && $_GET['keyword']!="")
	{
	 $keyword = trim ($_GET['keyword']);//去前後空格
	 $sql ="select user_phone, user_name,user_class,MIN(var_time) AS var_first, MAX(var_time) AS var_last from var join user where var.id = user.id and var.var_time >= '$keyword 00:00:00' and var.var_time <='$keyword 23:59:59'";
     $sql_l = "SELECT * FROM vk INNER JOIN user ON vk.id=user.id WHERE user.user_phone = $id and vk.l_start >= '$keyword 00:00:00' and vk.l_start <='$keyword 23:59:59'";
	}else
	{$sql = "SELECT user_phone, user_name, user_class, MIN(var_time) AS var_first, MAX(var_time) AS var_last
             FROM var INNER JOIN user ON var.id=user.id 
		     WHERE user_phone = $id GROUP BY user_phone,date(var_time)";
	 $sql_l = "SELECT * FROM vk INNER JOIN user ON vk.id=user.id WHERE user_phone = $id";
	}
?>

	<table class="table" >
	  <thead>
        <tr><th>出席狀況</th></tr>
        <tr>
            <th>電話</th>
            <th>姓名</th>
            <th>部門</th>
            <th>上班時間</th>
            <th>下班時間</th>
            <th colspan=2>出席狀態</th>
        </tr>
      </thead>
      <tbody>

<?php
	$r = mysql_query ($sql);
	while( $v_row= mysql_fetch_assoc($r) )
    { 
	  if(empty($v_row['user_phone'])) echo "<tr><td>查無資料";
	  else{
	  $var_first=date('Y-m-d H:i',strtotime($v_row['var_first']));//上班時間
	  $var_last=date('Y-m-d H:i',strtotime($v_row['var_last']));//下班時間
	  $clock_in_time = strtotime(date('H:i',strtotime($v_row['var_first'])));//上班打卡時間
      $clock_uout_time = strtotime(date('H:i',strtotime($v_row['var_last'])));//下班打卡時間
	  $clock_on_time = strtotime($working_time);//公司上班時間
	  $clock_out_time = strtotime($working_outtime);//公司下班時間
      $time_diff = round(abs($clock_in_time - $clock_on_time) / 60,2);
      $time_outdiff = round(abs($clock_uout_time - $clock_out_time) / 60,2);
	  //出席狀態
		//遲到
		if ($time_diff >= 60) {
		$HHH = intval($time_diff/60);
		$MMM = $time_diff%60;
		$late = '遲到'.$HHH.'小時'.$MMM.'分';
		}else {
		$MMM = $time_diff%60;
		$late = '遲到'.$MMM.'分';
		}

		//早退
		if ($time_outdiff >=  60) {
		$HHH = intval($time_outdiff/60);
		$MMM = $time_outdiff%60;
		$lateout = '早退'.$HHH.'小時'.$MMM.'分';
		}else {
		$MMM = $time_outdiff%60;
		$lateout = '早退'.$MMM.'分';
		}

		//加班
		if ($time_outdiff >=  60) {
		$HHH = intval($time_outdiff/60);
		$MMM = $time_outdiff%60;
		$overtime = '加班'.$HHH.'小時'.$MMM.'分';
		}else {
		$MMM = $time_outdiff%60;
		$overtime = '加班'.$MMM.'分';
		}
		
		
	//--echo結果	
	  echo "<tr><td>".$v_row['user_phone'];//電話
	  echo "<td>".$v_row['user_name'];//姓名
	  echo "<td>";//部門
			if ($v_row['user_class'] == 1) echo "資訊部";
			if ($v_row['user_class'] == 2) echo "市場部";
			if ($v_row['user_class'] == 3) echo "行銷部";
	  echo "<td>".$var_first;
	  echo "<td>".$var_last;
		//出席狀態
	  if(date('H:i:s',strtotime($v_row['var_first'])) <= $working_time ) {
			echo "<td>".'準時上班';
		}else {
			echo "<td>".$late;
		}
  
		if(date('H:i:s',strtotime($v_row['var_last'])) >= $working_outtime ) {
			echo "<td>".$overtime;
		}else {
			echo "<td>".$lateout;
		}
	  }
	}
	echo "</tbody></table>";
?>	

<!-- leave table -->

<?php 
	$leave = mysql_query($sql_l);
?>

<?php //我是特休
	$sql_s = "SELECT timestampdiff(hour,`l_start`,`l_end`) as diff 
              from vk INNER JOIN user ON vk.id=user.id
              where `l_condition` = 6 AND user_phone=$id AND l_check=1";
	$total = "";
	$special_q = mysql_query($sql_s);
	while ( $s_row = @mysql_fetch_assoc($special_q) ){
		$total += $s_row['diff'];
	}
?>

	<table class="table" >
        <thead>
			<tr><th>請假狀況</th>
				<th><?php 
						$total = round($total / 24,0);
						echo "已請特休".$total."天";
					?>
				</th>
			</tr>
			<tr>
				<th>電話</th>
				<th>姓名</th>
				<th>部門</th>
					<th>請假期間</th>
				<th>請假事由</th>
				<th>備注</th>
				<th>請假時數</th>
				<th>審核</th>
			</tr>
        </thead>
        <tbody>

<?php 
while ( $l_row = @mysql_fetch_assoc($leave) ){
  $l_start = date('Y-m-d H:i',strtotime($l_row['l_start']));
//--
  $l_Sday = date('d',strtotime($l_row['l_start']));
  $l_Eday = date('d',strtotime($l_row['l_end']));
//--
  $start = strtotime(date('Y-m-d H:i',strtotime($l_row['l_start'])));
  $end = strtotime(date('Y-m-d H:i',strtotime($l_row['l_end'])));
  $time_intervel = (int)round(abs($end - $start)/3600,2);
  $time_intervel = $time_intervel - ($l_Eday - $l_Sday) * 14;
  $short_end = date('Y-m-d-H:i',strtotime($l_row['l_end']));

//--time to day
  if ($time_intervel >= 10) {
  $DDD = intval($time_intervel/10);
  $HHH = $time_intervel%10;
  $time_intervel = $DDD."天".$HHH."小時";
  }else {
  $HHH = $time_intervel%10;
  $time_intervel = $HHH."小時";
  }

?>
  <tr>
	  <td><?php echo $l_row['user_phone'];?></td>
      <td><?php echo $l_row['user_name'];?></td>
      <td><?php 
             if ($l_row['user_class'] == 1) echo "資訊部";
             if ($l_row['user_class'] == 2) echo "市場部";
             if ($l_row['user_class'] == 3) echo "行銷部";?></td>
      <td><?php echo $l_start." ～ ".$short_end;?></td>
      <td><?php
			if ($l_row['l_condition'] == 1) echo "婚";
			if ($l_row['l_condition'] == 2) echo "喪";
			if ($l_row['l_condition'] == 3) echo "事";
			if ($l_row['l_condition'] == 4) echo "病";
			if ($l_row['l_condition'] == 5) echo "生理";
			if ($l_row['l_condition'] == 6) echo "特休";
		  ?>
	  </td>
	  <td><?php echo $l_row['l_memo'];?></td>
      <td><?php echo $time_intervel;?></td>
      <td><?php if($l_row['l_check'] == 1) echo "O";
				elseif ($l_row['l_check'] == 0) echo "X";
		  ?>
	  </td>
  </tr>

<?php 
}  
 ?>
</tbody>
</table>

</body>
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.js"></script>
<script>
 $('#datetimepicker').datetimepicker({
  format:'Y-m-d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:$('#date_timepicker_end').val()?$('#date_timepicker_end').val():false
   })
  },
  timepicker:false
 });</script>
</html>