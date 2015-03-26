<?php include '../includes/connect-database.php'; ?>
<html>
    <?php include '../includes/head.php'; ?>
    <body>
        <div class="container">
            <h2>THÊM MỚI MẶT HÀNG:</h2>
            <form class="container" action="ThemMatHang.php" method="post">
                <table class="table-condensed">
                    <tr>
                        <td>Tên mặt hàng: </td>
                        <td><input type="text" name="ten-mat-hang" /></td>
                    </tr>
                    <tr>
                        <td>Số lượng: </td>
                        <td><input type="text" name="so-luong" /></td>
                    </tr>
                    <tr>
                        <td>Giá bán: </td>
                        <td><input type="text" name="gia-ban" /></td>
                    </tr>
                    <tr>
                        <td>Giá nhập: </td>
                        <td><input type="text" name="gia-nhap" /></td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành: </td>
                        <td><input type="text" name="he-dieu-hanh" /></td>
                    </tr>
                    <tr>
                        <td>CPU: </td>
                        <td><input type="text" name="cpu" /></td>
                    </tr>
                    <tr>
                        <td>Ram: </td>
                        <td><input type="text" name="ram" /></td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ trong: </td>
                        <td><input type="text" name="bo-nho-trong" /></td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ ngoài: </td>
                        <td><input type="text" name="bo-nho-ngoai" /></td>
                    </tr>
                    <tr>
                        <td>Camera: </td>
                        <td><input type="text" name="camera" /></td>
                    </tr>
                    <tr>
                        <td>Bảo hành: </td>
                        <td><input type="text" name="bao-hanh" /></td>
                    </tr>
                    <tr>
                        <td>Dung lượng pin: </td>
                        <td><input type="text" name="dung-luong-pin" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit" class="btn-primary" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
<?php
if (isset($_POST['ten-mat-hang']) && isset($_POST['so-luong']) && isset($_POST['gia-ban']) && isset($_POST['gia-nhap'])) {
    echo "yes<br />";
    $sql = "insert into mat_hang (ten_mat_hang, "
            . "so_luong, "
            . "gia_ban, "
            . "gia_nhap, "
            . "he_dieu_hanh, "
            . "cpu, "
            . "ram, "
            . "bo_nho_trong, "
            . "bo_nho_ngoai, "
            . "camera, "
            . "bao_hanh, "
            . "dung_luong_pin"
            . ") "
            . "values ("
            . "'" . $_POST['ten-mat-hang'] . "', "
            . "'" . $_POST['so-luong'] . "', "
            . "'" . $_POST['gia-ban'] . "', "
            . "'" . $_POST['gia-nhap'] . "', "
            . "'" . $_POST['he-dieu-hanh'] . "', "
            . "'" . $_POST['cpu'] . "', "
            . "'" . $_POST['ram'] . "', "
            . "'" . $_POST['bo-nho-trong'] . "', "
            . "'" . $_POST['bo-nho-ngoai'] . "', "
            . "'" . $_POST['camera'] . "', "
            . "'" . $_POST['bao-hanh'] . "', "
            . "'" . $_POST['dung-luong-pin'] . "'"
            . ")";
    mysql_query($sql);
    mysql_close();
}
?>