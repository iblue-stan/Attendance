<?php 
$id = $_SESSION['username'];

$working_time = "08:30";
$working_outtime = "16:30";

$pick_year = "";
$pick_month = "";
$pick_day = "";
$pick_class = "";
$pick_name = "";

$pick_year_sql = "";
$pick_year_l_sql = "";
$pick_month_sql = "";
$pick_month_l_sql = "";
$pick_day_sql = "";
$pick_day_l_sql = "";
$pick_class_sql = "";
$pick_name_sql = "";

if (!empty($_POST['pick_year'])) {
  $pick_year = $_POST['pick_year'];
  $pick_year_sql = "AND YEAR(var_time) = ".$pick_year;
  $pick_year_l_sql = "AND YEAR(l_start) = ".$pick_year;
}

if (!empty($_POST['pick_month'])) {
  $pick_month = $_POST['pick_month'];
  $pick_month_sql = "AND MONTH(var_time) = ".$pick_month;
  $pick_month_l_sql = "AND month(l_start) = ".$pick_month;
}

if (!empty($_POST['pick_day'])) {
  $pick_day = $_POST['pick_day'];
  $pick_day_sql = "AND day(var_time) = ".$pick_day;
  $pick_day_l_sql = "AND day(l_start) = ".$pick_day;
}

if (!empty($_POST['pick_class'])) {
  $pick_class = $_POST['pick_class'];
  $pick_class_sql = "AND user_class = ".$pick_class;
}

if (!empty($_POST['pick_name'])) {
  $pick_name = $_POST['pick_name'];
  $pick_name_sql = "AND user_name = '".$pick_name."'";
}

?>
  <table class="table" >

<form action = "leave_personal.php" method = post>
<td>輸入日期：<input type="text" size="4" name="pick_year" value="<?php echo $pick_year ?>">年
      <input type="text" size="4" name="pick_month" value="<?php echo $pick_month ?>">月
     <input type="text" size="4" name="pick_day" value="<?php echo $pick_day ?>">日</td><tr>
<td>輸入姓名：<input size="4" type="text" name="pick_name" value="<?php echo $pick_name ?>"></td><tr>
<td>輸入部門：<select name="pick_class" >
      <option value="">全</option>
      <option value="1" <?php if($pick_class==1) echo "selected" ?>>資訊部</option>
      <option value="2" <?php if($pick_class==2) echo "selected" ?>>市場部</option>
      <option value="3" <?php if($pick_class==3) echo "selected" ?>>行銷部</option>
        </select></td><tr>
   <td> <input class="btn btn-default" type="submit" value="查詢"></td>
</form>
  </table >