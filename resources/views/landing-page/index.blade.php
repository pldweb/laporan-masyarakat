@extends('layouts.app')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" >
                        <div class="company-badge mb-4 text-white">
                            <i class="bi bi-gear-fill me-2"></i>
                            Bekerja Untuk Kenyamanan Rakyat
                        </div>
                        <h1 class="mb-2 text-white">Laporkan Masalah Fasilitas Umum <br>
                            <span class="text-white">Untuk Memajukan Indonesia</span>
                        </h1>
                        <p class="mb-2 mb-md-5 text-white">Laporkan keluhan Anda terhadap apapun yang menjadi masalah di sekitar Anda</p>
                        <div class="hero-buttons">
                            <a href="{{url('home/lapor')}}" class="btn-white text-red-700 px-4 py-3 fw-semibold" style="color: var(--accent-color)">Laporkan Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="lp-card-form">
                        <div class="contact-form">
                            <h3 class="text-center fw-bold">Sampaikan Laporan Anda</h3>
                            <hr>
                            <form action="forms/contact.php" method="post" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="judul" class="form-label">Judul Laporan</label>
                                        <input type="text" name="judul" class="form-control" required="">
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="deskripsi" class="form-label">Isi Laporan</label>
                                        <textarea type="text" rows="3" class="form-control" name="deskripsi" required=""></textarea>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="tanggal" class="form-label">Tanggal Laporan</label>
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" id="date"/>
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                                        <input type="text" name="lokasi" class="form-control" required="">
                                    </div>
                                    <div class="col-md-12 my-2">
                                        <label for="kategori" class="form-label">Kategori Laporan</label>
                                        <select class="form-select" aria-label="select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="formFile" class="form-label">Lampirkan Foto Lokasi</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                        <button type="submit" class="btn-primary btn">Kirim Laporan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row stats-row gy-4 mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h4>3x Won Awards</h4>
                            <p class="mb-0">Vestibulum ante ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="stat-content">
                            <h4>6.5k Faucibus</h4>
                            <p class="mb-0">Nullam quis ante</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="stat-content">
                            <h4>80k Mauris</h4>
                            <p class="mb-0">Etiam sit amet orci</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="stat-content">
                            <h4>6x Phasellus</h4>
                            <p class="mb-0">Vestibulum ante ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function(){
            $('#datepicker').datepicker();
        });
    </script>

@endsection
