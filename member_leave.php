<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
date_default_timezone_set('Asia/Taipei'); 
$id=$_GET['id'];  
include_once("trial.php");

?>




<?php 

$sql_s = "SELECT timestampdiff(hour,`l_start`,`l_end`) as diff 
from vk 
where `l_condition` = 6 AND id=$id AND l_check=1";

$total = "";
$special_q = mysql_query($sql_s);
while ( $s_row = @mysql_fetch_assoc($special_q) ){
  $total += $s_row['diff'];
  }
?>

<?php 

$total = round($total / 24,0);
echo "已請特休".$total;
 ?>






<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <title>USER LEAVE</title>
</head>

<body>
  <?php   include_once("float.php");  ?>
  
<br>
<br>
<br>
  <center>
    <form action = "member_leave_res.php" method = post>
      <table class="table table-striped" border = 1>

        <th colspan = 2><center>請假 </th>
      </center>
      <tr><td>日期</td>		
		<td><div class="form-group"><input type="text" id="datetimepicker1" name=l_start>
			～ <input type="text" id="datetimepicker2" name=l_end> 


        <?php 
        
        echo "  您的特休天數 ".$sepecial." 天 |";
        echo " 已請".$total." 天 |";
        $QQQQQQQQQQQ = $sepecial - $total;
        echo " 餘".$QQQQQQQQQQQ." 天";
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
      <input type = hidden name = 'id' value = '<?php echo $id ?>'> 
     
    </table>
  </form>
</center>
</body>
  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.js"></script>

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