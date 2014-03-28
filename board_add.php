<?php session_start(); ?>
<html>
  <head>
	<title>後端管理者</title>
	<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>  
  </head>
    <script type="text/javascript">
	CKEDITOR.replace('editor',{skin:'v2',toolbar:'SAMPLE',width:'630',height:'350',filebrowserImageUploadUrl:'/ImUpload.jsp'});
	</script>
  <body>	
<?php include_once("fixed.php");?>
	<br />
	<br />
	<br />
	<form name="form" method="post" action="board_response.php">
	<center>
		<table class="table table-condensed" border="1">
			<tr><td>主題：<td><input class="form-control" type="text" name="title" size="64" />
			<tr><td>內容：<td><textarea name="content" id="editor" class="ckeditor" cols="70" rows="20" />
			<tr><td><td><input class="btn btn-default" type="submit" name="button" value="確定" />
		</table>
	</center>
	</form>
</body>
</html>