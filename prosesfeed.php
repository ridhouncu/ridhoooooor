<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['feed'])){
 // ambil data dari formulir
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 // buat query
 $sql = "INSERT INTO `ifeedback`(`Name`, `Email`, `Message`) VALUES ('$name',' $email',' $message')";
 $query = mysqli_query($db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 header('Location: index.php?Terkirim');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: index.php?Gagal');
 }
} else {
 die("Akses dilarang...");
}
?>