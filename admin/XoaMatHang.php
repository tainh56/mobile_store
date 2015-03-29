<?php include '../includes/connect-database.php'; ?>
<?php

$id = $_GET['id'];
$sql = "delete from mat_hang where id_mat_hang = $id";
mysql_query($sql);
mysql_close();
header('Location: ViewMatHang.php');
?>