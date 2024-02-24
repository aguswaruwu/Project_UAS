<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama_pelanggan=$_POST['nama_pelanggan'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$nama_produk=$_POST['nama_produk'];
$ukuran=$_POST['ukuran'];
$jumlah_produk=$_POST['jumlah_produk'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into form(nama_pelanggan,no_hp,alamat,nama_produk,ukuran,jumlah_produk,tanggal_pembelian) 
                        values ('$nama_pelanggan', '$no_hp', '$alamat', '$nama_produk', '$ukuran', '$jumlah_produk', '$tanggal_pembelian')");

if($simpan==true){

    header("location:tampil-form.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>