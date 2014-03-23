<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/fixed.php");
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/cklv.php");

include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/functions.php");
?>

<!doctype html>
<html lang="en">
<head>
  <title>Personal leave</title>
</head>

<body>
  <table class="table" >
    <td><?php include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/leave.php"); 
    // search table?></td>

    <td><?php include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/admin/add_var.php") ;
    // add var record   ?></td>
  </table>

<div id='attend'>
<?php calWorkDiff("08:30", "16:30", 2); // prama_1:上班時間, 2:下班, 3:指定員工?>
</div>

<div id='leave'>
<?php takeLeave(2); // prama_1:指定員工?>
</div>

</body>

</html>