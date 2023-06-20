<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Telle Assesment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/test" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/favicon1.png') }}" alt="">
                <span>Telle Asessment</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="getstarted scrollto" style="border: none"
                                href="{{ route('logout') }}">Logout</button>
                            </li>
                        </form>
                    @endauth

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="test" class="test">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tes Minat dan Bakat dengan Holland Code (RIASEC). Jawab dengan jujur. Tidak Suka,
                                Sedikit Suka, Netral, Sedikit Menikmati atau Menikmati</h3>
                            <h2 class="icon">
                                <i class="bi bi-mic-fill"></i>
                            </h2>

                            <br>
                            <br>

                            <!-- Input File Audio -->
                            <form method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input name="audio" type="file" class="form-control"
                                        placeholder="Masukkan File Audio" required>
                                </div>
                                <div class="small font-italic text-muted mb-4">format video mp3</div>

                                <div class="text-center text-lg-start">
                                    <button type="submit" class="btn-read-more">Simpan dan Lanjutkan</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>

        </section><!-- End About Section -->



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
