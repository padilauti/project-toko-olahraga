<?php
include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>Data Peralatan Olahraga</h3>
            </div>
            <div class="col-4">
                <form method="POST" class="form-inline" action="<?php echo $_SERVER['PHP_SELF']?>">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2s" class="sr-only">Password</label>
    <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword">
  </div>
  <button name="pencarian" type="submit" class="btn btn-primary mb-2">Cari Data</button>
</form> 
            </div>
    </div>
    <div class="row">
        <div class="col-12">
          
            <table Class="table table-bordered">
        <tr><th>ID</th><th>NAMA BARANG</th><th>BRAND</th><th>HARGA</th><th width="130px;">Aksi</th></tr>
        <?php
        $batas = 3;
        $halaman = isset($_GET['hal'])?$_GET['hal']:0;
        if(isset($_POST['pencarian'])) {
          // query pencarian data
          $keyword = $_POST['keyword'];
          $sql = "SELECT b.id_barang,b.nama_barang,b.harga,c.nama_brand,k.nama_kategori
                FROM barang as b,brand as c,kategori as k
                WHERE b.brand_id=c.id_brand and k.id_kategori=b.kategori_id and b.nama_barang like '%$keyword%' order by b.id_barang ASC limit $halaman,$batas";
        }else{
          // query menampilkan data biasa
        $sql = "SELECT b.id_barang,b.nama_barang,b.harga,c.nama_brand,k.nama_kategori
                FROM barang as b,brand as c,kategori as k
                WHERE b.brand_id=c.id_brand and k.id_kategori=b.kategori_id order by b.id_barang ASC limit $halaman,$batas";
        }
        $barang = mysqli_query($konek, $sql);
        while ($row = mysqli_fetch_array($barang)) {
            echo "<tr>
              <td>$row[id_barang]</td>
              <td>$row[nama_barang]</td>
              <td>$row[nama_brand]</td>
              <td>$row[harga]</td>
              <td><a href='edit_peralatanolahraga.php?id_barang=$row[id_barang]' class='btn btn-success btn-sm'>Edit</a>
                  <a href='delete_peralatanolahraga.php?id_barang=$row[id_barang]' class='btn btn-info btn-sm'>Delete</a>
              </td>
              </tr>";
        }
        ?>
    </table>

      <div class="float-right">
          <nav aria-label="Page navigation example">
               <ul class="pagination">
                    <?php
                    if((!isset($_GET['hal'])) or ($_GET['hal']==1)) {
                      $prev = 1;
                    }else{
                      $prev = $_GET['hal']-1;
                    }
                    ?>
                    <li class="page-item"><a class="page-link" href="index.php?hal=<?php echo $prev;?>">Previous</a></li>
                    <?php
                    // sql untuk menghitung jumlah data untuk paging
                    $sql2 = mysqli_query($konek,"SELECT b.id_barang,b.nama_barang,b.harga,c.nama_brand,k.nama_kategori
                    FROM barang as b,brand as c,kategori as k
                    WHERE b.brand_id=c.id_brand and k.id_kategori=b.kategori_id order by b.id_barang ASC");

                    // menghitung jumlah data
                    $jml_data    = mysqli_num_rows($sql2);

                    // menghitung jumlah halaman 
                    $jml_halaman = ceil($jml_data/$batas);

                    // untuk membuat paging
                    for($hal=1;$hal<=$jml_halaman;$hal++) {
                      echo "<li class='page-item'><a class='page-link' href='index.php?hal=$hal'>$hal</a></li>";
                    }
                    ?>
                    <?php
                    ?>
                    <li class="page-item"><a class="page-link" href="index.php?hal=<?php echo $halaman+1;?>">Next</a></li>
                 </ul>
            </nav>
      </div>
      <a href="input_peralatanolahraga.php" class="btn btn-danger btn-sm">Input Data Peralatan</a>
        </div>
    </div>
  
       
</div>
<?php
include 'footer.php';
?>
