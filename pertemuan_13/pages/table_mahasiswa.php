<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tabel Mahasiswa</h4>
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
              <?php
              if (isset($_SESSION['msg']['berhasil'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['msg']['berhasil'] . '</div>';
              }
              ?>
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include('proses/koneksi.php');
                  $sql = "SELECT * FROM mahasiswa";
                  $query = mysqli_query($koneksi, $sql);

                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['alamat'] ?></td>
                      <td><?= $data['email'] ?></td>
                      <td>
                        <a href="?page=edit_mahasiswa&id=<?= $data['id']; ?>" class="btn btn-primary">
                          <i class="fa fa-pen"></i>
                          Edit
                        </a>
                        <a href="pages/proses/hapus_mahasiswa.php?id=<?= $data['id']; ?>" class="btn btn-danger"
                          onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                          <i class="fa fa-trash"></i>
                          Hapus
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- end col -->
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

</div>