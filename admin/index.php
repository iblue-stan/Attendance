<?php 
// include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php");
include_once("../apps/layout/head.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php")
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>管理者</title>
</head>
<body>
    <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand">考  勤  系  統</a>
      <a class="navbar-brand"><?php echo "歡迎".$_SESSION['loginname']."登入系統<br>";?></a>
    </div>

    <div class="navbar-collapse collapse">          
      <ul class="nav navbar-nav navbar-right">
        <li><a href="attendance.php" class="updateContent">查詢紀錄</a></li>
        <li><a href="admin.php" class="updateContent" id="main">員工管理</a></li>
        <li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/register.php" class="updateContent">新增員工</a></li>
        <li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/board/board_select.php" class="updateContent">公告管理</a></li>
        <li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/board/board_add.php" class="updateContent">新增公告</a></li>
        <li class="active"><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/apps/logout.php" class="logOut">登出</a></li>
      </ul>
    </div>
</div>

<div class="container-fluid" id='content'></div>


</body>
<script> 
$(document).ready(function() { 
  $('#content').load("admin.php"); // give it main page

  $('.updateContent').click(function() { 
    var url = $(this).attr('href'); 
    $('#content').load(url); 
    return false; 
  }); 
}); 


</script>
</html>