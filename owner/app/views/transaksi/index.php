  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1><?= $data['title']; ?></h1>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-sm-12">

              </div>
          </div>
          <!-- Default box -->

          <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                  <div style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
                      <div>
                          <form action="<?= base_url; ?>/transaksi/cari" method="post">
                              <div class="row mb-3">
                                  <div class="col-lg-6">
                                      <div class="input-group" style="display: flex; justify-content: center; align-items: center; flex-direction: row; width: 200%;">
                                          <input type="text" class="form-control" placeholder="" name="key" >
                                          <div class="input-group-append">
                                              <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                              <a class="btn btn-outline-danger" href="<?= base_url; ?>/transaksi">Reset</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="row mb-3">
                              <button class="btn btn-outline-primary"><a style="color: inherit; text-decoration: none;" href="<?= base_url; ?>/transaksi/laporan">Laporan</a></button>
                      </div>
                  </div>
              </div>
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>ID Pembayaran</th>
                          <th>Nama Karyawan</th>
                          <th>Nama Customer</th>
                          <th>Nama Mobil</th>
                          <th>Plat Mobil</th>
                          <th>Tujuan</th>
                          <th>Total Harga Sewa</th>
                          <th>Metode Pembayaran</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($data['transaksi'] as $row) : ?>
                          <tr>
                              <td><?= $row['id_pembayaran']; ?></td>
                              <td><?= $row['nama_karyawan']; ?></td>
                              <td><?= $row['nama_customer']; ?></td>
                              <td><?= $row['nama_mobil']; ?></td>
                              <td><?= $row['plat_mobil']; ?></td>
                              <td><?= $row['tujuan']; ?></td>
                              <td><?= $row['total_harga_sewa']; ?></td>
                              <td><?= $row['metode_bayar']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
          <!-- /.card-body -->
  </div>
  <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->