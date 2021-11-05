<?php
//mysqli_connect建立資料庫連結     位置
//                        ip      帳號 密碼 資料庫
$conn=mysqli_connect("localhost","root","","mydb");
//mysqli_query從資料庫查詢資料
$result=mysqli_query($conn,"select * from user");
//mysqli_fetch_array查詢出來的資料一筆一筆抓出
while($row=mysqli_fetch_array($result)){
    echo $row["id"]."  ".$row["pwd"]."<br>";
}
?>