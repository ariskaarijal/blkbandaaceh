<?php

include 'header.php';
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Profil Instruktur</h4>
            <form class="forms-sample" method="POST" action="proses/input_user.php">
              <div class="form-group">
                <label for="exampleInputName1">user name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="username">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">password</label>
                <input type="password" class="form-control" id="exampleInputName1" placeholder="Name" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">email</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">no hp</label>
                <input type="number" class="form-control" id="exampleInputName1" placeholder="Name" name="nohp">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">level</label>
                <select class="form-control" id="exampleFormControlSelect2" name="level">
                  <option value="autor">autor</option>
                  <option valeu="admin">admin</option>
                  <option value="user">user</option>

                </select>
                <br>

                <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">data user</h4>
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <tr>
                <thead>
                   <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>No.HP</th>
                    <th>level</th>
                    <th>opsi</th>
                  </tr>
                </thead>
              </tr>

              <tbody>
                <?php

                $show_query = mysqli_query($koneksi, "SELECT * FROM user");
                if (mysqli_num_rows($show_query) == 0) {
                  echo '<tr><td>tidak ada data</td></tr>';
                } else {
                  $no = 1;
                  while ($data = mysqli_fetch_assoc($show_query)) {
                ?>

                    <tr>
                      <td> <?php echo $no ?> </td>
                      <td> <?php echo $data['username']; ?> </td>
                      <td> <?php echo $data['email']; ?> </td>
                      <td> <?php echo $data['no_hp']; ?> </td>
                      <td> <?php echo $data['level']; ?> </td>
                      <td>
                        <a href="edit_user.php?id=<?php echo $data ['id_user'] ?>" class="btn btn-primary">Update</a>
                        <a href="" class="btn btn-info">view</a>
                        <a href="proses/proses_hapus.php?id=<?php echo $data ['id_user'] ?>" onclick="return confirm('apakah anda yakin ingin hapus?')" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                <?php
                    $no++;
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<!-- partial:partials/_footer.html -->

<?php include 'footer.php'; ?>