<?php
    session_start();
    include "connect.php";

    $no_pendf = date('ymdhms');

    //menangkap data biodata
    $nama = $_POST['nama'];
    $id = $_SESSION['id'];
    $kelamin = $_POST['kelamin'];
    $tgllhr = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];

    //menangkap data berkas
    $nama_foto = $_FILES['foto']['name'];
	$tmp_foto = $_FILES['foto']['tmp_name'];
    $nama_kk = $_FILES['cv']['name'];
	$tmp_kk = $_FILES['cv']['tmp_name'];
    $nama_akta = $_FILES['ktp']['name'];
	$tmp_akta = $_FILES['ktp']['tmp_name'];
    $nama_ijazah = $_FILES['ijazah']['name'];
    $tmp_ijazah = $_FILES['ijazah']['tmp_name'];
    
    $queryberkas = mysqli_query($connect, "INSERT INTO berkas VALUES('0', '$nama_foto', '$nama_kk', '$nama_akta', '$nama_ijazah')");
    $idberkas = mysqli_insert_id($connect);

    $querypendaftar = mysqli_query($connect, "INSERT INTO pendaftar VALUES('$no_pendf','$id', '$nama', '$kelamin', '$tgllhr', '$agama', '$alamat', '$idberkas', '0')");

    if ($queryberkas AND $querypendaftar) {
        move_uploaded_file($tmp_foto, '../berkas/'.$nama_foto);
        move_uploaded_file($tmp_kk, '../berkas/'.$nama_kk);
        move_uploaded_file($tmp_akta, '../berkas/'.$nama_akta);
        move_uploaded_file($tmp_ijazah, '../berkas/'.$nama_ijazah);
        echo "<script>alert('Pendaftaran siswa berhasil!'); document.location.href = '../views/pendaftar?daftarsiswa';</script>";
    } else {
        echo "<script>alert('Pendaftaran siswa gagal!'); document.location.href = '../views/pendaftar?daftarsiswa';</script>";
    }