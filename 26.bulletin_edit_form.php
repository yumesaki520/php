<?php
    error_reporting(0);//禁用錯誤報告
    session_start();//開啟紀錄
    if (!$_SESSION["id"]) {
        echo "please login first";//顯示please login first
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//一段時間後進到login.html
    }
    else{
        
        $conn=mysqli_connect("localhost","root","","mydb");//連接mysqli數據庫
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}");//查詢數據庫
        $row=mysqli_fetch_array($result);//取得資料
        $checked1="";//產生checked值
        $checked2="";//產生checked值
        $checked3="";//產生checked值
        if ($row['type']==1)
            $checked1="checked";//設定checked值
        if ($row['type']==2)
            $checked2="checked";//設定checked值
        if ($row['type']==3)
            $checked3="checked";//設定checked值
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";//顯示文字
    }
?>