<?php 
$conn = mysqli_connect("localhost", "root", "", "sekolah");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);

    $query = "INSERT INTO rpl VALUES('', '$nama', '$kelas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);

    $query = "UPDATE rpl SET nama = '$nama', kelas = '$kelas' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM rpl WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>