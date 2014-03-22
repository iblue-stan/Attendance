
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>admin head</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
      <li><a href="member.php">查詢</a></li>
            <li><a href="member_leave.php?id=<?php echo $_SESSION['id'];?>">請假</a></li>
           <li> <a href='M_update.php?user_phone=<?php echo $_SESSION['username']; ?>'>修改密碼</a></li>
			
			<li><a href="board.php">公告欄</a></li>
            <li class="active"><a href="logout.php">登出</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
      <!-- Main component for a primary marketing message or call to action -->
	  <!-- /container -->
	  
  </body>
</html>


   