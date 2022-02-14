  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Halaman Profil</h1>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="card card-primary">
              <div class="card-header">
                  <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form role="form" action="<?= base_url; ?>/karyawan/updateKaryawan" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                      <div class="form-group">
                          <label>ID Karyawan</label>
                          <input readonly type="text" class="form-control" placeholder="masukkan ID karyawan..." name="id_karyawan" value="<?= $data['karyawan'][0]['id_karyawan'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Nama Karyawan</label>
                          <input type="text" class="form-control" placeholder="masukkan Nama karyawan..." name="nama_karyawan" value="<?= $data['karyawan'][0]['nama_karyawan'] ?>">
                      </div>
                      <div class="form-group">
                          <label>No Telepon</label>
                          <input type="text" class="form-control" placeholder="masukkan merk karyawan..." name="no_telepon" value="<?= $data['karyawan'][0]['no_telp'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" placeholder="masukkan jenis karyawan..." name="username" value="<?= $data['karyawan'][0]['username'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="masukkan nama karyawan..." name="password" value="<?= $data['karyawan'][0]['password'] ?>">
                      </div>
                      <!-- <div class="form-group">
              <label>Jenis</label>
              <select class="form-control" name="jenis-playstation">
                <option value="">Pilih</option>
                <option value="Playstation 3">Playstation 3</option>
                <option value="Playstation 4">Playstation 4</option>
                <option value="Playstation 5">Playstation 5</option>
              </select>
            </div> -->
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer" style="display:flex; justify-content: flex-end; ">
                      <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem;">Submit</button>
                      <button type="reset" class="btn btn-secondary"><a style="color: inherit; text-decoration: none;" href="<?= base_url?>/karyawan">Kembali</a></button>
                  </div>
              </form>
          </div>


      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->