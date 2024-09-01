<?php
include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>Data Admin</h3>
            </div>
            <div class="col-4">
                <form method="POST" class="form-inline" action="<?php echo $_SERVER['PHP_SELF']?>">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="text" class="form-control" name="keyword" placeholder="Masukan Keyword">
  </div>
  <button name="pencarian" type="submit" class="btn btn-primary mb-2">Cari Data</button>
</form> 
            </div>
    </div>
    <div class="row">
        <div class="col-12">
          
            <table Class="table table-bordered">
        <tr><th width="10px;">NO</th><th>USERNAME</th><th width="130px">Aksi</th></tr>
        <?php
        $batas = 3;
        $halaman = isset($_GET['hal'])?$_GET['hal']:0;
        if(isset($_POST['pencarian'])) {
          // query pencarian data
          $keyword = $_POST['keyword'];
          $sql = "SELECT * from admin where username like '%$keyword%' order by username ASC limit $halaman,$batas";
        }else{
          // query menampilkan data biasa
        $sql = "SELECT * from admin order by username ASC limit $halaman,$batas";
        }
        $barang = mysqli_query($konek, $sql);
        $no=1;
        while ($row = mysqli_fetch_array($barang)) {
            echo "<tr>
              <td>$no</td>
              <td>$row[username]</td>
              <td><a href='edit_admin.php?id=$row[id_admin]' class='btn btn-success btn-sm'>Edit</a>
                  <a href='delete_admin.php?id=$row[id_admin]' class='btn btn-info btn-sm'>Delete</a>
              </td>
              </tr>";
                  $no++;
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
                    <li class="page-item"><a class="page-link" href="admin.php?hal=<?php echo $prev;?>">Previous</a></li>
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
                      echo "<li class='page-item'><a class='page-link' href='admin.php?hal=$hal'>$hal</a></li>";
                    }
                    ?>
                    <?php
                    ?>
                    <li class="page-item"><a class="page-link" href="admin.php?hal=<?php echo $halaman+1;?>">Next</a></li>
                 </ul>
            </nav>
      </div>
      <a href="input_admin.php" class="btn btn-danger btn-sm">Input Data Admin</a>
        </div>
    </div>
  
       
</div>
<?php
include 'footer.php';
?>
