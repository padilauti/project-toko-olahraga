<?php
include 'header.php';
?>
    <div class="container">
      <h3>Form Input Peralatan</h3>
      <form action="simpan-peralatanolahraga.php" method="POST">
          <div Class="form-group row">
              <label class="col-sm-2 col-from-label">ID</label>
              <div class="col-sm-10">
                  <input type="text" name="id" placeholder="Masukan ID" class="form-control">
              </div>
          </div>

          <div Class="form-group row">
              <label class="col-sm-2 col-form-label">NAMA BARANG</label>
              <div class="col-sm-10">
                  <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" class="form-control">
              </div>
          </div>

            <div Class="form-group row">
              <label class="col-sm-2 col-form-label">BRAND</label>
              <div class="col-sm-10">
                  <select name="brand" class="form-control">
                    <?php
                    $brand = mysqli_query($konek, "select * from brand");
                    while ($p = mysqli_fetch_array($brand)) {
                      echo "<option value='$p[id_brand]'>$p[nama_brand]</option>";
                    }
                    ?>
                  </select>
              </div>
            </div>


             <div Class="form-group row">
                 <label class="col-sm-2 col-form-label">Kategori</label>
                 <div class="col-sm-10">
                     <select name="kategori" class="form-control">
                       <?php
                       $kategori = mysqli_query($konek, "select * from kategori");
                       while ($k = mysqli_fetch_array($kategori)) {
                          echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
                       }
                       ?>
                  </select>
              </div>
            </div>



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                  <textarea name="deskripsi" class="form-control"></textarea>
              </div>
            </div>

              <div Class="form-group row">
              <label class="col-sm-2 col-from-label">Harga</label>
              <div class="col-sm-10">
                  <input type="text" name="harga" placeholder="Masukan harga" class="form-control">
              </div>
          </div>

             <div Class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-danger">Simpan Data</button>
                  <a href="index.php" class="btn btn-primary">Batal</a>
              </div>
            </div>
      </from>
    </div>
<?php
include 'footer.php';
?>