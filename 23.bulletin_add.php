<?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "please login first";//顯示please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");//連接mysqli數據庫
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";//顯示新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";//顯示新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//一段時間後進到bulletin.php
        }
    }
?>
