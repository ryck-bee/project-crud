<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Belajar PHP | Tambah Data Identitas</title>
</head>

<body class="container">
    <header class="mt-4 mb-4">
        <h3>Tambah Identitas</h3>
    </header>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama" class="form-label">Nama : </label>
                <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat" class="form-label">Alamat : </label>
                <textarea name="alamat" class="form-control"></textarea>
            </p>
            <p>
                <label for="telp" class="form-label">Nomor HP : </label>
                <input name="telp" class="form-control" placeholder="nomor hp"></input>
            </p>
            <p>
                <label for="prodi" class="form-label">Prodi : </label>
                <input type="text" class="form-control" name="prodi" placeholder="prodi" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>