   
<?php
error_reporting(0);#不顯示警告  (0)
//建立資料庫連結
//                                      資料庫名稱
    $conn=mysqli_connect("localhost","root","", "mydb");
//從資料庫查詢資料
//                         所有欄位
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    //mysqli_fetch_array查詢出來的資料抓出
while ($row=mysqli_fetch_array($result)){
    //.是字串相加
    echo "<tr><td>";
    echo $row["bid"];
    echo "</td><td>";
    echo $row["type"];
    echo "</td><td>"; 
    echo $row["title"];
    echo "</td><td>";
    echo $row["content"]; 
    echo "</td><td>";
    echo $row["time"];
    echo "</td></tr>";
}
echo "</table>"
?>