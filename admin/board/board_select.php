<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/fixed.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

?>

<html>
<head>
  <title>Board</title>
</head>
<body>

<center>
<br>
<br>
<br>
<table class="table table-hover" border="1" bordercolor="#006600">
<td width = 200>主題</td><td>內容</td><td width = 50>修改</td><td width = 50>刪除</td>
<?php
    
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