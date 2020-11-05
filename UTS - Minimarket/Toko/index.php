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
        <button><a href="data.php">Tambah Barang</a></button>
        <button><a href="filter.php">Filter</a></button>
        <br>
        <br>

        <form method="POST">
          <input type="text" placeholder="Masukan SKU pencarian ..." name="keyword">
          <button type="submit" name="cari" value="search">Cari!</button>

        </form>
        <br>
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
                  $query = $_POST['keyword'];
                  $result = mysqli_query(connection(),$query);
                  $keyword = $_POST['keyword'];
                  if($keyword !=''){
                    $select = mysqli_query(connection(), "SELECT * FROM datatoko where SKU LIKE '$keyword'");
                  }else {
                    $select = mysqli_query(connection(), "select * from datatoko");
                  } 

                 ?>


                <?php ?>
                 <?php while($data = mysqli_fetch_array($select)): ?>
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