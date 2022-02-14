  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Halaman Data Mobil</h1>
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
              <form role="form" action="<?= base_url; ?>/mobil/updateMobil" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                      <div class="form-group">
                          <label>ID Mobil</label>
                          <input readonly type="text" class="form-control" placeholder="masukkan plat mobil..." name="id_mobil" value="<?= $data['mobil'][0]['id_mobil'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Plat Mobil</label>
                          <input type="text" class="form-control" placeholder="masukkan plat mobil..." name="plat_mobil" value="<?= $data['mobil'][0]['plat_mobil'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Merk Mobil</label>
                          <input type="text" class="form-control" placeholder="masukkan merk mobil..." name="merk_mobil" value="<?= $data['mobil'][0]['merk_mobil'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Jenis Mobil</label>
                          <input type="text" class="form-control" placeholder="masukkan jenis mobil..." name="jenis_mobil" value="<?= $data['mobil'][0]['jenis_mobil'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Nama Mobil</label>
                          <input type="text" class="form-control" placeholder="masukkan nama mobil..." name="nama_mobil" value="<?= $data['mobil'][0]['nama_mobil'] ?>">
                      </div>
                      <div class="form-group">
                          <label>Harga Sewa Per Hari</label>
                          <input type="number" class="form-control" placeholder="masukkan harga sewa per hari..." name="harga_sewa" value="<?= $data['mobil'][0]['harga_sewa'] ?>">
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
                      <button type="reset" class="btn btn-secondary"><a style="color: inherit; text-decoration: none;" href="<?= base_url?>/mobil">Kembali</a></button>
                  </div>
              </form>
          </div>


      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->