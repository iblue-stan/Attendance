<?php 
session_start(); 
date_default_timezone_set('Asia/Taipei');
include("mysql_connect.inc.php");
?>

<!doctype html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
		<title>Personal leave</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
			<?php   include_once("fixed.php");  ?>
			<br />
			<br />
			<br />
			<table class="table" >
				<td><?php include_once("leave.php"); ?></td>
				<td> <?php include_once("re_var.php"); ?></td>
			</table>

			<table class="table" >
				<thead>
					<tr>
						<th>出席狀況</th>
					</tr>
					<tr>
						<th>電話</th>
						<th>姓名</th>
						<th>部門</th>
						<th>上班時間</th>
						<th>下班時間</th>
						<th>出席狀態</th>
					</tr>
				</thead>
				<tbody>

<?php 

$sql = "SELECT user_phone, user_name,user_class, var_time
, MIN(var_time) AS var_first, MAX(var_time) AS var_last
FROM var INNER JOIN user ON var.id=user.id
WHERE user_permission = 2
$pick_name_sql
$pick_class_sql
$pick_year_sql
$pick_month_sql
$pick_day_sql
GROUP BY user_phone,YEAR(var_time), MONTH(var_time), DAY(var_time)";

$var = mysql_query($sql);
while ( $v_row = @mysql_fetch_assoc($var) ){
$var_first =  date('Y-m-d H:i',strtotime($v_row['var_first']));
$var_last =  date('Y-m-d H:i',strtotime($v_row['var_last']));


$clock_in_time = strtotime(date('H:i',strtotime($v_row['var_first'])));
$clock_uout_time = strtotime(date('H:i',strtotime($v_row['var_last'])));

$clock_on_time = strtotime($working_time);
$clock_out_time = strtotime($working_outtime);

$time_diff = round(abs($clock_in_time - $clock_on_time) / 60,2);
$time_outdiff = round(abs($clock_uout_time - $clock_out_time) / 60,2);

//遲到
if ($time_diff >= 60) {
  $HHH = intval($time_diff/60);
  $MMM = $time_diff%60;

  $late = '遲到 '.$HHH.'小時'.$MMM.'分';
}else {
  $MMM = $time_diff%60;
  $late = '遲到 '.$MMM.'分';
}

//早退
if ($time_outdiff >=  60) {
  $HHH = intval($time_outdiff/60);
  $MMM = $time_outdiff%60;

  $lateout = '早退 '.$HHH.'小時'.$MMM.'分';
}else {
  $MMM = $time_outdiff%60;
  $lateout = '早退 '.$MMM.'分';
}

//加班
if ($time_outdiff >=  60) {
  $HHH = intval($time_outdiff/60);
  $MMM = $time_outdiff%60;

  $overtime = '加班 '.$HHH.'小時'.$MMM.'分';
}else {
  $MMM = $time_outdiff%60;
  $overtime = '加班 '.$MMM.'分';
}

?>
					<tr>
						<td><?php echo $v_row['user_phone'];?></td>
						<td><?php echo $v_row['user_name'];?></td>
						<td>
						<?php 
							if ($v_row['user_class'] == 1) echo "資訊部";
							if ($v_row['user_class'] == 2) echo "市場部";
							if ($v_row['user_class'] == 3) echo "行銷部";?>
						</td>
						<td><?php echo $var_first ;?></td>
						<td><?php echo $var_last ;?></td>
						<td>
<?php 
  if(date('H:i:s',strtotime($v_row['var_first'])) <= $working_time ) {
    echo '準時上班';
  }else {
    echo $late;
  }
?>

<?php 
  if(date('H:i:s',strtotime($v_row['var_last'])) >= $working_outtime ) {
    echo $overtime;
  }else {
    echo $lateout;
  }
?>
						</td>
					</tr>

<?php 
}  
$sql_l = "SELECT *
FROM vk INNER JOIN user ON vk.id=user.id
WHERE user_permission = 2
$pick_name_sql
$pick_class_sql
$pick_year_l_sql
$pick_month_l_sql
$pick_day_l_sql
";

$leave = mysql_query($sql_l);


?>
				</tbody>
			</table>

<!-- leave table -->

			<table class="table" >
				<thead>
					<tr><th>請假狀況|生理假每月1次</th></tr>
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

  $start = strtotime(date('Y-m-d H:i',strtotime($l_row['l_start'])));
  $end = strtotime(date('Y-m-d H:i',strtotime($l_row['l_end'])));
  $time_intervel = (int)round(abs($end - $start)/3600,2);

  $short_end = date('m-d H:i',strtotime($l_row['l_end']));

  if ($time_intervel >= 24) {
  $DDD = intval($time_intervel/24);
  $HHH = $time_intervel%24;

  $time_intervel = $DDD."天".$HHH."小時";
  }else {
  $HHH = $time_intervel%24;

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
  <td><?php echo $l_start." ~ ".$short_end;?></td>
  <td><?php
    if ($l_row['l_condition'] == 1) echo "婚";
    if ($l_row['l_condition'] == 2) echo "喪";
    if ($l_row['l_condition'] == 3) echo "事";
    if ($l_row['l_condition'] == 4) echo "病";
    if ($l_row['l_condition'] == 5) echo "生理";
    if ($l_row['l_condition'] == 6) echo "特休";

      ?></td>
  <td><?php echo $l_row['l_memo'];?></td>
  <td><?php echo $time_intervel;?></td>
  <td><a href="leave_check.php?pk=<?php echo $l_row['pk'] ?>">
      <?php if($l_row['l_check'] == 1) echo "O";
            elseif ($l_row['l_check'] == 0) echo "X";
      ?>
					</a></td>
					</tr>

<?php 
}  
?>
				</tbody>
			</table>
	</body>
</html>