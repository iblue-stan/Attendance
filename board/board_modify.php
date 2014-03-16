<html>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<body>
<table border = 1 bordercolor="#006600">
<form name =f1 action="board_modify_response.php" method=post>
<?php
    //從資料庫匯出檔案顯示
	$id = $_GET['id'];//從board_select取id的值
    require_once("board_connect.inc.php");

    while($s = mysql_fetch_assoc($r))  //資料自行判斷做到無值時自動停止
	{
     echo "<input type=hidden name='id' value=".$s['id'].">";
	 echo "<tr><td>標題</td><td><input type=text name='title' value=".$s['title'].">"."</td>";
	 echo "<tr><td>內容</td><td><textarea name='content' cols='85' rows='5' value=".$s['content'].">"."</textarea></td>";
	 echo "<tr><td>日期</td><td>".$s['date']."</td>";
	 echo "<tr><td colspan=2><b><input type=submit value='修改'><input type=reset value='還原'></td></table>";
	}
?>
	
<a href ="board_select.php" style="text-decoration:none;">回到商品明細總表</a>
</body>
</html>