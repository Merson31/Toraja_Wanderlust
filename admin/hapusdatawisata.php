<?php
include '../class/wisata.php';

$db = new wisata();

if (isset($_GET['id_wisata']) && is_numeric($_GET['id_wisata'])) {
    $id = $_GET['id_wisata'];

    // Buat objek database
    $db = new database();

    // Koneksi ke database
    $conn = $db->getConnection();

    // Periksa koneksi
    if ($conn->connect_errno) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Escape karakter khusus pada data
    $id = $conn->real_escape_string($id);

    // Query untuk menghapus data wisata berdasarkan id_wisata
    $sql = "DELETE FROM tbl_wisata WHERE id_wisata = '$id'";

    if ($conn->query($sql) === TRUE) {
        // Tutup koneksi
        $conn->close();

        // Tampilkan notifikasi penghapusan berhasil
        echo "<script>alert('Data berhasil dihapus');</script>";

        // Redirect ke halaman yang menampilkan data
        header("Location: admin_wisata.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID wisata tidak valid.";
    exit();
}
?>
