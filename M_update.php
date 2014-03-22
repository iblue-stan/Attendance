<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modify/Update</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"></head>
<body>

<a class="btn btn-primary" href='member.php' role='botton'>Back</a>
</h3>
<BR>	
  <?php 
  include_once("float.php");

include("mysql_connect.inc.php");
$user_phone = $_GET['user_phone'];


$sql = "SELECT * FROM user where user_phone ='$user_phone' ";
$r = mysql_query($sql);

while ($row = mysql_fetch_assoc($r)){

?>

<form name=form action='M_update_finish.php' method='POST'>
<table calss='table' >

<tr><td>Password</td><td><input class="form-control" type='text'  value= '<?php echo  $row['user_pwd'];?>' name='pwd'></td></tr>


<input type="hidden" value=<?php echo $user_phone; ?> name='phone'>

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