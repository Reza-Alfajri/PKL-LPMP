<?php
//Nama File : proses_pendaftaran.php
include("koneksi.php");
//cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])) {
    //ambil data dari formulir
    $timestamp = $_POST['timestamp'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $statusco = $_POST['statusco'];
    $nip = $_POST['nip'];
    $nama_tamu = $_POST['nama_tamu'];
    $nip = $_POST['nip'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kota = $_POST['kota'];
    $jabatan = $_POST['jabatan'];
    $nama_kantor = $_POST['nama_kantor'];
    $no_hp = $_POST['no_hp'];
    $wisma = $_POST['wisma'];
    $nomor_kamar = $_POST['nomor_kamar'];
    //buat query
    $sql = "INSERT INTO karyawan (timestamp, nama_kegiatan, tanggal_awal, tanggal_akhir, statusco, nama_tamu, nip, jenis_kelamin, tanggal_lahir, kota, jabatan, nama_kantor, no_hp, wisma, nomor_kamar)
    VALUE ('$timestamp', '$nama_kegiatan', '$tanggal_awal', '$tanggal_akhir', '$statusco', '$nama_tamu', '$nip', '$jenis_kelamin', '$tanggal_lahir', '$kota', '$jabatan', '$nama_kantor', '$no_hp', '$wisma', '$nomor_kamar')";
    $query = mysqli_query($db, $sql);
    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: tabel_admin.php?status=berhasil');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: form_daftar.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
