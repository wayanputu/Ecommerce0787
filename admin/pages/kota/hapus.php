<?php
include "../../lib/koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tb_kelurah WHERE id_kel='$id'");
header("location:main.php");
?>