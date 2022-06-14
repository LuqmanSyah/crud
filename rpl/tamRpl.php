<?php 
require '../functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST)>0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'rpl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'rpl.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Tambah Data Siswa</h2>

        <form action="" method="POST">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <th><label for="kelas">Kelas</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="nama" class="form-control" id="nama" required placeholder="Nama">
                        </td>
                        <td>
                            <input type="text" name="kelas" class="form-control" placeholder="10 RPL ..." id="kelas" required>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-success mt-3" type="submit" name="submit">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>