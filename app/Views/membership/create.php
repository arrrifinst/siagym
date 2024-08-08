<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Fromulir</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">

                            <form class="mt-4" action="/member/save" method="post">
                                <?= csrf_field(); ?>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('telp')) ? 'is-invalid' : ''; ?>" id="telp" name="telp" value="<?= old('telp'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" id="pekerjaan" name="pekerjaan" value="<?= old('pekerjaan'); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <select required class="form-control form-select <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?>" id="gender" name="gender" value="<?= old('gender'); ?>">
                                            <option value="">- Choose -</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                                    <div class="col-sm-10">
                                        <select required class="form-control form-select <?= ($validation->hasError('paket')) ? 'is-invalid' : ''; ?>" id="paket" name="paket" value="<?= old('paket'); ?>">
                                            <option value="">- Choose -</option>
                                            <option value="1 Bulan Rp250.000,-">1 Bulan Rp250.000,-</option>
                                            <option value="3 Bulan Rp500.000,-">3 Bulan Rp500.000,-</option>
                                            <option value="1 Tahun Rp2.300.000,-">1 Tahun Rp2.300.000,-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</div>

<?= $this->endSection(); ?>