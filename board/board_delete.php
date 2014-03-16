<html>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<body>

<?php
    mysql_connect('localhost','root','');
	mysql_select_db('qr');  
    mysql_query("SET NAMES utf8");//儲存前轉換中文
    $id=$_GET['id'];
	
	$sql="delete from board where id = $id";
     mysql_query($sql) or die(mysql_error());	
	
	header("refresh:0; url=board_select.php");
?>

</body>
</html>