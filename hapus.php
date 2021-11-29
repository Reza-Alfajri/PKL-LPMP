<?php
//Nama File : hapus.php
include("koneksi.php");
if(isset($_GET['nip'])) {
    //ambil id dari query string
    $nip = $_GET['nip'];

    //buat query hapus
    $sql ="DELETE FROM karyawan WHERE nip=$nip";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil?
    if($query) {
        header('Location: tabel.php');
    } else {
        die("Gagal menghapus...");
    }
    
} else {
    die("Akses dilarang...");
}
?>