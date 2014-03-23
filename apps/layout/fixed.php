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

			<li></li>
            <li><a id="leave" href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/attendance.php">查詢紀錄</a></li>
			<li><a id="admin" href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin.php">員工管理</a></li>
			<li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/register.php">新增員工</a></li>
			<li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/board/board_select.php">公告管理</a></li>
			<li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/board/board_add.php">新增公告</a></li>
            <li class="active"><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/apps/logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->

    </div>
      <!-- Main component for a primary marketing message or call to action -->
	  <!-- /container -->
