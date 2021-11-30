<?php
    include("koneksi.php");
    //pengecekan
    if(isset($_POST['simpan'])){
        //ambil data dari formulir
        $nomor_kamar = $_POST['nomor_kamar'];
        $timestamp = $_POST['timestamp'];
        $nama_kegiatan = $_POST['nama_kegiatan'];
        $tanggal_awal = $_POST['tanggal_awal'];
        $tanggal_akhir = $_POST['tanggal_akhir'];
        $nik = $_POST['nik'];
        $nama_tamu = $_POST['nama_tamu'];
        $statusco = $_POST['statusco'];
        $kota = $_POST['kota'];
        $jabatan = $_POST['jabatan'];
        $nama_kantor = $_POST['nama_kantor'];
        $no_hp = $_POST['no_hp'];
        
        //buat query update
        $sql = "UPDATE anggrek SET timestamp='$timestamp', nama_kegiatan='$nama_kegiatan', tanggal_awal='$tanggal_awal', tanggal_akhir='$tanggal_akhir',
        nik='$nik', nama_tamu='$nama_tamu', statusco='$statusco', kota='$kota', jabatan='$jabatan', nama_kantor='$nama_kantor', no_hp='$no_hp' WHERE nomor_kamar='$nomor_kamar'";
        $query = mysqli_query($db, $sql);
        //apakah query berhasil tersimpan
        if( $query ){
            header('Location: tabel.php');
        } else {
            die("Gagal menyimpan perubahan ...");
        }
    } else {
        die("Akses dilarang ...");
    }
?>
