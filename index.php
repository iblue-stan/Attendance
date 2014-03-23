<?php include_once("apps/layout/head.php"); ?>
<html>
<head>
<title>會員登入</title>
</head>
<body>

<?php
if(empty($_SESSION['username'])){ ?>

<div class="container">
  <form name="form" method="post" action="apps/connect.php" class="form-signin" role="form">
    
    <h2 class="form-signin-heading">會  員  登  入</h2>
    <input type="text" name="phone" class="form-control" placeholder="User ID" required autofocus>
    <input type="password" name="pw" id="pw" class="form-control" placeholder="Password" required>
    <label class="checkbox"><input type="checkbox" value="remember-me"> 記住我</label>
    <label class="checkbox"><input type="checkbox" id="password" name="password" onclick="pwdshow(this);">顯示/隱藏密碼|
		<a href="mailto:admin@gmail.com?subject=密碼重設" style="text-decoration:none;">忘記密碼?</a></label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>

  </form>
</div>	
	
<?php } ?>

</body>
</html>