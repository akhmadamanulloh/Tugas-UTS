<?php
include "koneksi.php";

$id = $_POST['id_099'];
$nama = $_POST['nama_099'];
$email = $_POST['email_099'];

$sql = "UPDATE tbl_099 set nama_099='$nama', email_099='$email' WHERE id_099=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data mahasiswa gagal";
}
else{
    echo "eksekusi update data mahsiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?> 