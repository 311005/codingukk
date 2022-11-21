<?php

include("config.php");


if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_siswa'];
    $jurusan_yang_dipilih = $_post[ 'jurusan_yang_dipilih'];
    $jenis_kelamin = $_post[ 'jenis_kelamin'];
    $asal_sekolah = $_post[ 'asal_sekolah'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_agama[ 'agama'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $no_telepon = $_post[ 'no_telepon'];
    $email = $_post[ 'email'];

    $sql = "INSERT INTO tb_pendaftaran_siswa (`id`, `nama_siswa`, `jurusan_yang_dipilih`, `jenis_kelamin`, `asal_sekolah`, `tanggal_lahir`, `agama`, `alamat_lengkap`, `no_telepon`, `email`) VALUES ('$id', '$nama_siswa', '$jurusan_yang_dipilih]', '$jenis_kelamin', '$asal_sekolah', '$tanggal_lahir', '$agama', '$alamat_lengkap', '$no_telepon', '$email')";
    $query = mysqli_query($db, $sql);


    if( $query ) {      

        header('Location: index.php?status=sukses');
        
} else {

    header('Location: index.php?status=gagal');
}

} else {
    die("akses dilarang...");

}
?>
