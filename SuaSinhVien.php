<?php
    include_once "connec.php";
    include_once "xulydulieu.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sinh viên</title>
    <style>
        table {
            border: 1px solid black
        }
        h2 {
            color: red;
        }

    </style>
</head>
<body>
<?php
    $maSV = $_GET['ID'];
    $sql = "SELECT * FROM sinhvien WHERE ID = '$maSV'";
    global $conn;
    $result = mysqli_query($conn, $sql);
    while ($row= mysqli_fetch_assoc($result)) {
        $maSV = $row['ID'];
        $tenSV = $row['FullName'];
        $gioiTinh = $row['Gender'];
        $diaChi = $row['Address'];
        $ngaySinh = $row['Date'];
        $nganhHoc = $row['Faculty'];
    }
?>
<form  method="post">
    <table>
        <tr><td colspan="2" align="center"><h2>Sửa sinh viên </h2></td></tr>
        <tr>
            <th>Mã sinh viên</th>
            <td><input type="text" name="masv" size="30" value="<?php echo $maSV?>"></td>
        </tr>
        <tr>
            <th>Họ và tên</th>
            <td><input type="text" name="tensv" size="30"value="<?php echo $tenSV?>" ></td>
        </tr>
        <tr>
            <th>Giới tính</th>
            <td>
                <input type="radio" name="gt" value="0"<?php echo $gioiTinh == 0 ? checked: '';?>>Nam
                <input type="radio" name="gt" value="1"<?php echo $gioiTinh == 1 ? checked: '';?>>Nữ
            </td>
        </tr>
        <tr>
            <th>Quê quán </th>
            <td><input type="text" name="diachi" size="30" value="<?php echo $diaChi;?>" ></td>
        </tr>
        <tr>
            <th>Ngày sinh</th>
            <td><input type="text" name="date" size="30" value="<?php echo $ngaySinh;?>" ></td>
        <tr>
            <th>Ngành học</th>
            <td><input type="text" name="nganhhoc" size="30" value="<?php echo $nganhHoc;?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center ">
                <input type="submit" value="Save" name="btLuu">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if (isset($_POST['btLuu'])) {
    suaStudent($_POST['masv'],$_POST['tensv'],$_POST['gt'],$_POST['diachi'],$_POST['date'],$_POST['nganhhoc']);
}

?>

