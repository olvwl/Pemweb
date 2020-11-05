<?php 
  include ('conn.php'); 

  $status = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $sku = $_POST['SKU'];
      $barang = $_POST['barang'];
      $kategori = $_POST['kategori'];
      $harga = $_POST['harga'];
      $stok = $_POST['stok'];
      //query SQL
      $query = "INSERT INTO datatoko (`SKU`, `Nama Barang`, `Kategori Barang`, `Harga Satuan`, `Jumlah Stok`) VALUES('$sku','$barang','$kategori',$harga, '$stok')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      header('Location: index.php?status='.$status);
  }



?>

<!DOCTYPE html>
<html>
  <head>
    <title>MINIMARKET</title>
  </head>

  <body>
          <h2>Tambah Data Barang</h2>
          <form action="data.php" method="POST">
            
            <div class="form-group"">
              <label>SKU : </label>
              <input type="text" class="form-control" placeholder="SKU" name="SKU" required="required">
            </div>
            <div class="form-group">
              <br>
              <label>Nama Barang : </label>
              <input type="text" class="form-control" placeholder="Nama Barang" name="barang" required="required">
            </div>
            <div class="form-group">
              <br>
              <label>Kategori Barang : </label>
              <select class="custom-select" name="kategori" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Peralatan">Peralatan</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <label>Harga Satuan : </label>
              <input type="text" class="form-control" placeholder="Harga Satuan" name="harga" required="required">
            </div>
            <br>

            <div class="form-group">
              <label>Jumlah Stok : </label>
              <input type="text" class="form-control" placeholder="Jumlah Stok" name="stok" required="required">
            </div>
            <br>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          <br>

          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>';
              }
           ?>


          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data gagal di-update</div>';
              }

            }
           ?>

          </div>
  </body>
</html>