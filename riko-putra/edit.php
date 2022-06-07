<?php
include "connect.php";
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM mahasiswa WHERE idmahasiswa=$id");
while ($d = mysqli_fetch_array($query)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Belajar PHP | Edit Data</title>
    </head>

    <body class="container">
        <header class="mt-4 mb-4">
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="idmahasiswa" value="<?php echo $d['idmahasiswa']; ?>" />
                <p>
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat" class="form-label">Alamat: </label>
                    <textarea name="alamat" class="form-control"><?php echo $d['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="telp" class="form-label">Nomor HP: </label>
                    <input name="telp" class="form-control" placeholder="nomor hp" value="<?php echo $d['telp'] ?>" />
                </p>
                <p>
                    <label for="prodi" class="form-label">Prodi: </label>
                    <input type="text" class="form-control" name="prodi" placeholder="prodi" value="<?php echo $d['prodi'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>