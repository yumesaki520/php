<?php

    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            echo "修改錯誤";//顯示修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//一段時間後進到user.php
        }else{
            echo "修改成功，三秒鐘後回到網頁";//顯示修改成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//一段時間後進到user.php
        }
    }

?>