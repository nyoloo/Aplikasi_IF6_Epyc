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
                <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url;?>/karyawan/edit/<?= $data['karyawan'][0]['id_karyawan'] ?>" class="btn float-right btn-xs btn btn-primary">Edit Profil</a>
            </div>
            <div class="card-body">
            <?php Flasher::Message() ?>
                <!-- <form action="<?= base_url; ?>/kategori/cari" method="post">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name="key">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/kategori">Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> -->
                <table class="table table-bordered">
                    <tbody>
                        <?php foreach ($data['karyawan'] as $row) : ?>
                            <tr>
                                <td>ID Karyawan<td><?= $row['id_karyawan']; ?></td>
                                <tr>
                                <td>Nama Karyawan<td><?= $row['nama_karyawan']; ?></td>
                                <tr>
                                <td>No Telepon<td><?= $row['no_telp']; ?></td>
                                <tr>
                                <td>Username<td><?= $row['username']; ?></td>
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