<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Membership</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Membership</li>
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

                    <a href="<?= base_url('member/create'); ?>" class="btn btn-primary mb-2">Add Data</a>

                    <?php if (session()->getFlashdata('Message')) : ?>
                        <div class="alert alert-success mt-3" role="alert">
                            <?= session()->getFlashdata('Message'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Data Member Armory Gym</h3>
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
                                        <th>Pekerjaan</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($member as $m) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $m['nama']; ?></td>
                                            <td><?= $m['telp']; ?></td>
                                            <td><?= $m['email']; ?></td>
                                            <td><?= $m['pekerjaan']; ?></td>
                                            <td><?= $m['alamat']; ?></td>
                                            <td>
                                                <center><span class="badge badge-warning"><?= $m['status']; ?></span></center>
                                            </td>
                                            <td>
                                                <center>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                                                        <a href="/member/index/<?= $m['id']; ?>" type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></a>

                                                        <!-- <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button> -->
                                                        <form action="/member/index/<?= $m['id']; ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');"><i class="fas fa-trash-alt fa-sm"></i></button>
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