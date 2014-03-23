<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/fixed.php");
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/cklv.php");
?>

<!doctype html>
<html lang="en">
<head>
  <title>Modify/Update</title>

</head>
<body>
 
<div class='container'>
<?php 
$phone = $_GET['user_phone'];
$sql = "SELECT * FROM user where user_phone ='$phone' ";
$r = mysql_query($sql);

while ($row = mysql_fetch_assoc($r)){ ?>

<form name="editForm" id="editForm" method='POST'>
<table class='table' >
<tr><td>Phone</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_phone'];?>' name='phone'></td></tr>
<tr><td>Name</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_name'];?>' name='name'></td></tr>
<tr><td>Password</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_pwd'];?>' name='pwd'></td></tr>
<tr><td>Class</td>
<td><select name="class" class='form-control' >
  <option value="1" <?php if($row['user_class']==1) echo "selected"; ?>>資訊部</option>
  <option value="2" <?php if($row['user_class']==2) echo "selected"; ?>>市場部</option>
  <option value="3" <?php if($row['user_class']==3) echo "selected"; ?>>行銷部</option>
</select>
</td></tr>

<input type="hidden" value=<?php echo $phone; ?> name='$phone'>

      <tr><td colspan=4><center>
        <input class="btn btn-default" type="button" id="sendEdit" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
      </center></td></tr>

    </table>
  </form>
<h5>
<a class="btn btn-primary" href='../admin.php' id="backTO" >Back</a>
</h5>
</div>
<?php 

}
 ?>
</body>

<script>
  $("#sendEdit").click(function(){
    var editForm = $("#editForm").serialize();
    $.ajax({
      url:"edit_fin.php",
      data: editForm,
      type : "POST",
      error:function(){
      alert("失敗");
      },
      success:function(html){
        var stringg = $.trim(html);
        if(stringg == "true") {
          alert("修改成功");
          window.location.reload();
        }
      }

    }); 
  });
</script>

</html>