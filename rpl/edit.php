<?php 
require '../functions.php';
$id = $_GET["id"];
$sis = query("SELECT * FROM rpl WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (edit($_POST)>0) {
        echo "
            <script>
                alert('Data berhasil diedit!');
                document.location.href = 'rpl.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit!');
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
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Edit Data Siswa</h2>

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $sis["id"]; ?>">
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
                            <input type="text" name="nama" class="form-control" id="nama" required placeholder="Nama" value="<?= $sis["nama"] ?>">
                        </td>
                        <td>
                            <input type="text" name="kelas" class="form-control" placeholder="10 RPL ..." id="kelas" required value="<?= $sis["kelas"] ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-success mt-3" type="submit" name="submit">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>