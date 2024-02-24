<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-form.php" method="POST">


                  <div class="form-group">
                        <label for="nama_pelanggan">Nama</label>
                        <input type="text" name="nama_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Telepon</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select name="nama_produk" class="form-control">
                            <option value="kaos cowok">kaos cowok (produk I)</option>
                            <option value="kaos cowok">kaos cowok (produk II)</option>
                            <option value="hoodie cowok">hoodie cowok (produk III)</option>
                            <option value="kaos cowok">kaos cowok (produk IV)</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="ukuran">ukuran</label>
                        <select name="ukuran" class="form-control">
                            <option value="ukuran">S</option>
                            <option value="ukuran">M</option>
                            <option value="ukuran">L</option>
                            <option value="ukuran">XL</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="jumlah_produk">Jumlah Produk</label>
                        <input type="text" name="jumlah_produk" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_pembelian" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>