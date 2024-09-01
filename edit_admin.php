<?php
include 'header.php';
$id_admin = $_GET['id'];
$admin = mysqli_query($konek, "select * from admin where id_admin='$id_admin'");
$row = mysqli_fetch_array($admin);
?>
    <div class="container">
      <h3>Form Input Admin</h3>
      <form action="update-admin.php" method="POST">
          <input type="hidden" name="id_admin" value="<?php echo $id_admin;?>">
          <div Class="form-group row">
              <label class="col-sm-2 col-from-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" value="<?php echo $row['username']?>" name="username" placeholder="Masukan username" class="form-control">
              </div>
          </div>

          <div Class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="password" name="password" placeholder="Masukan Password" class="form-control">
              </div>
          </div>


             <div Class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-danger">Simpan Data</button>
                  <a href="admin.php" class="btn btn-primary">Batal</a>
              </div>
            </div>
      </from>
    </div>
<?php
include 'footer.php';
?>