<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Kirana Energi Indonesia</title>
    <script src="https://kit.fontawesome.com/73a5bd7ed6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color : #212529">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{URL::asset('/image/Logo KEI.png')}}" style="max-width: 80px" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link active menu-button" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link menu-button" href="/aboutus">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link menu-button" href="/products">Layanan & Produk</a></li>
                    <li class="nav-item"><a class="nav-link menu-button" href="/contactus">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link menu-button" href="/faq">FAQ</a></li>
                </ul>
            </div>
    </div>
</nav>

<style>
    .custom-link {
        border: 2px solid transparent;
        padding: 5px 10px;
        transition: all 0.3s ease;
    }
    .custom-link:focus, .custom-link:active {
        border-color: red;
        color: black !important;
    }
    .menu-button {
        background: linear-gradient(to right, red, black);
        color: white !important;
        padding: 10px 15px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    .menu-button:hover {
        opacity: 0.8;
    }
</style>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- bagian konten blog -->
    @yield('konten')
</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
            <span>Get connected with us on social networks :</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="#" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">PT. Kirana Energi Indonesia</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                    Terima kasih telah mengunjungi website kami. 
                    Kami menghargai dukungan dan kepercayaan Anda
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                
                <!-- Grid column -->

                
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> Gading Kirana Timur IX No.18, Klp. Gading Bar, Kec. Klp.
                        Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240</p>
                    <p><i class="fas fa-envelope mr-3"></i> admin@kiranaenergi.id</p>
                    <p><i class="fas fa-phone mr-3"></i> +62 815-1923-0117</p>
                    <!-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2025 Copyright: Kirana Energi Indonesia, PT.
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- End of .container -->

</html>