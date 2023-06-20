<?php
$conn = mysqli_connect('localhost', 'root', '' , 'db_masjid');
if (!$conn) {
    die('Gagal terhubung ke database: ' . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $wadah[] = $row;
    }
    return $wadah;
}

function tambah($data)
{
    global $conn;

    $nama_donatur = htmlspecialchars($data["nama_donatur"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal"]);

    $query = "INSERT INTO donasi (nama_donatur, paket, kategori, nominal)
              VALUES ('$nama_donatur', '$paket', '$kategori', '$nominal')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>