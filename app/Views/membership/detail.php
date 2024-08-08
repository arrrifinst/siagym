<?= $this->extend('layout/template'); ?>
<?= $this->section("content"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Details Membership</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('member/index'); ?>">Member</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-2 mb-3">
                                        ID : <?= $member['id']; ?>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div>
                                                <h2 class="lead mb-3"><b> <?= $member['nama']; ?> </b></h2>
                                                <p class="text-muted mb-4"><b>Alamat : </b> <?= $member['alamat']; ?> </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Pekerjaan : <?= $member['pekerjaan']; ?></li>
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telepon : <?= $member['telp']; ?></li>
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-envelope-square"></i></span> Email : <?= $member['email']; ?></li>
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-venus-mars"></i></span> Gender : <?= $member['gender']; ?></li>
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-dumbbell"></i></span> Paket : <?= $member['paket']; ?></li>
                                                    <li class="mb-2"><span class="fa-li"><i class="fas fa-lg fa-calendar-day"></i></span> Date : <?= $member['created_at']; ?> </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-sm mt-3" role="group" aria-label="Basic mixed styles example">
                                        <a href="/member/edit/<?= $member['id']; ?>" type="button" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <i class="fas fa-globe"></i> Armory Gym, Inc.
                                            <small class="float-right">Date: 10/10/2021</small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Armory, Inc.</strong><br>
                                            Inpres II, Muara Rapak<br>
                                            Balikpapan, 76125<br>
                                            Phone: 0815-2047-4803<br>
                                            Email: armory@gmail.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong><?= $member['nama']; ?></strong><br>
                                            <?= $member['alamat']; ?><br>
                                            Phone: <?= $member['telp']; ?><br>
                                            Email: <?= $member['email']; ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>No. Member #<?= $member['id']; ?></b><br>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Jenis Member</th>
                                                    <th>Description</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= $member['created_at']; ?></td>
                                                    <td><?= $member['paket']; ?></td>
                                                    <td>El snort testosterone trophy driving gloves handsome</td>
                                                    <td>Rp-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <!-- <div class="col-6">
                                        <p class="lead">Payment Methods:</p>
                                        <img src="<?= base_url('assets'); ?>/dist/img/credit/visa.png" alt="Visa">
                                        <img src="<?= base_url('assets'); ?>/dist/img/credit/mastercard.png" alt="Mastercard">
                                        <img src="<?= base_url('assets'); ?>/dist/img/credit/american-express.png" alt="American Express">
                                        <img src="<?= base_url('assets'); ?>/dist/img/credit/paypal2.png" alt="Paypal">
                                    </div> -->
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>Rp-</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <!-- <div class="row no-print">
                                    <div class="col-12">
                                        <a href="" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>