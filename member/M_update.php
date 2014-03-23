<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/float.php");
include($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/mysql_connect.inc.php");

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modify/Update</title>
<body>

<h3>
<BR>	
<?php 


$phone = $_GET['phone'];


$sql = "SELECT * FROM user where user_phone ='$phone' ";
$r = mysql_query($sql);

while ($row = mysql_fetch_assoc($r)){

?>

<form name=form action='M_update_finish.php' method='POST'>
<table calss='table' >

<tr><td>Password</td><td><input class="form-control" type='text'  value= '<?php echo  $row['user_pwd'];?>' name='pwd'></td></tr>


<input type="hidden" value=<?php echo $phone; ?> name='phone'>

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