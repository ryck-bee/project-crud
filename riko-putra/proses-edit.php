<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['idmahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', telp='$telp', prodi='$prodi' WHERE idmahasiswa=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
