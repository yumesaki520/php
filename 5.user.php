<?php
//mysqli_connect建立資料庫連結
//                                      資料庫名稱
$conn=mysqli_connect("localhost","root","","mydb");
//mysqli_query從資料庫查詢資料
//                         所有欄位       usery資料表
$result=mysqli_query($conn,"select * from user");
//mysqli_fetch_array查詢出來的資料一筆一筆抓出
$row=mysqli_fetch_array($result);
echo $row["id"]."  ".$row["pwd"]."<br>";

//換行
echo "<br>";

$row=mysqli_fetch_array($result);
echo $row["id"]."  ".$row["pwd"]."<br>";
?>