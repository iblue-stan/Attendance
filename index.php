<html>
<head>
<title>會員登入</title>
<meta http-equiv = "content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="js/login.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
<body>

<?php
if(empty($_SESSION['username'])){
?>

 <div class="container">

      <form name="form" method="post" action="connect.php" class="form-signin" role="form">
        <h2 class="form-signin-heading">會  員  登  入</h2>
        <input type="text" name="id" class="form-control" placeholder="User ID" required autofocus>
        <input type="password" name="pw" id="pw" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 記住我
        </label>
		<input type="checkbox" id="password" name="password" onclick="pwdshow(this);">顯示/隱藏密碼</input> |
		<a href="mailto:admin@gmail.com?subject=密碼重設" style="text-decoration:none;">忘記密碼?</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
      </form>
    </div>	
	
<?php
}
?>

</body>
</html>