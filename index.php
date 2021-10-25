<?php
    include_once ('connec.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <style>
        h2{
            text-align: center;
            color: green;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Danh sách sinh viên</h2>
    <table class="search_from" align="center" cellpadding="5">
        <tr>
            <td>
                <form method="GET">
                    <input type="text" name="search" placeholder="Nhập từ khoá cần tìm"
                           value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>">
                    <input type="submit"  value="Tìm">
<!--                    <a href="index.php"><button>Tất cả</button></a>-->
                </form>
            </td>
        </tr>
        <?php
                global $conn;
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    $key = $_GET['search'];

                $sql = "SELECT * FROM sinhvien WHERE ID LIKE '%$key%' OR FullName LIKE '%$key%' OR
                Gender LIKE '%$key%' OR Address LIKE '%$key%' OR Date LIKE '%$key%' OR Faculty LIKE '%$key%'";
                } else {
                $sql = "SELECT * FROM sinhvien";
                }
                $query= mysqli_query($conn, $sql);

        ?>
            </td>
        </tr>
    </table>
    <table border="1" align="center" cellpadding="0" cellspacing="0" width="800px">
        <tr>
            <th>Mã sinh viên </th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Ngày sinh</th>
            <th>Ngành học </th>
            <th>Tác vụ </th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($query)) {
            $maSV = $row['ID'];
            $tenSV= $row['FullName'];
            $gioiTinh = $row['Gender'];
            $diaChi = $row['Address'];
            $ngaySinh = $row['Date'];
            $nganhHoc = $row['Faculty'];
            ?>
            <tr>
                <td><?php echo $maSV ?></td>
                <td><?php echo $tenSV ?></td>
                <td><?php if($gioiTinh == 1) echo 'Nữ'; else if ($gioiTinh == 0) echo 'Nam'; ?></td>
                <td><?php echo $diaChi ?></td>
                <td><?php echo $ngaySinh ?></td>
                <td><?php echo $nganhHoc ?></td>
                <td>
                    <a href="SuaSinhVien.php?ID=<?php echo $maSV; ?>">Sửa</a>
                    <a href="XoaSinhVien.php?ID=<?php echo $maSV; ?>">Xoá</a>
                </td>
            </tr>

            <?php
        }
        ?>
        <tr>
            <td colspan="6" align="center"><a href="ThemSinhVien.php"><button>Thêm mới</button></a></td>
        </tr>
    </table>
</body>
</html>


