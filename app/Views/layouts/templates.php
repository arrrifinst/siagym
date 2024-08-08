<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Tambahan -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>

    <!-- MENU NAVIGASI -->
    <nav>
        <a href="#banner" class="logo">ArmoryGym<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();">
            <ul class="navigation">
                <!-- <li><a href="#banner" onclick="toggleMenu();">Home</a></li> -->
                <li><a href="#about" onclick="toggleMenu();">About</a></li>
                <li><a href="#menu" onclick="toggleMenu();">Facility</a></li>
                <!-- <li><a href="#expert" onclick="toggleMenu();">Trainer</a></li> -->
                <li><a href="#testimoni" onclick="toggleMenu();">Testimonial</a></li>
                <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
                <?php if (in_groups('admin')) : ?>
                    <li><a href="<?= base_url('admin/dashboard'); ?>" onclick="toggleMenu();">Dashboard</a></li>
                <?php endif; ?>
            </ul>
        </div>



        <?php if (logged_in()) : ?>
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-lg-inline text-gray-600 small mr-5"><?= user()->username; ?></span>
                    <img class="img-profile rounded-circle" src="<?= base_url('/img/tester1.jpg'); ?>" width="40" height="40">
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        <?php else : ?>
            <li class="btn">
                <a href="<?= base_url('/login'); ?>" class="btn btn-outline-success mt-2">Sign Up / Login</a>
            </li>
        <?php endif; ?>
    </nav>
    <!--  -->




    <?= $this->renderSection('content'); ?>

    <footer class="footer mt-3">
        <div class="footer-content">
            <h3>ARMORY GYM</h3>
            <p>Jalan Inpres 2 Balikpapan Utara, Muara Rapak, Balikpapan Utara,<br>Balikpapan City, East Kalimantan 76125<br>Call center : 0815-2047-4803</p>
            <ul class="social">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://www.instagram.com/arrrifinst/"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;<?= Date('Y') ?> Armory Gym. designed by <span>Team 1</span></p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script type="text/javascript">
        // STICKY UNTUK MENU NAVIGASI AGAR MEMILIKI BACKGROUND SAAT WEBSITE DISCROLL 
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            nav.classList.toggle("sticky", window.scrollY > 0);
        });

        // MEMBUAT TOGGLE MENU/SUB MENU SAAT FRAME WEBSITE DIPERKECIL (RESPONSIVE)
        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>