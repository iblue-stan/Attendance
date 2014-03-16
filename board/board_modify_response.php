<html>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<body>

<?php
    mysql_connect('localhost','root','');
	mysql_select_db('qr');  
    mysql_query("SET NAMES utf8");//儲存前轉換中文
	date_default_timezone_set("Asia/Taipei");
	$id = $_POST['id']; 
    $title = $_POST['title'];
    $content = $_POST['content'];		
		 
	$sql="update board set title='$title', content='$content', date='".date("Y-m-d H:i:s",time())."' where id='$id'";
     mysql_query($sql) or die(mysql_error());	
	
	header("refresh:0; url=board_select.php");
?>

<a href ="board_select.php" style="text-decoration:none;">回到上頁</a>
</body>
</html>