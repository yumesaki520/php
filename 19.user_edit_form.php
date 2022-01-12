<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "請登入帳號";//顯示請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");//連接mysqli數據庫
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//查詢數據庫
        $row=mysqli_fetch_array($result);//取得資料
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";//顯示文字
    }
    ?>
    </body>
</html>