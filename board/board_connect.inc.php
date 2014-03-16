<?php   
    mysql_connect('localhost','root','');
	mysql_select_db('qr');  
    mysql_query("SET NAMES utf8");//儲存前轉換中文
    $sql = "select * from board";
	$r = mysql_query($sql);    //執行結果給$r		
?>