<html>
		<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
	<body>
		<?php
			include_once("fixed.php");
			include_once("mysql_connect.inc.php");
			$id=$_GET['id'];	
			$sql="delete from board where id = $id";
			mysql_query($sql) or die(mysql_error());	
			header("refresh:0; url=board_select.php");
		?>
	</body>
</html>