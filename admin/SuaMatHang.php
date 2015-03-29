<?php include '../includes/connect-database.php'; ?>
<?php
if (isset($_POST['id-mat-hang']) && isset($_POST['ten-mat-hang']) && isset($_POST['so-luong']) && isset($_POST['gia-ban']) && isset($_POST['gia-nhap'])) {
    $sql = "update mat_hang set "
            . "ten_mat_hang = '" . $_POST['ten-mat-hang'] . "', "
            . "so_luong = '" . $_POST['so-luong'] . "', "
            . "gia_ban = '" . $_POST['gia-ban'] . "', "
            . "gia_nhap = '" . $_POST['gia-nhap'] . "', "
            . "he_dieu_hanh = '" . $_POST['he-dieu-hanh'] . "', "
            . "cpu = '" . $_POST['cpu'] . "', "
            . "ram = '" . $_POST['ram'] . "', "
            . "bo_nho_trong = '" . $_POST['bo-nho-trong'] . "', "
            . "bo_nho_ngoai = '" . $_POST['bo-nho-ngoai'] . "', "
            . "ten_mat_hang = '" . $_POST['ten-mat-hang'] . "', "
            . "camera = '" . $_POST['camera'] . "', "
            . "bao_hanh = '" . $_POST['bao-hanh'] . "', "
            . "dung_luong_pin = '" . $_POST['dung-luong-pin'] . "' "
            . "where id_mat_hang = '" . $_POST['id-mat-hang'] . "'";
    mysql_query($sql);
    mysql_close();
    header('Location: ViewMatHang.php');
} else {
    $id = $_GET['id'];
    $sql = "select * from mat_hang where id_mat_hang = $id";
    $query = mysql_query($sql);
    ?>
    <html>
        <?php include '../includes/head.php'; ?>
        <body>
            <div class="container">
                <h2>SỬA MẶT HÀNG:</h2>
                <form class="container" action="SuaMatHang.php" method="post">
                    <table class="table-condensed">
                        <?php
                        while ($row = mysql_fetch_array($query)) {
                            ?>
                        <tr style="display: none;">
                                <td>ID Mặt hàng: </td>
                                <td><input type="text" name="id-mat-hang" value="<?php echo $row['id_mat_hang']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Tên mặt hàng: </td>
                                <td><input type="text" name="ten-mat-hang" value="<?php echo $row['ten_mat_hang']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Số lượng: </td>
                                <td><input type="text" name="so-luong" value="<?php echo $row['so_luong']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Giá bán: </td>
                                <td><input type="text" name="gia-ban" value="<?php echo $row['gia_ban']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Giá nhập: </td>
                                <td><input type="text" name="gia-nhap" value="<?php echo $row['gia_nhap']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Hệ điều hành: </td>
                                <td><input type="text" name="he-dieu-hanh" value="<?php echo $row['he_dieu_hanh']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>CPU: </td>
                                <td><input type="text" name="cpu" value="<?php echo $row['cpu']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Ram: </td>
                                <td><input type="text" name="ram" value="<?php echo $row['ram']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Bộ nhớ trong: </td>
                                <td><input type="text" name="bo-nho-trong" value="<?php echo $row['bo_nho_trong']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Bộ nhớ ngoài: </td>
                                <td><input type="text" name="bo-nho-ngoai" value="<?php echo $row['bo_nho_ngoai']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Camera: </td>
                                <td><input type="text" name="camera" value="<?php echo $row['camera']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Bảo hành: </td>
                                <td><input type="text" name="bao-hanh" value="<?php echo $row['bao_hanh']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Dung lượng pin: </td>
                                <td><input type="text" name="dung-luong-pin" value="<?php echo $row['dung_luong_pin']; ?>" /></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td><input type="submit" value="submit" class="btn-primary" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </body>
    </html>
    <?php
    mysql_close();
}
?>