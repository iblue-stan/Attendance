<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個--管理員
if($_SESSION['username'] != null) {
    
    if ($_SESSION['user_permission'] == 1){
       
    }

    elseif ($_SESSION['user_permission'] == 2){
		echo '<h1><center>您沒有權限!</center></h1>';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
		exit();
    }

}else{
		echo '<h1><center>登入失敗!</center></h1>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        exit();   
}