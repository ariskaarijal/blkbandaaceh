<?php include 'header.php'; ?>

<?php
function tambah($koneksi)
{
    if (isset($_POST['input_konten'])) {
        $id_user = $_SESSION['id_user'];
        $id = uniqid();
        $judul = $_POST['judul'];
        $konten = $_POST['konten'];
        $tanggal = $_POST['tanggal'];

        $foto = $_FILES['foto']['name'];

        if (move_uploaded_file($_FILES['foto']['tmp_name'], "upload/postingan/" . $_FILES['foto']['name'])) {
            echo "Gambar Berhasil diupload";
        } else {
            echo "Gambar Gagal di upload";
        }

        $query_input = mysqli_query($koneksi, "INSERT INTO postingan VALUES('$id_user',md5('$id'),'$judul','$konten','$tanggal','$foto')");

        if ($query_input) {
            echo '<script>alert("data berhasil di input")
            window.location.href="postingan_user.php";
            window.history.back();

          </script>';
        } else {
            echo '<script>alert("data gagal di input")
            window.location.href="postingan_user.php";
          </script>';
        }
    }

?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Postingan</h4>
                            <p class="card-description">
                                Masukkan Postingan
                            </p>
                            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputName1">Judul</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="judul" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Tanggal Release</label>
                                    <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Tanggal" name="tanggal" value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Foto Utama</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="form-group">
                                    <textarea id="content" name="konten"></textarea>
                                </div>

                                <button type="submit" class="btn btn-success mr-2" type="submit" name="input_konten">Posting</button>
                                <button class="btn btn-light" type="reset">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                function tampil_data($koneksi)
                {
                ?>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Data User</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-border data">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Judul</th>
                                                <th>Tanggal Release</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- proses menampilkan data dari database -->
                                            <?php
                                            $show_query = mysqli_query($koneksi, "SELECT * FROM postingan");
                                            if (mysqli_num_rows($show_query) == 0) {
                                                echo '<tr><td>Tidak ada data</td></tr>';
                                            } else {
                                                $no = 1;
                                                while ($data = mysqli_fetch_assoc($show_query)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $no ?></td>
                                                        <td><img src="upload/postingan/<?php echo $data['foto']; ?>" alt=""></td>
                                                        <td><?php echo $data['judul']; ?></td>
                                                        <td><?php echo $data['tanggal_rilis']; ?></td>
                                                        <td>
                                                            <a href="postingan_user.php?id=<?php echo $data['id_user'] ?>" class="btn btn-warning">Edit</a>
                                                            <a href="" class="btn btn-info">View</a>
                                                            <a href="postingan_user.php?aksi=delete&id=<?php echo $data['id_postingan'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
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
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
        </div>
<?php
                }
            }
?>

<!-- function delete -->
<?php
function hapus($koneksi)
{
    if (isset($_GET['id']) && isset($_GET['aksi'])) {
        $id = $_GET['id'];

        $query_hapus = mysqli_query($koneksi, "DELETE FROM postingan WHERE id_postingan='$id'");
        if ($query_hapus) {
            if ($_GET['aksi'] == 'delete') {
                echo '<script>alert("Data Berhasil dihapus")
          window.location.href="postingan_user.php";
        </script>';
            }
        } else {
            echo '<script>alert("data gagal di hapus")
          window.location.href="postingan_user.php";
          </script>';
        }
    }
}
?>

<!-- logika proses aksinya -->
<?php
if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
        case "create":
            tambah($koneksi);
            tampil_data($koneksi);
            break;
        case "read":
            tampil_data($koneksi);
            break;
        case "update":
            ubah($koneksi);
            tampil_data($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>" . $_GET['aksi'] . "</i> tidak ada!</h3>";
            tambah($koneksi);
            tampil_data($koneksi);
    }
} else {
    tambah($koneksi);
    tampil_data($koneksi);
}

?>
<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#content').summernote({
            height: "100px",
            styleWithSpan: false
        });
    });
</script>


</body>

</html>