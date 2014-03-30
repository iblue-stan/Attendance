<?php 
  include("../apps/mysql_connect.inc.php");
	include_once("../apps/functions.php");


  $pk = $_GET['pk'];
	$sql = "UPDATE vk SET l_check = if(l_check=0,1,0) WHERE pk = $pk";
	
  echo $pk;
  // if(mysql_query($sql)) echo "scueess";


  // takeLeave(''); // prama_1:指定員工
 ?>