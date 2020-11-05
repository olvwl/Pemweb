<?php 
  error_reporting(0);
  include ('conn.php'); 

  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>MINIMARKET</title>
  </head>

  <body>
      <h1>BAROKAH MINIMARKET</h1>
      <br>
        <button><a href="index.php">Kembali</a></button>
        <button><a href="filter.php">Filter</a></button>
        <br>
        <br>

        <form method="POST">
             <div class="form-group">
              <br>
              <label>Range Harga Awal: </label>
              <select class="custom-select" name="awal" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="0">0</option>
                <option value="100000">100000</option>
                <option value="200000">200000</option>
              </select>
            </div>

            <div class="form-group">
              <br>
              <label>Range Harga Akhir: </label>
              <select class="custom-select" name="akhir" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="50000">50000</option>
                <option value="150000">150000</option>
                <option value="300000">300000</option>
              </select>
            </div>
            <br>

            <button type="submit" name="ok">Simpan</button>
        </form>
        <br>


          <div class="table-responsive" >
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
                  
                  $hasil1 = $_POST['awal'];
                  $hasil2 = $_POST['akhir'];
                  if($hasil1 != ''){
                    $query = "SELECT * FROM datatoko WHERE `Harga Satuan` BETWEEN $hasil1 AND $hasil2";
                    $result = mysqli_query(connection(),$query);
                  }else{
                    $query = "SELECT * FROM datatoko";
                    $result = mysqli_query(connection(),$query);
                  }
                  
                 ?>


                <?php ?>
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
  </body>
</html>