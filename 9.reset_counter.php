<?php
    //重新設置counter
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";
    #                              延遲2秒後到 counter.php這網頁

?>