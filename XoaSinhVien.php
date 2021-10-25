<?php
    include_once "connec.php";
    global $conn;
    $maSV = $_GET['ID'];
    $sql = "DELETE FROM sinhvien WHERE ID = '$maSV'";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    }