<?php
    #計數器
    #session(變數)開始使用
    session_start();
    #                     變數名稱
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;#如果$_SESSION["counter"]是無數值時直接輸入1
    else
        $_SESSION["counter"]++;#相反為一直加1

    echo "counter=".$_SESSION["counter"];#顯示值
    echo "<br><a href=reset_counter.php>重置counter</a>";//製作超連結重製計算
?>