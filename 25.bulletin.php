<?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "please login first";//顯示please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]<br>";//顯示文字
        $conn=mysqli_connect("localhost","root","", "mydb");//連接mysqli數據庫
        $result=mysqli_query($conn, "select * from bulletin");//查詢數據庫
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//顯示文字
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";//顯示文字
            echo $row["bid"];//顯示bid的值
            echo "</td><td>";
            echo $row["type"];//顯示type的值
            echo "</td><td>"; 
            echo $row["title"];//顯示title的值
            echo "</td><td>";
            echo $row["content"]; //顯示content的值
            echo "</td><td>";
            echo $row["time"];//顯示time的值
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
