<!-- master template -->
@extends('master')

<!-- page title -->
@section('judul_halaman', '')

<!-- content -->
@section('konten')

<div class="container py-4 text-white">
    <header class="pb-3 mb-4">
        <h2>Tentang Kirana Energi Indonesia</h2>
    </header>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Office.jpg'); background-size: cover; background-position: center;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <p class="lead fs-4 text-secondary mb-3">PT. Kirana Energi Indonesia memainkan peran penting 
                            dalam mendukung kemajuan industri. Kami memahami bahwa inovasi di bidang mekanikal dan 
                            elektrikal tidak hanya berfokus pada peningkatan efisiensi operasional, tetapi juga pada 
                            percepatan kemajuan serta optimalisasi kinerja sistem</p>
                        <div class="row gy-4 gy-md-0 gx-xxl-5X">
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Mekanikal</h2>
                                        <p class="text-secondary mb-0">Kami bergerak di bidang mekanikal dengan fokus pada perancangan, 
                                            instalasi, dan pemeliharaan sistem mekanik yang efisien dan handal. Tim kami berkomitmen 
                                            untuk menyediakan solusi terbaik dalam berbagai aplikasi industri, mulai dari sistem pemanasan, 
                                            ventilasi, dan pendinginan (HVAC) hingga sistem penggerak dan transmisi mekanis yang kompleks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                            <path
                                                d="M8.69666 0.040354C8.90859 0.131038 9.03105 0.354856 8.99315 0.582235L8.09019 6.00001H12.4999C12.6893 6.00001 12.8625 6.10701 12.9472 6.2764C13.0318 6.44579 13.0136 6.6485 12.8999 6.8L6.89997 14.8C6.76166 14.9844 6.5152 15.0503 6.30327 14.9596C6.09134 14.869 5.96888 14.6451 6.00678 14.4178L6.90974 8.99999H2.49999C2.31061 8.99999 2.13747 8.89299 2.05278 8.7236C1.96808 8.55421 1.98636 8.3515 2.09999 8.2L8.09996 0.200037C8.23827 0.0156255 8.48473 -0.0503301 8.69666 0.040354ZM3.49999 8H7.49996C7.64694 8 7.78647 8.06466 7.88147 8.17681C7.97647 8.28895 8.01732 8.43722 7.99316 8.58219L7.33026 12.5596L11.4999 7H7.49996C7.35299 7 7.21346 6.93534 7.11846 6.82319C7.02346 6.71105 6.98261 6.56278 7.00677 6.41781L7.66967 2.44042L3.49999 8Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="h4 mb-3">Elektrikal</h2>
                                        <p class="text-secondary mb-0">Di sisi elektrikal, kami menawarkan solusi inovatif dalam perancangan, 
                                            instalasi, dan pemeliharaan sistem kelistrikan untuk mendukung operasional industri secara optimal. 
                                            Kami menangani berbagai sistem, mulai dari kelistrikan bangunan, instalasi panel listrik, 
                                            hingga kontrol otomatisasi dan sistem pencahayaan, dengan fokus pada efisiensi dan keselamatan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About 4 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8">
                <h3 class="fs-5 mb-2 text-secondary text-uppercase">About</h3>
                <h2 class="display-15 mb-4">PT. Kirana Energi Indonesia dengan bangga
                     menjadi mitra terpercaya bagi perusahaan yang ingin menghadapi tantangan teknologi
                      mekanikal dan elektrikal dengan percaya diri. Dengan perpaduan keahlian teknis 
                      yang mendalam, kreativitas tanpa batas, dan dedikasi untuk menghadirkan solusi 
                      yang efektif, kami berkomitmen untuk membantu klien kami mencapai tujuan mereka 
                      dengan lebih baik</h2>
                <button type="button" class="btn btn-lg btn-primary mb-3 mb-md-4 mb-xl-5">Connect Now</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
            <div class="col-12 col-lg-6">
                <div class="card bg-light p-3 m-0">
                    <div class="row gy-3 gy-md-0 align-items-md-center">
                        <div class="col-md-5">
                            <img src="/image/Office.jpg" class="img-fluid rounded-start" alt="Why Choose Us?">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-0">
                                <h2 class="card-title h4 mb-3">Visi</h2>
                                <p class="card-text lead">Memberikan layanan profesional yang didukung 
                                    oleh para ahli yang memiliki kompetensi di bidangnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card bg-light p-3 m-0">
                    <div class="row gy-3 gy-md-0 align-items-md-center">
                        <div class="col-md-5">
                            <img src="/image/Office.jpg" class="img-fluid rounded-start" alt="Visionary Team">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-0">
                                <h2 class="card-title h4 mb-3">Misi</h2>
                                <p class="card-text lead">Memberikan layanan dan pengadaan barang dengan harga 
                                    yang kompetitif, kualitas terbaik, dan memenuhi standar sertifikat produk. 
                                    Mengutamakan standar kesehatan dan keselamatan kerja (K3) serta mematuhi 
                                    semua aturan SOP perusahaan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About 8 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container text-white">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Our Best Offers</h2>
                <p class="text-secondary mb-5 text-center lead fs-4">We pride ourselves on delivering top-notch repair
                    and maintenance solutions to cyclists of all levels.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6">
                <img class="img-fluid rounded border border-dark" loading="lazy" src="/image/Office.jpg" alt="About Us">
            </div>
            <div class="col-12 col-lg-6 col-xxl-6">
                <div class="row justify-content-lg-end justify-content-xxl-around">
                    <div class="col-12 col-lg-11 col-xxl-10">
                        <div class="card border-0 mb-4">
                            <div class="card-body p-0 bg-dark">
                                <h4 class="card-title mb-3 text-white">Legalitas Perusahaan</h4>
                                <ul class="list-unstyled m-0 p-0 d-sm-flex flex-sm-wrap">
                                    <li class="py-1 d-flex align-items-center gap-2 col-sm-6">
                                        <span class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                            </svg>
                                        </span>
                                        <span class="text-white">Akta Pendirian
                                        </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2 col-sm-6">
                                        <span class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                            </svg>
                                        </span>
                                        <span class="text-white">NPWP</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2 col-sm-6">
                                        <span class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                            </svg>
                                        </span>
                                        <span class="text-white">NIB</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2 col-sm-6">
                                        <span class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                            </svg>
                                        </span>
                                        <span class="text-white">SPPKP</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2 col-sm-6">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card border-0 mb-4 mb-xxl-5">
                            <div class="card-body p-0 bg-dark">
                                <h4 class="card-title mb-3 text-white">Pencapaian kami</h4>
                                
                                <p class="fw-bold mb-1 text-white bg-dark p-1 d-inline-block">Progress 10%</p>
                                <div class="progress mb-3" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 10%"></div>
                                </div>

                                <p class="fw-bold mb-1 text-white bg-dark p-1 d-inline-block">Progress 10%</p>
                                <div class="progress mb-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 25%"></div>
                                </div>

                                <p class="fw-bold mb-1 text-white bg-dark p-1 d-inline-block">Progress 10%</p>
                                <div class="progress mb-3" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 50%"></div>
                                </div>

                                <p class="fw-bold mb-1 text-white bg-dark p-1 d-inline-block">Progress 10%</p>
                                <div class="progress mb-3" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 75%"></div>
                                </div>

                                <p class="fw-bold mb-1 text-white bg-dark p-1 d-inline-block">Progress 10%</p>
                                <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
                                </div>

x
                                    <a href="#!" class="btn btn-primary bsb-btn-2xl">
                            Explore
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection