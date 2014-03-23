<?php 

// 出席狀況
function calWorkDiff($working_time, $working_outtime, $per) {
  $sql = "SELECT user_phone, user_name,user_class, var_time
  , MIN(var_time) AS var_first, MAX(var_time) AS var_last
  FROM var INNER JOIN user ON var.id=user.id
  WHERE user_permission = $per
  $pick_name_sql
  $pick_class_sql
  $pick_year_sql
  $pick_month_sql
  $pick_day_sql
  GROUP BY user_phone,YEAR(var_time), MONTH(var_time), DAY(var_time)";


  // table start
  echo '<table class="table" >
          <thead>
            <tr><th>出席狀況</th></tr>
              <tr>
              <th>電話</th>
              <th>姓名</th>
              <th>部門</th>
              <th>上班時間</th>
              <th>下班時間</th>
              <th>出席狀態</th>
            </tr>
          </thead>
          <tbody>';
  
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

  echo "<tr>";
  echo "<td>".$v_row['user_phone']."</td>";
  echo "<td>".$v_row['user_name']."</td>";

  if ($v_row['user_class'] == 1) echo "<td>資訊部</td>";
  if ($v_row['user_class'] == 2) echo "<td>市場部</td>";
  if ($v_row['user_class'] == 3) echo "<td>行銷部</td>";

  echo "<td>".$var_first."</td>";
  echo "<td>".$var_last."</td>";

  if(date('H:i:s',strtotime($v_row['var_first'])) <= $working_time ) {
    echo '<td>準時上班';
  }else {
    echo '<td>'.$late;
  }

  echo " / ";

  if(date('H:i:s',strtotime($v_row['var_last'])) >= $working_outtime ) {
    echo $overtime;
  }else {
    echo $lateout;
  }
  
  echo "</td></tr>";

  }
  echo "</tbody></table>"; // table end
}// end of function calWorkDiff()


// 請假狀況
function takeLeave($per) {
  $sql_l = "SELECT *
    FROM vk INNER JOIN user ON vk.id=user.id
    WHERE user_permission = $per
    $pick_name_sql
    $pick_class_sql
    $pick_year_l_sql
    $pick_month_l_sql
    $pick_day_l_sql
    ";

  $leave = mysql_query($sql_l);

  echo '<table class="table" >
        <thead>
          <tr><th>請假狀況&nbsp; | &nbsp;生理假每月1次</th></tr>
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
        <tbody>';


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

    echo '<tr>';
    echo "<td>".$l_row['user_phone']."</td>";
    echo "<td>".$l_row['user_name']."</td>";

    if ($l_row['user_class'] == 1) echo "<td>資訊部</td>";
    if ($l_row['user_class'] == 2) echo "<td>市場部</td>";
    if ($l_row['user_class'] == 3) echo "<td>行銷部</td>";

    echo "<td>".$l_start." ~ ".$short_end."";

    if ($l_row['l_condition'] == 1) echo "<td>婚</td>";
    if ($l_row['l_condition'] == 2) echo "<td>喪</td>";
    if ($l_row['l_condition'] == 3) echo "<td>事</td>";
    if ($l_row['l_condition'] == 4) echo "<td>病</td>";
    if ($l_row['l_condition'] == 5) echo "<td>生理</td>";
    if ($l_row['l_condition'] == 6) echo "<td>特休</td>";

    echo "<td>".$l_row['l_memo']."</td>";

    echo "<td>".$time_intervel."</td>";

    echo "<td><a href=leave_check.php?pk=".$l_row['pk'].">";
         if($l_row['l_check'] == 1) echo "O";
         elseif ($l_row['l_check'] == 0) echo "X";
         echo "</a></td></td></tr>";

  }  
  echo "</tbody></table>";
}