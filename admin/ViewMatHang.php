<?php include '../includes/connect-database.php'; ?>
<?php
$query = "Select * from mat_hang";
$query_run = mysql_query($query);
?>

<html>
    <?php include '../includes/head.php'; ?>
    <body>
        <div class="container">

            <h2>DANH SÁCH MẶT HÀNG</h2>
            <table class="table table-bordered table-hover table-condensed">
                <tdhead>
                    <tr>
                        <th>Id mặt hàng</th>
                        <th>Tên mặt hàng</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Giá nhập</th>
                        <th>Hệ điều hành</th>
                        <th>CPU</th>
                        <th>Ram</th>
                        <th>Bộ nhớ trong</th>
                        <th>Bộ nhớ ngoài</th>
                        <th>Camera</th>
                        <th>Bảo hành</th>
                        <th>Dung lượng pin</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </tdhead>
                <tdbody>
                    <?php
                    while ($row = mysql_fetch_array($query_run)) {
                        ?>
                        <tr class='success'>
                            <td><?php echo $row['id_mat_hang']; ?></td>
                            <td><?php echo $row['ten_mat_hang']; ?></td>
                            <td><?php echo $row['so_luong']; ?></td>
                            <td><?php echo $row['gia_ban']; ?></td>
                            <td><?php echo $row['gia_nhap']; ?></td>
                            <td><?php echo $row['he_dieu_hanh']; ?></td>
                            <td><?php echo $row['cpu']; ?></td>
                            <td><?php echo $row['ram']; ?></td>
                            <td><?php echo $row['bo_nho_trong']; ?></td>
                            <td><?php echo $row['bo_nho_ngoai']; ?></td>
                            <td><?php echo $row['camera']; ?></td>
                            <td><?php echo $row['bao_hanh']; ?></td>
                            <td><?php echo $row['dung_luong_pin']; ?></td> 
                            <td><a href=<?php echo "SuaMatHang.php?id=" . $row['id_mat_hang'] ?>><i class='fa fa-pencil'></i></a></td>
                            <td><a href=<?php echo "XoaMatHang.php?id=" . $row['id_mat_hang'] ?>><i class='fa fa-times'></i></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tdbody>
            </table>
            <?php
            echo "<br />";
            mysql_close();
            ?>
        </div>
    </body>
</html>