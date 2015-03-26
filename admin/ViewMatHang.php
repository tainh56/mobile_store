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
                        <td>Id mặt hàng</td>
                        <td>Tên mặt hàng</td>
                        <td>Số lượng</td>
                        <td>Giá bán</td>
                        <td>Giá nhập</td>
                        <td>Hệ điều hành</td>
                        <td>CPU</td>
                        <td>Ram</td>
                        <td>Bộ nhớ trong</td>
                        <td>Bộ nhớ ngoài</td>
                        <td>Camera</td>
                        <td>Bảo hành</td>
                        <td>Dung lượng pin</td>
                        <td>Sửa</td>
                        <td>Xóa</td>

                    </tr>
                </tdhead>
                <tdbody>
                    <?php
                    while ($row = mysql_fetch_array($query_run)) {
                        echo "<tr class='success'>";
                        echo "<td>" . $row['id_mat_hang'] . "</td>";
                        echo "<td>" . $row['ten_mat_hang'] . "</td>";
                        echo "<td>" . $row['so_luong'] . "</td>";
                        echo "<td>" . $row['gia_ban'] . "</td>";
                        echo "<td>" . $row['gia_nhap'] . "</td>";
                        echo "<td>" . $row['he_dieu_hanh'] . "</td>";
                        echo "<td>" . $row['cpu'] . "</td>";
                        echo "<td>" . $row['ram'] . "</td>";
                        echo "<td>" . $row['bo_nho_trong'] . "</td>";
                        echo "<td>" . $row['bo_nho_ngoai'] . "</td>";
                        echo "<td>" . $row['camera'] . "</td>";
                        echo "<td>" . $row['bao_hanh'] . "</td>";
                        echo "<td>" . $row['dung_luong_pin'] . "</td>";
                        $link = 'SuaMatHang.php?id=' . $row['id_mat_hang']; 
                        echo "<td><a href=$link ><i class='fa fa-pencil'></i></a></td>";
                        $link = 'XoaMatHang.php?id=' . $row['id_mat_hang'];
                        echo "<td><a href=$link><i class='fa fa-times'></i></a></td>";
                        echo "</tr>";
                        ?>
                    </tdbody>
                </table>
                <?php
            }
            echo "<br />";
            mysql_close();
            ?>
        </div>
    </body>
</html>