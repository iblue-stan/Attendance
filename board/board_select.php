<html>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<body>
<font color = "#C660000" size=7><b>公佈欄總表</b></font><br>
<table border = 1 bordercolor="#006600">
<td>標題</td><td>內容</td><td>日期</td><td>修改</td><td>刪除</td>
<?php
    //從資料庫匯出檔案顯示
	<?php require_once("board_connect.inc.php");?>

    while($s = mysql_fetch_assoc($r))  //資料自行判斷做到無值時自動停止
	{
	 echo "<tr><td>".$s['title']."</td>";
	 echo "<td>".$s['content']."</td>";
	 echo "<td>".$s['date']."</td>";
	 echo "<td><a href=board_modify.php?id=".$s['id'].">◎</a>";
	 echo "<td><a href=board_delete.php?id=".$s['id'].">X";	 
	}
?>
</table>
<a href ="board_add.php" style="text-decoration:none;">繼續新增</a>
</body>
</html>