<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
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
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
  </head>

  <body>

  <h1>BAROKAH MINIMARKET</h1>
          <h2>Tambah Data Barang</h2>
          <form action="data.php" method="POST">
            
            <div class="form-group"">
              <label>SKU</label><br>
              <input type="text" class="form-control" placeholder="SKU" name="SKU" required="required">
            </div>
            <div class="form-group">
              <label>Nama Barang</label><br>
              <input type="text" class="form-control" placeholder="Nama Barang" name="barang" required="required">
            </div>
            <div class="form-group">
              <label>Kategori Barang</label>
              <select class="custom-select" name="kategori" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Peralatan">Peralatan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Harga Satuan</label><br>
              <input type="text" class="form-control" placeholder="Harga Satuan" name="harga" required="required">
            </div>

            <div class="form-group">
              <label>Jumlah Stok</label><br>
              <input type="text" class="form-control" placeholder="Jumlah Stok" name="stok" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>

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
           <h2>Data Barang</h2>
           <form action="data.php" method="post">
              <input type="text" name="keyword" size="40"
              placeholder="Masukkan SKU Pencarian ..">
              <button type="submit" name="cari"> Cari</button>
           </form>

           <?php
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              echo"<b>Hasil Pencarian : ".$cari."</b>";
            }
           ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm" border="1" cellspacing="0" width="60%">
              <thead>
              <tr style="text-align: center; font-weight: bold;background-color: #eee;">
                  <th>SKU</th>
                  <th>Nama Barang</th>
                  <th>Kategori Barang</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah Stok</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM datatoko";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  
                  <tr style="text-align: center;">
                    <td><?php echo $data['SKU'];  ?></td>
                    <td><?php echo $data['Nama Barang'];  ?></td>
                    <td><?php echo $data['Kategori Barang'];  ?></td>
                    <td><?php echo $data['Harga Satuan'];  ?></td>
                    <td><?php echo $data['Jumlah Stok'];  ?></td>
                    <td>
                      <a href="<?php echo "update.php?SKU=".$data['SKU']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?SKU=".$data['SKU']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
                 
              </tbody>
            </table>
          </div>
  </body>
</html>