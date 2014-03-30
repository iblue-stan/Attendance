<html>
<head>
<title>後端管理者</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>  
</head>
  <script type="text/javascript">
	 CKEDITOR.replace('editor',{skin:'v2',toolbar:'SAMPLE',width:'630',height:'350',filebrowserImageUploadUrl:'/ImUpload.jsp'});
	</script>
<body>	
<br>
<br>
<br>
<div class='container'>
  <form name="form" method="post" action="board_response.php">
  <center><table class="table table-condensed" border="1">

    <tr><td>主題：</td><td><input class="form-control" type="text" name="title" size="64" /></td></tr>
    <tr><td>內容：</td><td><textarea name="content" id="editor" class="ckeditor" cols="70" rows="20"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input class="btn btn-default" type="submit" name="button" value="確定" /></td></tr>
  
  </table></center>
  </form>
</div>
</body>
</html>