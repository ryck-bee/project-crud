<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body >
<div class="container">
    
    <?php
        session_start();
        if(isset($_SESSION['username'])){
            echo "<br>";
            echo "Selamat datang " . $_SESSION['username'];
            echo " ";
            echo "<a href = 'logout.php'><button class='btn btn-outline-danger btn-sm'>Logout</button></a>";
            echo "<br>";
        }
    ?>
    
    <br>
    <a href="tambah.php"><button class="btn btn-outline-success btn-sm">TAMBAH IDENTITAS</button></a>
    <a href="login.php"><button class="btn btn-primary btn-sm">Login</button></a>
    <br />
    <br />
    <table class="table table-bordered" style="background-color: #f8f9fa;">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['idmahasiswa']; ?>"><button class="btn btn-success btn-sm">EDIT</button></a>
                    <a href="hapus.php?id=<?php echo $d['idmahasiswa']; ?>"><button class="btn btn-danger btn-sm">HAPUS</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

    </div>
</body>

</html>