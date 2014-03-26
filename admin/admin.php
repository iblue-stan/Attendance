<?php 
session_start();
include("../apps/mysql_connect.inc.php"); ?>

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
       $sql = "SELECT * FROM user ORDER BY user_permission, user_join";
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
              <a href='edit.php?phone=<?php echo $row['user_phone'] ?>' class="btn btn-default updateContent" id="eedit">Edit</a>
              <a href='delete.php?phone=<?php echo $row['user_phone'] ?>' class="btn btn-danger dell"  id="del">Delete</a>
              </td></tr>

      <?php
        }
      }
      ?>
      </tbody>
    </table>

<script> 

$(document).ready(function() { 
  $('.updateContent').click(function() { 
    var url = $(this).attr('href'); 
    $('#content').load(url); 
    return false; 
  }); 

  $('.dell').click(function() { 
    if (confirm("Sure?")) {
      var url = $(this).attr('href'); 
      $.post(url, function(data) {
        alert(data);
        $('#content').load("admin.php");
      });
    }
    return false; 
  }); 


}); 

</script>
