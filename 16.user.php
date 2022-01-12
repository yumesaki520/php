<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);//禁用錯誤報告
        session_start();//開啟紀錄
        if (!$_SESSION["id"]) {
            echo "請登入帳號";//顯示請登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";//顯示文字            
            $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
            $result=mysqli_query($conn, "select * from user");//查詢數據庫
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";//顯示文字
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>