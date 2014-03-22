<?php session_start(); ?>
<html>
	<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<body>
<?php require_once("fixed.php");?>
<center>
<br>
<br>
<br>
<table class="table table-hover" border="1" bordercolor="#006600">
<td width = 200>主題</td><td>內容</td><td width = 50>修改</td><td width = 50>刪除</td>
<?php
    
    include_once("mysql_connect.inc.php");
    $sql = "select * from board";
	$r = mysql_query($sql);    

    while($s = mysql_fetch_assoc($r))  //資料自行判斷做到無值時自動停止
	{
	 echo "<tr><td>".$s['title']."<td>".$s['content'];
	 echo "<td><a href=board_modify.php?id=".$s['id'].">◎</a>";
	 echo "<td><a href=board_delete.php?id=".$s['id'].">X</a>";
	}
?>
</table>
</center>
</body>
</html>