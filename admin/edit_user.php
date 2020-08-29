<?php

include 'header.php';
?>

<!-- query penampilan -->

    <?php
   $id = $_GET['id'];

    $query_show = mysqli_query($koneksi, "SELECT * FROM user WHERE  id_user = '$id'");

    if (mysqli_num_rows($query_show) == 0){
        echo '<script>window.history.back()</script>';
    } else {
        $data = mysqli_fetch_assoc($query_show);
    }

    ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Profil Instruktur</h4>
            <form class="forms-sample" method="POST" action="proses/proses_update.php">
                <input class="form-control" type="hidden" name="id_user" value=" <?php echo $data['id_user'];?>">

              <div class="form-group">
                <label for="exampleInputName1">user name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="username" value="<?php echo $data['username'];?>" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">password</label>
                <input type="password" class="form-control" id="exampleInputName1" placeholder="Name" name="password" value="<?php echo $data['password'];?>" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">email</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="email" value="<?php echo $data['email'];?>" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">no hp</label>
                <input type="number" class="form-control" id="exampleInputName1" placeholder="Name" name="nohp" value="<?php echo $data['no_hp'];?>" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">level</label>
            <?php if(empty($data['level'])) {?>
                <select class="form-control" id="exampleFormControlSelect2" name="level">
                  <option value="autor">autor</option>
                  <option valeu="admin">admin</option>
                  <option value="user">user</option>
                </select>
            <?php } else {?>
                <select class="form-control" id="exampleFormControlSelect2" name="level">
                  <option <?php echo ($data['level'] == 'autor') ? 'selected' : '' ?> value="autor">autor</option>
                  <option <?php echo ($data['level'] == 'admin') ? 'selected' : '' ?> valeu="admin">admin</option>
                  <option <?php echo ($data['level'] == 'user') ? 'selected' : '' ?> value="user">user</option>
                </select>
            <?php } ?>
            </div>
                <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<!-- partial:partials/_footer.html -->
