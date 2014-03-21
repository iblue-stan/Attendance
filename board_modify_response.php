<html>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<body>

<?php
    include_once("mysql_connect.inc.php");
    $id=$_POST['id'];
    $title=$_POST['title'];	
	$content=$_POST['content'];
		 
	$sql="update board set title='$title', content='$content' where id='$id'";
    mysql_query($sql) or die(mysql_error());	
	
	header("refresh:0; url=board_select.php");
?>

</body>
</html>