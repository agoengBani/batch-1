<?php
include('pages/proses/koneksi.php');
if (isset($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_array($query);
}
?>

<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Form Mahasiswa</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->


    <!-- end row -->
    <div class="row">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <?php if (isset($_SESSION['msg']['berhasil'])) { ?>
                <div class="alert alert-success" role="alert">
                  <?= $_SESSION['msg']['berhasil']; ?>
                </div>
              <?php } ?>

              <div class="row">
                <div class="col-xl-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Data Mahasiswa</h4>

                      <form action="pages/proses/update_mahasiswa.php" method="post" class="custom-validation">
                        <input type="text" name="id" value="<?= $data['id']; ?>" hidden>
                        <div class="mb-3">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $data['nama']; ?>" />
                          <?php if (isset($_SESSION['msg']['nama'])) { ?>
                            <label class="text-danger"> <?= $_SESSION['msg']['nama']; ?> </label>
                          <?php } ?>
                        </div>
                        <div class="mb-3">
                          <label>Alamat</label>
                          <div>
                            <input type="text" name="alamat" class="form-control"
                              placeholder="Alamat" value="<?= $data['alamat']; ?>" />
                            <?php if (isset($_SESSION['msg']['alamat'])) { ?>
                              <label class="text-danger"> <?= $_SESSION['msg']['alamat']; ?> </label>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="mb-3">

                          <label>Email</label>
                          <div>
                            <input type="text" name="email"
                              class="form-control"
                              placeholder="Email" value="<?= $data['email']; ?>" />
                            <?php if (isset($_SESSION['msg']['email'])) { ?>
                              <label class="text-danger"> <?= $_SESSION['msg']['email']; ?> </label>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="mb-0">
                            <div>
                              <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end col -->
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <script>
              document.write(new Date().getFullYear())
            </script> © Appzia.
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block">
              Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

</div>