
  <?php  if ($_SESSION['permission'] == 1) { ?>
  <form id="leaveForm">
  <?php }elseif ($_SESSION['permission'] == 2) { ?>
  <form id="leaveForm">
  <?php } ?>
    輸入日期：<input type="text" size="4" name="pick_year" id="pickYear">年
    <input type="text" size="4" name="pick_month" id="pickMonth">月
    <input type="text" size="4" name="pick_day" id="pickDay">日
    
    <?php  if ($_SESSION['permission'] == 1) { ?>

    輸入姓名：<input size="4" type="text" name="pick_name" id="pickName">

    輸入部門：<select name="pick_class" id="pickClass">
      <option value="">全</option>
      <option value="1" >資訊部</option>
      <option value="2" >市場部</option>
      <option value="3" >行銷部</option>
      </select>
    
    <?php } ?>
      <input class="btn btn-default" type="button" value="查詢" id="sendLeave">
  </form>
  </form>
