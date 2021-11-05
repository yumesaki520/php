<?php
error_reportung(0)#不顯示警告訊息
//mysqli_connect建立資料庫連結
//                                      資料庫名稱
$conn=mysqli_connect("localhost","rood","","mydb");
//mysqli_query從資料庫查詢資料
//                         所有欄位
$result=mysqli_query($conn,"select * from bulletion");
echo 
"<table border=1>
<tr>
<td>編號<td/>
<td>布告類型<td/>
<td>標題<td/>
<td>內容<td/>
<td>發布時間<td/>
<tr/>"
//mysqli_fetch_array查詢出來的資料一筆一筆抓出
while($row=mysqli_fetch_array($result);){
    //.是字串相加
    echo "<tr><td>".$row[bid]."<td/><td>".$row[type]."<td/><td>".$row[litle]."<td/><td>".$row[content]."<td/><td>".$row[time]."<td/><td>";
}
echo "</table>"
?>