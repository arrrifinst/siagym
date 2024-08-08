<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Inbox</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <?php if (session()->getFlashdata('Message')) : ?>
                        <div class="alert alert-success mt-3" role="alert">
                            <?= session()->getFlashdata('Message'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Inbox</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>No. Telp</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($inbox as $b) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $b['nama']; ?></td>
                                            <td><?= $b['telepon']; ?></td>
                                            <td><?= $b['email']; ?></td>
                                            <td><?= $b['pesan']; ?></td>
                                            <td><?= $b['created_at']; ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                                                        <form action="/inbox/index/<?= $b['id']; ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');"><i class="fas fa-trash-alt fa-sm"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>