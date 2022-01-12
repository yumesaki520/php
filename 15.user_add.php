<?php

error_reporting(0);//禁用錯誤報告
session_start();//開啟紀錄
if (!$_SESSION["id"]) {
    echo "請登入帳號";//顯示請登入帳號
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";//顯示新增命令錯誤
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";//顯示新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";//一段時間後進到bulletin.php
   }
}
?>