<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modify/Update</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"></head>
<body>
  <h5>
<a class="btn btn-primary" href='admin.php' role='botton'>Back</a>
</h5>

	
  <?php 
include_once("fixed.php");
include("mysql_connect.inc.php");
$user_phone = $_GET['user_phone'];

$sql = "SELECT * FROM user where user_phone ='$user_phone' ";
$r = mysql_query($sql);

while ($row = mysql_fetch_assoc($r)){

?>

<form name=form action='update_finish.php' method='POST'>
<table class='table' >
<tr><td>Phone</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_phone'];?>' name='phone'></td></tr>
<tr><td>Name</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_name'];?>' name='name'></td></tr>
<tr><td>Password</td><td><input type='text' class='form-control' value= '<?php echo  $row['user_pwd'];?>' name='pwd'></td></tr>
<tr><td>Class</td>
</td><td><select name="class" class='form-control' >
  <option value="1" <?php if($row['user_class']==1) echo "selected"; ?>>資訊部</option>
  <option value="2" <?php if($row['user_class']==2) echo "selected"; ?>>市場部</option>
  <option value="3" <?php if($row['user_class']==3) echo "selected"; ?>>行銷部</option>
</select>
</td></tr>

<input type="hidden" value=<?php echo $user_phone; ?> name='$phone'>

      <tr><td colspan=4><center>
        <input class="btn btn-default" type="submit" value="送出">
        <input class="btn btn-default" type="reset" value="重設">
      </center></td></tr>

    </table>
  </form>

</h3>

<?php 
}
 ?>
 
</body>
</html>