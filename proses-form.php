
<?php

include "koneksi.php";
$nama_pelanggan = $koneksi->real_escape_string($_POST['nama_pelanggan']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$nama_produk = $koneksi->real_escape_string($_POST['nama_produk']);
$ukuran = $koneksi->real_escape_string($_POST['ukuran']);
$jumlah_produk = $koneksi->real_escape_string($_POST['jumlah_produk']);
$tanggal_pembelian = $koneksi->real_escape_string($_POST['tanggal_pembelian']);


$simpan=$koneksi->query("insert into form(nama_pelanggan,no_hp,alamat,nama_produk,ukuran,jumlah_produk,tanggal_pembelian) 
                        values ('$nama_pelanggan', '$no_hp', '$alamat', '$nama_produk', '$ukuran', '$jumlah_produk', '$tanggal_pembelian')");

if($simpan==true){

    header("location:form.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>