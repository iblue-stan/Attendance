<table class="table" >
  <?php  if ($_SESSION['permission'] == 1) { ?>
  <form id="leaveForm">
  <?php }elseif ($_SESSION['permission'] == 2) { ?>
  <form id="leaveForm">
  <?php } ?>
    <tr><td>輸入日期：<input type="text" size="4" name="pick_year" value="<?php echo $pick_year ?>">年
    <input type="text" size="4" name="pick_month" value="<?php echo $pick_month ?>">月
    <input type="text" size="4" name="pick_day" value="<?php echo $pick_day ?>">日</td></tr>
    
    <?php  if ($_SESSION['permission'] == 1) { ?>

    <tr><td>輸入姓名：<input size="4" type="text" name="pick_name" value="<?php echo $pick_name ?>"></td></tr>

    <tr><td>輸入部門：<select name="pick_class" >
      <option value="">全</option>
      <option value="1" <?php if($pick_class==1) echo "selected" ?>>資訊部</option>
      <option value="2" <?php if($pick_class==2) echo "selected" ?>>市場部</option>
      <option value="3" <?php if($pick_class==3) echo "selected" ?>>行銷部</option>
      </select></td></tr>
    
    <?php } ?>
      <tr><td><input class="btn btn-default" type="button" value="查詢" id="sendLeave"></td></tr>
  </form>
</table>