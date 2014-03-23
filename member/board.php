<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/float.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/assets/css/board.css"/ >
  <title>board</title>
</head>
  
<div class="accordion">
<center>
<?php
  $sql = "select * from board";
  $r = mysql_query($sql);
    while($s = mysql_fetch_assoc($r))  //資料自行判斷做到無值時自動停止
  {?>
<div>
            <input id="<?php echo $s['id'];?>" name="accordion-1" type="checkbox" />
            <label for="<?php echo $s['id'];?>"><center><?php echo $s['title'];?></center></label>
<div class="article ac-small">
<?php echo $s['content'];?>
</div>
</div>


 <?php }?>
</center>
</div>

</html>