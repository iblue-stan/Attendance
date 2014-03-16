<?php 
session_start();?>
<html>
<center>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<?php //require_once("head.php");?> 
<link rel="stylesheet" type="text/css" href="css/board.css" />
   <?php   include_once("float.php");  ?>
   <br>
      <br>
	     <br>
<div class="accordion">
<?php
	require_once("board/board_connect.inc.php");
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
</div>
</center>
</html>