<?php
$conn = mysqli_connect("localhost", "root", "0000", "quanlySinhvien", "8889");
$sql = "SELECT * FROM sinhvien";
$query = mysqli_query($conn, $sql);
//if (!$conn) {
//    die("Kết nối thất bại: " . mysqli_connect_error());
//}
//
//// Thông báo kết nối thành công
//echo "Kết nối thành công";