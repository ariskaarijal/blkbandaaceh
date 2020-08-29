<?php
include 'header.php';
?>

<?php
// funcion tambah data

function tambah($koneksi){
  if (isset($_POST['input_kategori'])){

    $id = uniqid();
    $kategori = $_POST['nama_kategori'];

    if (!empty ($kategori)){
      $query_input = mysqli_query($koneksi,"INSERT INTO kategori VALUES(md5('$id'),'$kategori')");
      // $simpan = mysqli_query($koneksi, $query_input);
      // if (isset($_GET['aksi'])){
      //   if($simpan && $_GET['aksi'] == 'create'){
      //     header('location:kategori.php');
      //   }
      // }
      if($query_input){
        echo'<script>alert("data berhasil disimpan")
        window.location.href="kategori.php";
        </script>';
      }  else {
        echo '<script>alert("data gagal disimpan")</script>';
      }
    }
  }
  ?>


<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form data katgori</h4>
          <p class="card-decription">
            masukan kategori
          </p>

            <form class="forms-sample" method="POST" action="">
              <div class="form-group">
                <label for="exampleInputName1">nama kategori</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama_kategori">
              </div>

                <button type="submit" class="btn btn-success mr-2" name="input_kategori">Submit</button>
                <button class="btn btn-light" type="reset">reset</button>
            </form>
        </div>
      </div>
    </div>

    <?php
    function tampil_data($koneksi){
      $sql = "SELECT * FROM kategori";
      $query = mysqli_query($koneksi, $sql);

    ?>

    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel Katagori</h4>
          <div class="table-responsive">
            <table class="table table-striped table-bordered data">
              <tr>
              <thead>
                  <tr>
                    <th>NO</th>
                    <th>username</th>
                    <th>opsi</th>
                  </tr>
                </thead>
              </tr>

              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($query)){?>
                <tr>
                  <td> <?php echo $no ?> </td>
                  <td> <?php echo $data['nama_kategori'] ?> </td>
                  <td>
                    <a href="kategori.php?aksi=update&id=<?php echo $data['id_kategori'];?>&nama_kategori=<?php echo $data['nama_kategori'];?>" class="btn btn-warning">edit</a>
                    <a href="kategori.php?aksi=delete&id=<?php echo $data['id_kategori'];?>" onclick="return confirm('apakah anda yakin ingin menghapus????')" class="btn btn-info">hapus</a>
                  </td>
                </tr>
                <?php
                $no++;
              } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


<!-- 
          <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                    <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                    <i class="mdi mdi-heart text-danger"></i>
                  </span>
              </div>
            </footer>
            </div> -->


    <?php
    }
}
    ?>


    <!-- function update -->
    <?php
    function ubah($koneksi){
      if (isset($_POST['ubah_kategori'])){
        $id = $_POST['id_kategori'];
        $nama = $_POST['nama_kategori'];
        if (!empty($nama)){
          $query_update = mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori='$id'");
          if ($query_update && isset($_GET['aksi'])){
            if ($_GET['aksi'] == 'update'){
              echo"<script>alert('data berhasil di update')
                window.location.href='kategori.php';
              </script>";
            }
          }else {
            echo"<script>alert('data gagal di update')</script>";
          }
        }
      }
      if(isset($_GET['id'])){
      ?>
      <!-- from ubah -->
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form data kategori</h4>
                  <!-- <p class="card-decription">
                    masukan kategori
                  </p> -->

                    <form class="forms-sample" method="POST" action="">
                      <input type="hidden" name="id_kategori" value="<?php echo $_GET['id'];?>">
                      <div class="form-group">
                        <label for="exampleInputName1">nama kategori</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama_kategori" value="<?php echo $_GET['nama_kategori'];?>" required>
                      </div>

                        <button type="submit" class="btn btn-success mr-2" name="ubah_kategori">Submit</button>
                        <button class="btn btn-light" type="reset">reset</button>
                    </form>
                </div>
             </div>
        </div>
 <?php
    }
    }
    ?>




    <!-- function hapus -->

    <?php
      function hapus($koneksi){
        if (isset ($_GET['id']) && isset ($_GET['aksi'])){
          $id = $_GET['id'];

          $query_hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");
          if($query_hapus){
            if($_GET['aksi'] == 'delete'){
              echo "<script> alert('data berhasil di hapus!!!')
              window.location.href='kategori.php';
              </script>";
            }
          } else{
            echo'<script>alert("data gagal di hapus")</script>';
          }
        }
      }
    ?>

<?php
  if (isset($_GET['aksi'])){
    switch ($_GET['aksi']){
      case'create':
      echo'';
      tambah($koneksi);
    break;
    case"read":
      tampil_data($koneksi);
    break;
    case"update":
      ubah ($koneksi);
      tampil_data($koneksi);
    break;
    case "delete":
      hapus ($koneksi);
    break;
  default:

  echo "<h3>Aksi <i> " . $_GET['aksi'] . " </i> tidak ada</h3>";
  tambah($koneksi);
  tampil_data($koneksi);
    }
  } else {
    tambah($koneksi);
    tampil_data($koneksi);
  }
?>
<?php include'footer.php'; ?>
