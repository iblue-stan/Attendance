<?php session_start(); ?>
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
<?php  include_once("fixed.php");  ?>
<br>
<br>
<br>

<form name="form" method="post" action="register_finish.php">
	<table class="table" >
	<tr><td width='15%'>姓名</td><td ><input type="text" name="user_name" ></td></tr>
	<tr><td>手機</td><td><input type="text" name="id" ></td></tr>
	<tr><td>密碼</td><td><input type="password" name="pw" ></td></tr>
	<tr><td>再一次輸入密碼</td><td><input type="password" name="pw2" ></td></tr>
	<tr><td>權限</td><td>
		<select name="AA" size="1"> 
			<option value="2">一般使用者</option>
			<option value="1">管理員</option>
		</select>
	</td></tr>
	<tr><td>輸入部門：</td><td>
		<select name="pick_class" >
			<option value="1">資訊部</option>
			<option value="2">市場部</option>
			<option value="3">行銷部</option>
		</select>
	</td></tr>
	<tr><td colspan=4>
        <input class="btn btn-default" type="submit" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
	</td></tr>
	</table>
</form>

</body>
</html>