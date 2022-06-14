<?php 
require '../functions.php';
$siswa = query("SELECT * FROM rpl");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.html">Home</a>
        </div>
    </nav>

    <div class="container mt-5">
        <center><h2 class="mb-5">Data Jurusan RPL kelas 10</h2></center>
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($siswa as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["kelas"] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin untuk menghapus data ini?')">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="tamRpl.php" class="btn btn-success mt-3">Tambah</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>