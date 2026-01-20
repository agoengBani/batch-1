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
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  include('proses/koneksi.php');
                  $sql = "SELECT * FROM mahasiswa";
                  $query = mysqli_query($koneksi, $sql);

                  $no = 1;
                  while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['alamat'] ?></td>
                      <td><?= $data['email'] ?></td>
                    </tr>
                  <?php } ?>
                </tbody>

                <?php
                // while
                // $no = 5;
                // while ($no <= 5) { // kondisi: benar
                //   // apa yang dilakukan
                //   echo $no;
                //   // $no = $no + 1;
                //   $no++;
                // }

                // for 
                // for ($no = 1; $no <= 5; $no++) {
                //   echo $no;
                // }

                // $buah = ['apel', 'nanas', 'semangka', 'rambutan'];
                // foreach ($buah as $item) {
                //   echo $item . '<br>';
                // }
                ?>
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