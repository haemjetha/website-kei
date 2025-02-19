<!-- master template -->
@extends('master')

<!-- page title -->
@section('judul_halaman', '')

<!-- content -->
@section('konten')

<div class="container py-4 text-white">
    <header class="pb-3 mb-4">
        <h2>Our Location</h2>
    </header>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3"
                style="background-image: url('/image/Google Maps.png'); background-size: cover; background-position: center;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>_______</h2>
                <p><i class="fas fa-home mr-3"></i> Gading Kirana Timur IX No.18, Klp. Gading Bar, Kec. Klp.
                    Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240</p>
                <p><i class="fas fa-envelope mr-3"></i> admin@kiranaenergi.id</p>
                <p><i class="fas fa-phone mr-3"></i> +62 815-1923-0117</p>
                <p>Please access the following link :</p>
                <a href="https://maps.app.goo.gl/igLCBbd4Xk1WP4Ap7" target="_blank">Google Maps</a>
            </div>
        </div>
    </div>
</div>

@endsection