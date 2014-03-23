<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/float.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

$phone= $_SESSION['phone'];

include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/functions.php");
$sepecial = calTrial($phone);
$total = calTotal($phone);
$result = $sepecial - $total;
?>

<!doctype html>
<html lang="en">
<head>
  <title>USER LEAVE</title>
</head>

<body>

  <center>
    <form action = "member_leave_res.php" method = post>
      <table class="table table-striped" border = 1>

        <th colspan = 2><center>請假 </th>
      </center>
      <tr><td>日期</td>		
		<td><input type="text" id="datetimepicker1" name=l_start>
			～ <input type="text" id="datetimepicker2" name=l_end> 
        <?php 
        echo "您的特休天數 ".$sepecial." 天 | ";
        echo "已請".$total." 天 | ";
        echo "餘".$result." 天";
        ?>
     </td></tr>

      <tr><td>事由</td><td>
        <select  class="form-control" name = l_condition>
          <option value=1>婚假</option>
          <option value=2>喪假</option>
          <option value=3>事假</option>
          <option value=4>病假</option>
          <option value=5>生理假</option>
          <option value=6>特休假</option>

        </select>
      </td></tr>

      <tr><td>備註</td><td><textarea  class="form-control" name = 'l_other' cols= 80 rows=10 ></textarea> 
				| 喪假請備註幾等親 | 婚假最多可請7日 |
				</td></tr>
      <tr><td colspan=2><input class="btn btn-default" type = submit value = 送出> 
						<input class="btn btn-default" type = reset value = 取消> </td></tr>
      <input type = hidden name = 'phone' value = '<?php echo $phone ?>'> 
     
    </table>
  </form>
</center>
</body>

<script>$('#datetimepicker1').datetimepicker({
  minDate:'-1970/01/01',
  maxDate:'+1970/01/07',
  allowTimes:[
  '8:00', '9:00', '10:00','11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
  '17:00', '18:00'
  ]
});</script>

<script>$('#datetimepicker2').datetimepicker({
  minDate:'-1970/01/01',
  maxDate:'+1970/01/07',
  allowTimes:[
  '8:00', '9:00', '10:00','11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
  '17:00', '18:00'
  ]
});</script>

</html>