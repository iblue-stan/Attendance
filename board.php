<?php session_start();?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/board.css" />
	</head>
	<body>
		<?php   include_once("float.php");  ?>
		<center>
		<br />
		<br />
		<br />
		<div class="accordion">
			<?php
				include("mysql_connect.inc.php");
				$sql = "select * from board";
				$r = mysql_query($sql);
				while($s = mysql_fetch_assoc($r)){
			?>		
            <input id="<?php echo $s['id'];?>" name="accordion-1" type="checkbox" />
            <label for="<?php echo $s['id'];?>"><center><?php echo $s['title'];?></center></label>
			<div class="article ac-small">
				<?php echo $s['content'];?>
			</div>
			<?php }?>
		</div>
</body>
</html>