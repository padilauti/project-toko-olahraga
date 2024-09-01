<?php
include 'header.php';
?>
    <div class="container">
      <h3>Form Input Admin</h3>
      <form action="simpan-admin.php" method="POST">
          <div Class="form-group row">
              <label class="col-sm-2 col-from-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" name="username" placeholder="Masukan username" class="form-control">
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
                  <a href="index.php" class="btn btn-primary">Batal</a>
              </div>
            </div>
      </from>
    </div>
<?php
include 'footer.php';
?>