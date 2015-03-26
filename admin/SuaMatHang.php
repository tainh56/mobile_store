<?php include '../includes/connect-database.php'; ?>
<?php
$id = $_GET['id'];
$sql = "select * from mat_hang where id_mat_hang = $id";
$query = mysql_query($sql);
?>
<html>
    <?php include '../includes/head.php'; ?>
    <body>
        <div class="container">
            <h2>THÊM MỚI MẶT HÀNG:</h2>
            <form class="container">
                <table class="table-condensed">
                    <?php
                    while ($row = mysql_fetch_array($query)) {
                        ?>
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
                    mysql_close();
                    ?>
                    <tr>
                        <td><input type="submit" value="submit" class="btn-primary" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>