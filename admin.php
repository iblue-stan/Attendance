<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/head.php"); 
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/layout/fixed.php");
include_once($_SERVER['DOCUMENT_ROOT']."/Attendance/apps/cklv.php");
?>
<!doctype html>
<html>
<head>
  <title>Admin system</title>
</head>

<body>
  <table class="table" >
    <thead>
      <tr>
        <th>ID</th>
        <th>電話</th>
        <th>姓名</th>
        <th>部門</th>
        <th>權限</th>
        <th>入社日期</th>
        <th>動作</th>
      </tr>
    </thead>

    <tbody>
      <?php
      if(isset($_SESSION['phone'])){
       $sql = "SELECT * FROM user ORDER BY user_permission";
       $result = mysql_query($sql);
       while($row = mysql_fetch_assoc($result)) { ?>
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

          <td><?php echo $row['user_join'] ?></td>
          <td>
              <a class="btn btn-default" href='admin/edit.php?user_phone=<?php echo $row['user_phone'] ?>'>Edit</a>
              <a class="btn btn-danger" href='admin/delete.php?user_phone=<?php echo $row['user_phone'] ?>'>Delete</a>
              </td></tr>

      <?php
        }
      }

      ?>
      </tbody>
    </table>
	
</body>
</html>	