
<html>
<head>
<title>後端管理者</title>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
  
</head>
  <body>

<center>
<br>
<br>
<br>
<form name =f1 action="board_response.php" method=post>
<table border = 1 bordercolor="#006600">
    <td colspan=2><center><b>公佈欄</b></center></td> 
 <tr><td><b>標題：</b></td>  <td><input type=text name="title"></td></tr>
<tr><td><b>內容：</b></td>  <td><textarea name=content cols=85 rows=5></textarea></td></tr>

<tr><td colspan=2><b><input type=submit value="送出"><input type=reset value="取消"></b></td>

</table>
<a href ="../index.php" style="text-decoration:none;">| 回首頁 |</a>
<a href ="board_select.php" style="text-decoration:none;">公佈欄總表 |</a>
</form>
</center>
</body>
</html>