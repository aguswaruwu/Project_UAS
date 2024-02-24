<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['form_id'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$nama_produk=$_POST['nama_produk'];
$ukuran=$_POST['ukuran'];
$jumlah_produk=$_POST['jumlah_produk'];
$tanggal_pembelian=$_POST['tanggal_pembelian'];

$ubah=$koneksi->query("update form set nama_pelanggan='$nama_pelanggan', no_hp='$no_hp', alamat='$alamat', nama_produk='$nama_produk', ukuran='$ukuran', jumlah_produk='$jumlah_produk', tanggal_pembelian='$tanggal_pembelian' where form_id='$id'");

if($ubah==true){

    header("location:tampil-form.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>