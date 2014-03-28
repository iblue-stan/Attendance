<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title>untitled</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include_once("fixed.php"); ?>
        <br />
        <br />
        <br />

        <form class="form-horizontal" role="form" name="form" method="post" action="register_finish.php">
            <table class="table" >
                <tr>					
					<td><label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
						<div class="col-xs-3">
							<input type="text" class='form-control' name="user_name">
						</div>
					</td>
				</tr>				
                <tr>
					<td><label for="inputEmail3" class="col-sm-2 control-label">手機</label>
						<div class="col-xs-3">
							<input type="text" class='form-control' name="id" >
						</div>
					</td>
				</tr>
                <tr>
					<td><label for="inputEmail3" class="col-sm-2 control-label">密碼</label>
						<div class="col-xs-3">
							<input type="password" class='form-control' name="pw" >
						</div>
					</td>
				</tr>
                <tr>
					<td><label for="inputEmail3" class="col-sm-2 control-label">再一次輸入密碼</label>
						<div class="col-xs-3">
							<input type="password" class='form-control' name="pw2" >
						</div>
					</td>
				</tr>
                <tr>
					<td><label for="inputEmail3" class="col-sm-2 control-label">權限</label>
						<div class="col-xs-3">
							<select name="AA" class='form-control' size="1"> 
								<option value="2">一般使用者</option>
								<option value="1">管理員</option>
							</select>
						</div>	
                    </td>
				</tr>
                <tr>
					<td><label for="inputEmail3" class="col-sm-2 control-label">輸入部門：</label>
						<div class="col-xs-3">
							<select class='form-control' name="pick_class" >
								<option value="1">資訊部</option>
								<option value="2">市場部</option>
								<option value="3">行銷部</option>
							</select>
						</div>
                    </td>
				</tr>
                <tr>
					<td colspan=4>
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-default" type="submit" value="送出">
							<input class="btn btn-default" type="reset" value="重設">
						</div>	
                    </td>
				</tr>
            </table>
        </form>
    </body>
</html>