<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-form.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from form where form_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama</label>
                        <input type="hidden" name="form_id" value="<?php echo $row['form_id']?>" class="form-control">
                        <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Telepon</label>
                        <input type="text" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select name="nama_produk" class="form-control">
                            <option value="<?php echo $row['nama_produk']?>" selected><?php echo $row['nama_produk']?></option>
                            <option value="kaos cowok">kaos cowok (produk I)</option>
                            <option value="kaos cowok">kaos cowok (produk II)</option>
                            <option value="hoodie cowok">hoodie cowok (produk III)</option>
                            <option value="kaos cowok">kaos cowok (produk IV)</option>
                        </select>
                    </div>

                      <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <select name="ukuran" class="form-control">
                            <option value="<?php echo $row['ukuran']?>" selected><?php echo $row['ukuran']?></option>
                            <option value="ukuran">S</option>
                            <option value="ukuran">M</option>
                            <option value="ukuran">L</option>
                            <option value="ukuran">XL</option>
                        </select>

                    </div>

                      <div class="form-group">
                        <label for="jumlah_produk">Jumlah Produk</label>
                        <input type="text" name="jumlah_produk" value="<?php echo $row['jumlah_produk']?>" class="form-control">
                    </div>

                      <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="date" name="tanggal_pembelian" value="<?php echo $row['tanggal_pembelian']?>" class="form-control">
                    </div>

                    

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>