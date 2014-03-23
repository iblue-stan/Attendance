<form name="form" method="post" action="add_var_fin.php">
	<table class="table" >

    <tr><th><td>手動新增打卡</td></th></tr>
	  <tr><td>手機</td><td><input type="text" name="phone" ></td></tr>
    <tr><td>日期</td><td><input type="text" id="datetimepicker1" name="time"></td></tr>
  	<tr><td colspan=4>
        <input class="btn btn-default" type="submit" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
	  </td></tr>
	</table>
</form>

<script>$('#datetimepicker1').datetimepicker({
  minDate:'-1970/01/01',
  maxDate:'+1970/01/01',
  allowTimes:[
  '8:00', '9:00', '10:00','11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
  '17:00', '18:00'
  ]
});</script>

<script>$('#datetimepicker2').datetimepicker({
  minDate:'-1970/01/01',
  maxDate:'+1970/01/01',
  allowTimes:[
  '8:00', '9:00', '10:00','11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
  '17:00', '18:00'
  ]
});</script>

