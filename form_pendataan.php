<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Pendataan Anggota Wisma | LPMP</title>
</head>
<body>
    <header><h3>Formulir Pendaftaran Mahasiswa Baru</h3></header>
    <form action="proses_pendataan.php" method="POST">
        <fieldset>
            <p><label for="timestamp">Timestamp : </label>
                <input type="date" name="timestamp"></p>
            <p><label for="nama_kegiatan">Nama Kegiatan: </label>
                <input type="text" name="nama_kegiatan"></p>
            <p><label for="tanggal_awal">Tanggal Awal : </label>
                <input type="date" name="tanggal_awal"></p>
            <p><label for="tanggal_akhir">Tanggal Akhir : </label>
                <input type="date" name="tanggal_akhir"></p>
            <p><label>Status Check Out : </label>
            <select name="statusco">
                <option value="">-- status --</option>
                <option value="terisi">Terisi</option>
                <option value="kosong">Kosong</option>
            </select> 
            <p><label for="nama_tamu">Nama Tamu : </label>
                <input type="text" name="nama_tamu"></p>
            <p><label for="nip">NIP : </label>
                <input type="text" name="nip"></p>
            <p><label>Jenis Kelamin : </label>
            <select name="jenis_kelamin">
                <option value="">-- jenis kelamin --</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select> 
            <p><label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir"></p>
            <p><label for="kota">Kota : </label>
                <input type="text" name="kota"></p>
            <p><label for="jabatan">Jabatan : </label>
                <input type="text" name="jabatan"></p>
            <p><label for="nama_kantor">Nama Kantor : </label>
                <input type="text" name="nama_kantor"></p>
            <p><label for="no_hp">No. HP : </label>
                <input type="text" name="no_hp"></p>
            <p><label>Wisma : </label>
            <select name="wisma">
                <option value="">-- wisma --</option>
                <option value="handayani">Handayani</option>
                <option value="anggrek">Anggrek</option>
            </select> 
            <p><label for="nomor_kamar">No. Kamar: </label>
                <input type="text" name="nomor_kamar"></p>
            <p><input type="submit" value="Kirim" name="kirim"></p>
        </fieldset>
    </form>
</body>
</html>