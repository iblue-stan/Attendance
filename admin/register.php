<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/fixed.php");
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/cklv.php");
?>

<!doctype html>
<html lang="en">
<head>
	<title>untitled</title>
</head>
<body>
<div class='container'>
  

<form name="regForm" id="regForm" method="post">
	<table class="table" >
	<tr><td width='15%'>姓名</td><td ><input type="text" class='form-control' name="name"></td></tr>
	<tr><td>手機</td><td><input type="text" class='form-control' name="phone" ></td></tr>
	<tr><td>密碼</td><td><input type="password" class='form-control' name="pw" ></td></tr>
	<tr><td>再一次輸入密碼</td><td><input type="password" class='form-control' name="pw2" ></td></tr>
	<tr><td>權限</td><td>
		<select name="AA" class='form-control' size="1"> 
			<option value="2">一般使用者</option>
			<option value="1">管理員</option>
		</select>
	</td></tr>
	<tr><td>輸入部門：</td><td>
		<select class='form-control' name="class" >
			<option value="1">資訊部</option>
			<option value="2">市場部</option>
			<option value="3">行銷部</option>
		</select>
	</td></tr>
	<tr><td colspan=4>
        <input class="btn btn-default" type="button" id="sendReg" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
	</td></tr>
	</table>
</form>
</div>
</body>
<script>
  $("#sendReg").click(function(){
    var regForm = $("#regForm").serialize();
    $.ajax({
      url:"register_fin.php",
      data: regForm,
      type : "POST",
      error:function(){
      alert("失敗");
      },
      success:function(html){
        var stringg = $.trim(html);
        if(stringg == "true") {
          alert("新增成功");
          window.location.reload();
        }else{
          alert(html);
          window.location.reload();
          // $("#sendReg").each(function(){
          //     this.reset();
          // });
        }
      }

    }); 
  });
</script>
</html>