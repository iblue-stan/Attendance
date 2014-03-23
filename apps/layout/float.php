    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
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
      <li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/member.php">查詢</a></li>
            <li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/member/member_leave.php?id=<?php echo $_SESSION['id'];?>">請假</a></li>
           <li> <a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/member/M_update.php?user_phone=<?php echo $_SESSION['username']; ?>">修改密碼</a></li>
			
			<li><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/admin/board/board.php">公告欄</a></li>
            <li class="active"><a href=<?php $_SERVER['DOCUMENT_ROOT']?>"/Attendance/apps/logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
      <!-- Main component for a primary marketing message or call to action -->
	  <!-- /container -->
   