<?php
    include("koneksi.php");
    //pengecekan
    if(isset($_POST['simpan'])){
        //ambil data dari formulir
        $nip = $_POST['nip'];
        $nama_tamu = $_POST['nama_tamu'];
        $tanggal_awal = $_POST['tanggal_awal'];
        $tanggal_akhir = $_POST['tanggal_akhir'];
        $statusco = $_POST['statusco'];
        $wisma = $_POST['wisma'];
        $nomor_kamar = $_POST['nomor_kamar'];
        //buat query update
        $sql = "UPDATE karyawan SET tanggal_awal='$tanggal_awal', tanggal_akhir='$tanggal_akhir', statusco='$statusco',
        wisma='$wisma', nomor_kamar='$nomor_kamar' WHERE nip=$nip";
        $query = mysqli_query($db, $sql);
        //apakah query berhasil tersimpan
        if( $query ){
            header('Location: tabel_admin.php');
        } else {
            die("Gagal menyimpan perubahan ...");
        }
    } else {
        die("Akses dilarang ...");
    }
?>