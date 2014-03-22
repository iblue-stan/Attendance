<?php

	$title = $_POST ['title'];
	$content = $_POST ['content'];
    include_once("mysql_connect.inc.php");
	$sql="insert into board(title,content,date) values ('$title', '$content', '".date("Y-m-d H:i:s",time())."')";
	mysql_query($sql);	 
	
	header("refresh:0; url=admin.php");

?>