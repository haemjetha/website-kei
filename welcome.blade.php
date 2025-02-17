<!-- master template -->
@extends('master')

<!-- page title -->
@section('judul_halaman', '')


<!-- content -->
@section('konten')


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{URL::asset('/image/Slide1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kebutuhan alat berat.</h5>
                <p>Kami menyediakan suku cadang dan kebutuhan lainnya untuk alat berat.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{URL::asset('/image/Slide2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Peralatan listrik dengan tegangan kecil hingga besar.</h5>
                <p>Kami menyediakan peralatan listrik dengan tegangan kecil hingga besar.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('/image/Slide3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>MCB, Kontaktor, dan Panel Listrik.</h5>
                <p>MCB, kontaktor, dan peralatan lainnya yang dibutuhkan dalam panel listrik.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <img src="{{URL::asset('/image/Logo KEI.png')}}" style="max-width: 100px">
    </header>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3"
        style="background-image: url('/image/Jumbotron1.png');; background-size: cover; background-position: center;">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold" style="color: white;">About Us</h1>
            <p class="col-md-8 fs-4" style="color: white;">Selamat datang di PT Kirana Energi Indonesia, 
                perusahaan terkemuka di bidang mekanikal dan elektrikal untuk memenuhi kebutuhan industri 
                saat ini. Sejak didirikan pada tahun 2024, PT Kirana Energi Indonesia telah menjadi 
                pelopor dalam menyediakan solusi yang relevan dan inovatif bagi klien kami di berbagai sektor</p>
            <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/aboutus';">Read
                More</button>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Services</h2>
                <p>We provide services such as End User Support, Resale Trading Services, Facilities, and Design and
                    Development.</p>
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='/services';">Read
                    More</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Jumbotron2.png');; background-size: cover; background-position: center;">
                <h2 style="color: white;">Products</h2>
                <p style="color: white;">We provide all the products needed for heavy equipment, such as air filters,
                    engine oil, etc. We also provide electrical products from low voltage to high voltage.</p>
                <button class="btn btn-outline-light" type="button" onclick="window.location.href='/products';">Read
                    More</button>
            </div>
        </div>
    </div>
</div>

<section class="p-4 mb-4 carousel slide" style="background-color: #FFFFFF;">
    <div class="me-5">
        <span>Our Partners & Brand Products :</span>
    </div>
    <div id="carouselFooterInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="d-flex justify-content-between flex-wrap align-items-center">
                    <img src="{{URL::asset('/image/PLN INDONESIA POWER.jpg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="PLN INDONESIA POWER">
                    <img src="{{URL::asset('/image/SCHNEIDER ELECTRIC.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="SCHNEIDER ELECTRIC">
                    <img src="{{URL::asset('/image/ABB.png')}}" style="max-width: 150px; height: auto;" class="p-2"
                        alt="ABB">    
                    <img src="{{URL::asset('/image/Hardox.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Hardox">
                    <img src="{{URL::asset('/image/TEKIRO.jpg')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="TEKIRO">
                    <img src="{{URL::asset('/image/Facom.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Facom">
                    <img src="{{URL::asset('/image/Fluke.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Fluke">
                    <img src="{{URL::asset('/image/Broyce.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Broyce">
                    <img src="{{URL::asset('/image/CRC.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="CRC">
                    <img src="{{URL::asset('/image/Scotch.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="Scothch">
                    <img src="{{URL::asset('/image/Supreme.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="Supreme">
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="d-flex justify-content-between flex-wrap align-items-center">
                    <img src="{{URL::asset('/image/KIMBERLY.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="KIMBERLY">
                    <img src="{{URL::asset('/image/KITZ.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="KITZ">
                    <img src="{{URL::asset('/image/Makita.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Makita">
                    <img src="{{URL::asset('/image/Mennekes.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Mennekes">
                    <img src="{{URL::asset('/image/Merlin Gerin.png')}}" style="max-width: 150px; height: auto;" class="p-2"
                        alt="Merlin Gerin">
                    <img src="{{URL::asset('/image/Mitsubishi-Electric.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Mitsubishi-Electric">
                    <img src="{{URL::asset('/image/Motorola.png')}}" style="max-width: 150px; height: auto;"
                        class="p-2" alt="Motorola">
                    <img src="{{URL::asset('/image/Nux.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="Nux">
                    <img src="{{URL::asset('/image/Omron.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="Omron">
                    <img src="{{URL::asset('/image/Philips.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="Philips">
                    <img src="{{URL::asset('/image/WD-40.png')}}"
                        style="max-width: 150px; height: auto;" class="p-2" alt="WD-40">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection