<?php 
session_start();
date_default_timezone_set('Asia/Taipei');
include("../apps/mysql_connect.inc.php"); ?>


<?php include_once("../apps/functions.php"); ?>
  <table class="table" >
    <td><?php include_once("../apps/leave.php");?></td>
    <td><?php //include_once("add_var.php");?></td>
  </table>


<div id='reslut'>
<?php calWorkDiff("08:30", "16:30", ''); // prama_1:上班時間, 2:下班, 3:指定員工?>
<?php takeLeave(''); // prama_1:指定員工?>
</div>


<script> 
$(document).ready(function() { 
  $('#sendLeave').click(function() { 
    var leaveForm = $("#leaveForm").serialize();
    // $.post("attendance.php", leaveForm, function(data) {
    $.post("attend_result.php", leaveForm, function(data) {
      // var re = $(data).filter("#reslut");
      $('#reslut').html(data);
    });
  }); 
}); 
</script>


