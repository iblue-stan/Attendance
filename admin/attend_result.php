<?php 
session_start();
date_default_timezone_set('Asia/Taipei');
 ?>

<?php include_once("../apps/functions.php"); ?>


<div id='reslut'>
  <?php calWorkDiff("08:30", "16:30", ''); // prama_1:上班時間, 2:下班, 3:指定員工?>
  
  <div id="leave">
    <?php takeLeave(''); // prama_1:指定員工?>
  </div>
</div>