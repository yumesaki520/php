<?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
        $sql="delete from bulletin where bid='{$_GET[bid]}'";//刪除bid值
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";//顯示佈告刪除錯誤
        }else{
            echo "佈告刪除成功";//顯示佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//一段時間後進到bulletin.php
    }
?>