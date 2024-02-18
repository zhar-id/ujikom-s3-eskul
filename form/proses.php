<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "root", "", "sakatsports");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$nam = $_POST['nama'];
$kela = $_POST['kelas'];
$tgllahir = $_POST['tgl_lahir'];
$notelp = $_POST['notelp'];         
$eskul = $_POST['eskul'];

$nama = strtoupper($nam);
$kelas = strtoupper($kela);

$query = "INSERT INTO anggota (NAMA, KELAS, TGL_LAHIR, NOTELP, ID_ESKUL) VALUES ('$nama', '$kelas', '$tgllahir', '$notelp', '$eskul')";

if (mysqli_query($koneksi, $query)) {
    echo "<div style='
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: 20px;
    background-color: #222;
    color: #fff;
    height: 80vh;
    padding: 10px;
    border: 1px solid #555;
    '>
    Data berhasil disimpan
    <br>
    <a href='anggota.php' style='margin-top: 10px; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none;'>Cek Data</a>
    <a href='index.html' style='margin-top: 10px; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none;'>Kembali</a>
    </div>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        background-color: #222;
        color: #fff;
    }
</style>