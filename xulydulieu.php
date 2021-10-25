<?php
    include_once ("connec.php");
    function addStudent ($MaSV,$TenSV,$gioitinh,$quequan,$ngaysinh,$nganhhoc){
        global $conn;

        $sql = "INSERT INTO  sinhvien(ID, FullName, Gender,Address, Date, Faculty)
                VALUES ('$MaSV', '$TenSV', '$gioitinh','$quequan', '$ngaysinh','$nganhhoc')";
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        }
   }

    function suaStudent($MaSV,$TenSV,$gioitinh,$quequan,$ngaysinh,$nganhhoc){
        global $conn;
        $sql = "UPDATE sinhvien SET FullName = '$TenSV', Gender = '$gioitinh', 
                Address = '$quequan', Date = '$ngaysinh',Faculty = '$nganhhoc' WHERE ID = '$MaSV'";
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        }
    }





