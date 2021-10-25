<?php
    include ('xulydulieu.php');
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
<form  method="post">
    <table>
        <tr><td colspan="2" align="center"><h2>Thêm sinh viên </h2></td></tr>
        <tr>
            <th>Mã sinh viên</th>
            <td><input type="text" name="masv" size="30"></td>
        </tr>
        <tr>
            <th>Họ và tên</th>
            <td><input type="text" name="tensv" size="30"></td>
        </tr>
        <tr>
            <th>Giới tính</th>
            <td>
                <input type="radio" name="gt" value="0">Nam
                <input type="radio" name="gt" value="1">Nữ
            </td>
        </tr>
        <tr>
            <th>Quê quán </th>
            <td><input type="text" name="diachi" size="30"></td>
        </tr>
        <tr>
            <th>Ngày sinh</th>
            <td><input type="text" name="date" size="30"></td>
        <tr>
            <th>Ngành học</th>
            <td><input type="text" name="nganhhoc" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center ">
                <input type="submit" value="Save" name="btSave">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
    if (isset($_POST['btSave'])) {
        addStudent($_POST['masv'],$_POST['tensv'],$_POST['gt'],$_POST['diachi'],$_POST['date'],$_POST['nganhhoc']);
    }

?>