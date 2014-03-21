<?php session_start(); ?>
<html>
	<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	CKEDITOR.replace('editor',{skin:'v2',toolbar:'SAMPLE',width:'630',height:'350',filebrowserImageUploadUrl:'/ImUpload.jsp'});
	</script>
<body>
<?php include_once("fixed.php");?>
<center>
<table class="table table-condensed" border="1">
<form name =f1 action="board_modify_response.php" method=post>
<?php
    
	$id=$_GET['id'];
    include_once("mysql_connect.inc.php");
    $sql = "select * from board where id = $id";
	$r = mysql_query($sql);    

    while($s = mysql_fetch_assoc($r))  
	{
     echo "<input type=hidden name='id' value=".$s['id'].">";
	 echo "<tr><td>主題</td><td><input type=text name='title' value=".$s['title'].">"."</td>";
	 echo "<tr><td>內容</td><td><textarea name='content' id='editor' class='ckeditor' cols='100' rows='10'>".$s['content']."</textarea></td>";
	 echo "<tr><td colspan=2><b><input type=submit value='修改'><input type=reset value='還原'></td></table>";
	} 
?>

</center>
</body>
</html>