<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendftaran Siswa</title>
</head>

<body>
    <header>
    <center>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <h2>form pendaftaran siswa baru</h2>
</p>
<p>
                <label for="id">Id: </label>
                <input type="text" name="id" placeholder="id" />
            </p>
            <p>
                <label for="nama_siswa">Nama: </label>
                <input type="text" name="nama_siswa" placeholder="nama_lengkap" />
            </p>
            <p>
                <label for="jurusan_yang_dipilih">jurusan yang dipilih </label>
                <select name="jurusan_yang_dipilih">
                    <option>RPL</option>
                    <option>TKJ</option>
                    <option>TJAT</option>
                    <option>ANIMASI</option>
</select>
</p>
<p>
    <label for="jenis_kelamin">jenis_kelamin: </label>
    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
</p>
<p>
    <label for="asal_sekolah">asal_sekolah: </label>
    <input type="text" name="asal_sekolah" placeholder="asal_sekolah" />
</p>
<p>
                <label for="tanggal_lahir">Tanggal_Lahir: </label>
                <input type="date" name="tanggal_lahir" />
</p>
<p>
<label for="agama">agama: </label>
<select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
</p>
<p>
<label for="alamat_lengkap">alamat_lengkap: </label>
<input type="text" name="alamat_lengkap" placeholder="alamat_lengkap" />
</p>
<p>
    <label for="no_telepon">no_telepon: </label>
    <input type="text" name="no_telepon" placeholder="no_telepon" />
</p>
<p>
    <label for="email">email: </label>
    <input type="email" name="email" placeholder="email" />
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</center>
</header>
</body>
