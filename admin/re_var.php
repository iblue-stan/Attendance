
<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<title>untitled</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>


<form name="form" method="post" action="re_var.php_finish.php">
	<table class="table" >

<tr><th>手動新增打卡</td><th>
	<tr><td>手機</td><td><input type="text" name="id" ></td></tr>

	<tr><td>日期</td><td><input type="text" id="datetimepicker1" name="re_var"></td></tr>
	
	<tr><td colspan=4>
        <input class="btn btn-default" type="submit" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
	</td></tr>
	</table>
</form>

</body>
<!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.js"></script>
<script src="js/jquery.datetimepicker.js"></script>

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

</html>
</html>