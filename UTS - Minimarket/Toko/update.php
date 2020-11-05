<?php
  include ('conn.php');

  $status = '';
  $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['SKU'])) {
          //query SQL
          $sku_upd = $_GET['SKU'];
          $query = "SELECT * FROM datatoko WHERE SKU = '$sku_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['SKU'];
    $barang = $_POST['barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
      //query SQL
      $sql = "UPDATE `datatoko` SET `Nama Barang`= '$barang',`Kategori Barang`='$kategori',`Harga Satuan`=$harga,`Jumlah Stok`= $stok WHERE SKU = '$sku'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <title>MINIMARKET</title>
  </head>

  <body>
        <h1>UPDATE DATA BARANG</h1>  
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div class="form-group">
              <label>SKU</label>
              <input type="text" class="form-control" placeholder="SKU" name="SKU" value="<?php echo $data['SKU'];  ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" placeholder="Nama Barang" name="barang" value="<?php echo $data['Nama Barang'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Kategori Barang</label>
              <select class="custom-select" name="kategori" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="Makanan" <?php echo $data['Kategori Barang']=='Makanan' ? "selected" : "" ?>>Makanan</option>
                <option value="Minuman" <?php echo $data['Kategori Barang']=='Minuman' ? "selected" : "" ?>>Minuman</option>
                <option value="Peralatan" <?php echo $data['Kategori Barang']=='Peralatan' ? "selected" : "" ?>>Peralatan</option>
              </select>
            </div>

            <div class="form-group">
              <label>Harga Satuan</label>
              <input type="text" class="form-control" placeholder="Harga Satuan" name="harga" value="<?php echo $data['Harga Satuan'];  ?>" required="required">
            </div>

            <div class="form-group">
              <label>Jumlah Stok</label>
              <input type="text" class="form-control" placeholder="Jumlah Stok" name="stok" value="<?php echo $data['Jumlah Stok'];  ?>" required="required">
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>
  </body>
</html>