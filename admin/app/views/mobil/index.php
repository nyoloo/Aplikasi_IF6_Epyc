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
                <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/mobil/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Mobil</a>
            </div>
            <div class="card-body">
                <?php Flasher::Message(); ?>
                <form action="<?= base_url; ?>/mobil/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/mobil">Reset</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Mobil</th>
                            <th>Plat Mobil</th>
                            <th>Merk Mobil</th>
                            <th>Jenis Mobil</th>
                            <th>Nama Mobil</th>
                            <th>Harga Sewa Per Hari</th>
                            <th>Gambar Mobil</th>
                            <th style="width: 150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['mobil'] as $row) : ?>
                            <tr>
                                <td><?= $row['id_mobil']; ?></td>
                                <td><?= $row['plat_mobil']; ?></td>
                                <td><?= $row['merk_mobil']; ?></td>
                                <td><?= $row['jenis_mobil']; ?></td>
                                <td><?= $row['nama_mobil']; ?></td>
                                <td><?= $row['harga_sewa']; ?></td>
                                <td><img src="<?=$row['img_url']?>" width="200px" height="100px"></td>
                                <td>
                                    <a href="<?= base_url; ?>/mobil/edit/<?= $row['id_mobil'] ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= base_url; ?>/mobil/hapus/<?= $row['id_mobil'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                </td>
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