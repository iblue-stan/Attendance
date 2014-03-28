<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
  <title>Modify/Update</title>
  <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"></head>
  <body>
	<a class="btn btn-primary" href='member.php' role='botton'>Back</a>
	<br /><br />
	<?php 
		include_once("float.php");
		include("mysql_connect.inc.php");
		$user_phone = $_GET['user_phone'];
		$sql = "SELECT * FROM user where user_phone ='$user_phone' ";
		$r = mysql_query($sql);
		while ($row = mysql_fetch_assoc($r)){
	?>
	<form class="form-horizontal" role="form" name=form action='M_update_finish.php' method='POST'>
	<table class='table'>
		<tr>
			<td>
				<label class="control-label col-sm-3" for="inputSuccess3">密碼</label>
				<div class="col-xs-2">
					<input class="form-control" type="text" value="<?php echo  $row['user_pwd'];?>" name="pwd">
				</div>
					<input type="hidden" value=<?php echo $user_phone; ?> name='phone'>
					<input class="btn btn-default" type="submit" value="送出">
					<input class="btn btn-default" type="reset" value="還原">
			</td>
		</tr>
	</table>
	</form>
	<?php 
	}
	?>
  </body>
</html>