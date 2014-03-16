<html>
<title>產品資料</title>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">


<body>
<?php
     date_default_timezone_set("Asia/Taipei");//選擇台北時區,時間才不會錯誤     date_default_timezone_set("Asia/Taipei");//選擇台北時區,時間才不會錯誤
     $title = $_POST['title'];
	 $content = $_POST['content'];

	 
     mysql_connect('localhost','root','');
	 mysql_select_db('qr');  
     mysql_query("SET NAMES utf8");//儲存前轉換中文
	 $sql="insert into board(title, content, date) values ('$title', '$content', '".date("Y-m-d H:i:s",time())."')";
     mysql_query($sql) or die(mysql_error());	 //執行或偵錯

	 header("refresh:0; url=board_select.php");
  

?>

</body>
</html>