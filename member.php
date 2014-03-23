<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/float.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

$phone= $_SESSION['phone'];

?>

<!doctype html>
<html lang="en">
<head>
    <title>個人管理系統</title>
</head>
<body>

  <table class="table" >
    <td><?php include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/leave.php"); 
    // search table?></td>
  </table>

  <?php include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/functions.php"); ?>
  
  <div id='attend'>
  <?php calWorkDiff("08:30", "16:30", $phone); // prama_1:上班時間, 2:下班, 3:指定員工?>
  </div>

  <div id='leave'>
  <?php takeLeave($phone); // prama_1:指定員工?>
  </div>

</body>
</html>