<?= $this->extend('layouts/templates'); ?>
<?= $this->section('content'); ?>


<!-- BANNER / HEADER -->
<section class="banner" id="banner">
    <div class="content">
        <h2>Dare To Be Great</h2>
        <p>Work out. Eat well. Be patient. Your body will reward you.<br>Believe in yourself and you will be unstoppable.</p>
        <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">JOIN US</a> -->

        <?php if (session()->getFlashdata('note')) : ?>
            <div class="alert alert-success mt-3" role="alert">
                <?= session()->getFlashdata('note'); ?>
            </div>
        <?php endif; ?>

        <!-- Button trigger modal -->
        <?php if (logged_in()) : ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                JOIN US
            </button>
        <?php endif; ?>
    </div>
</section>
<!--  -->

<!-- ABOUT US -->
<section class="about" id="about">
    <div class="row">
        <div class="col">
            <h2 class="titleText"><span>A</span>bout Us</h2>
            <p>Berdiri sejak 2015 di Kota Balikpapan, Kalimantan Timur. Berdedikasi tinggi untuk menciptakan sebuah bisnis gym dan mengajak orang untuk mulai bergaya hidup sehat.<br><br>Kami berkomitmen untuk menyajikan fasilitas gym yang berkualitas<br><br>Dengan suasana yang nyaman dan iringan musik yang energik akan membuat Anda lebih enjoy dan juga bersemangat saat membentuk tubuh Anda. Tempat yang tepat untuk berolahraga dengan biaya terjangkau.</p>
        </div>
        <div class="col">
            <div class="imgBx">
                <img src="<?= base_url('/img/bout.jpg'); ?>">
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- OUR FACILITY -->
<section class="menu" id="menu">
    <div class="title white">
        <h2 class="titleText">Our <span>F</span>acility</h2>
        <p>Menyediakan berbagai macam alat fitnes yang berkualitas</p>
    </div>

    <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil1.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil2.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil3.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil4.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil5.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/facil6.jpg'); ?>">
            </div>
            <!-- <div class="textwhite">
                    <h3>Name</h3>
                </div> -->
        </div>
    </div>

</section>
<!--  -->


<!-- EXPERT TRAINER -->
<!-- <section class="expert" id="expert">
        <div class="title">
            <h2 class="titleText">Meet Our <span>T</span>rainer</h2>
            <p>Our professional Trainer who are experienced in workout.</p>
        </div>

        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/trainer1.jpg">
                </div>
                <div class="text">
                    <h3>Joe Biden</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/trainer2.jpg">
                </div>
                <div class="text">
                    <h3>Aditya Osama</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/trainer3.jpg">
                </div>
                <div class="text">
                    <h3>Maria Christine</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="img/trainer4.jpg">
                </div>
                <div class="text">
                    <h3>Rey</h3>
                </div>
            </div>
        </div>
    </section> -->
<!--  -->


<!-- TESTIMONIAL -->
<section class="testimoni" id="testimoni">
    <div class="title white">
        <h2 class="titleText">What <span>T</span>hey Said<span>?</span></h2>
        <p>What they said about Us.</p>
    </div>

    <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/tester1.jpg'); ?>">
            </div>
            <div class="text">
                <p>"I had not been physically active for quite a few years but knew it was time to shed some weight.
                    Having not really ever been interested in joining a gym it was quite daunting at first, but as soon as I took the first step and started doing the hard yards and pushed beyond my comfort zone, I could see how this was going to help achieve the goals I had set. I started my fitness program after a mate at work talked me into joining in the 12 Week Spring Challenge at Core Value Fitness in 2015.".</p>
                <h3>Wildan Salmanal</h3>
            </div>
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/tester2.jpg'); ?>">
            </div>
            <div class="text">
                <p>"I attended the Strength for Life sessions for over 12 months before joining the gym as a full member. The group environment of the Strength for Life sessions has been especially helpful in maintaining my commitment. The sessions aim to retain and develop body strength (especially core body strength), balance and flexibility. I'd encourage older people to consider going to the gym as you will be able to maintain your physical abilities for longer and hence have a more active and enjoyable retirement.".</p>
                <h3>Dwiky Ahmadya</h3>
            </div>
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="<?= base_url('/img/tester3.jpg'); ?>">
            </div>
            <div class="text">
                <p>"I had not been physically active for quite a few years but knew it was time to shed some weight.
                    Having not really ever been interested in joining a gym it was quite daunting at first, but as soon as I took the first step and started doing the hard yards and pushed beyond my comfort zone, I could see how this was going to help achieve the goals I had set. I started my fitness program after a mate at work talked me into joining in the 12 Week Spring Challenge at Core Value Fitness in 2015.".</p>
                <h3>Ishan Maulana</h3>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- CONTACT -->
<section class="contact" id="contact">
    <div class="title">
        <h2 class="titleText"><span>C</span>ontact Us</h2>
        <p>for business or criticism & suggestions.</p>
    </div>
    <!-- FORM -->
    <div class="form">
        <form action="/pesan/save" method="post">
            <?= csrf_field(); ?>

            <?php if (session()->getFlashdata('notif')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashdata('notif'); ?>
                </div>
            <?php endif; ?>

            <div class="inputBox">
                <input required type="text" placeholder="Name" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
            </div>
            <div class="inputBox">
                <input required type="email" placeholder="Email" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
            </div>
            <div class="inputBox">
                <input required type="text" placeholder="Phone Number" class="form-control" id="telepon" name="telepon" value="<?= old('telepon'); ?>">
            </div>
            <div class="inputBox">
                <textarea required placeholder="Message" class="form-control" id="pesan" name="pesan" value="<?= old('pesan'); ?>"></textarea>
            </div>

            <div class="inputBox">
                <!-- <input type="submit" value="Send"> -->
                <button type="submit" class="btn btn-warning">Send</button>
            </div>
        </form>
    </div>
</section>

<!-- Modal -->
<!-- <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulir Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form class="mt-4" action="/pendaftaran/save" method="post">
                            <?= csrf_field(); ?>

                            <div class="form-group row mb-1">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="telp" class="col-sm-2 col-form-label">Telepon</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="telp" name="telp" value="<?= old('telp'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= old('pekerjaan'); ?>">
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select required class="form-control form-select" id="gender" name="gender" value="<?= old('gender'); ?>">
                                        <option value="">- Choose -</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                                <div class="col-sm-10">
                                    <select required class="form-control form-select" id="paket" name="paket" value="<?= old('paket'); ?>">
                                        <option value="">- Choose -</option>
                                        <option value="1 Bulan Rp250.000,-">1 Bulan Rp250.000,-</option>
                                        <option value="3 Bulan Rp500.000,-">3 Bulan Rp500.000,-</option>
                                        <option value="1 Tahun Rp2.300.000,-">1 Tahun Rp2.300.000,-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-1">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input required type="date" class="form-control" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-2" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Join Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/pendaftaran/save" method="post">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <input required type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input required type="text" class="form-control" id="telp" name="telp" value="<?= old('telp'); ?>" placeholder="Telepon">
                    </div>
                    <div class="mb-3">
                        <input required type="text" class="form-control" id="email" name="email" value="<?= old('email'); ?>" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input required type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <input required type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= old('pekerjaan'); ?>" placeholder="Pekerjaan">
                    </div>
                    <div class="mb-3">
                        <select required class="form-control form-select" id="gender" name="gender" value="<?= old('gender'); ?>">
                            <option value="">Gender</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select required class="form-control form-select" id="paket" name="paket" value="<?= old('paket'); ?>">
                            <option value="">Pilih Paket</option>
                            <option value="1 Bulan Rp250.000,-">1 Bulan Rp250.000,-</option>
                            <option value="3 Bulan Rp500.000,-">3 Bulan Rp500.000,-</option>
                            <option value="1 Tahun Rp2.300.000,-">1 Tahun Rp2.300.000,-</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>