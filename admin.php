<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
  <title>Admin system</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

  <?php
  include_once("fixed.php");
  include_once("cklv.php");
  include("mysql_connect.inc.php");
  ?>

<br>
<br>
<br>

  <table class="table" >
    <thead>
      <tr>
        <th>ID</th>
        <th>電話</th>
        <th>姓名</th>
        <th>部門</th>
        <th>權限</th>
        <th>動作</th>
      </tr>
    </thead>

    <tbody>
      <?php
      if(isset($_SESSION['username'])){
       $sql = "SELECT * FROM user ORDER BY user_permission";
       $result = mysql_query($sql);
       while($row = mysql_fetch_assoc($result)) {

      ?>

         <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['user_phone'] ?></td>
          <td><?php echo $row['user_name'] ?></td>
          <td><?php 
                if ($row['user_class']==1) echo "資訊部 ";
                if ($row['user_class']==2) echo "市場部 ";
                if ($row['user_class']==3) echo "行銷部 ";?></td>
          <td><?php 
                if ($row['user_permission'] == 1) echo "管理員";
                if ($row['user_permission'] == 2) echo "員工"; ?></td>
          <td>
              <a class="btn btn-default" href='update.php?user_phone=<?php echo $row['user_phone'] ?>'>Edit</a>
              <a class="btn btn-danger" href='delete.php?user_phone=<?php echo $row['user_phone'] ?>'>Delete</a>
              </td></tr>

      <?php
          }
        }

       ?>
      </tbody>
    </table>
	
</body>
</html>	