<?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
        $sql="delete from user where id='{$_GET[id]}'";//刪除id值
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";//顯示使用者刪除錯誤
        }else{
            echo "使用者刪除成功";//顯示使用者刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";//一段時間後進到user.php
    }
?>