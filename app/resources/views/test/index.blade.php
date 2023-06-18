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

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/favicon1.png') }}" alt="">
                <span>Telle Asessment</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    @guest
                        <li><a class="getstarted scrollto" href="{{ route('register') }}">Sign up</a></li>
                        <li><a class="login" href="{{ route('login') }}">Login</a></li>
                    @endguest

                    @auth
                        <li><a class="nav-link scrollto"
                                href="{{ route('profile', ['id' => $user->id]) }}">{{ $user->name }}</a></li>
                        <li>
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

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Tele Assesment</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">Tele Asesmen Interaktif Psikologi Berbasis
                            Artificial Intellegence</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href="#services"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Mulai</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/features-2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Layanan Tele-Asesmen Kami</p>
                    <h2>Solusi tele-asesment psikologi interaktif berbasis AI/ML dapat mengubah cara seleksi karyawan
                    </h2>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <img src="assets/img/features-2.png" class="img-fluid" alt="">
                            <h3>Tes Kepribadian</h3>
                            <p>Inovasi : Pengawasan perilaku dengan menggunakan system proctoring gerakan kepala (head
                                pose), mata (gaze)</p>
                            <p>Metode : Analisis rreal time analisis gerakan headpose, gaze</p>
                            <p>Output : Tingkat keyakinan peserta memenuhi prosedur test</p>
                            <a href="test_kepribadian.html" class="read-more"><span>Mulai test</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <img src="assets/img/features-2.png" class="img-fluid" alt="">
                            <h3>Tes Bakat dan Minat</h3>
                            <p>Pengawasan perilaku dengan menggunakan system proctoring gerakan kepala (head pose), mata
                                (gaze)</p>
                            <a href="test_minatbakat.html" class="read-more"><span>Mulai Tes</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <img src="assets/img/features-2.png" class="img-fluid" alt="">
                            <h3>Tes Intelegensi</h3>
                            <p>Inovasi : Computer adaptive test dengan soal-soal yang dibuat dengan stimulus
                                games/gamification dan cerita</p>
                            <p>Metode : CAT (Computer Adaptive Test) dengan berbasis item banking dengan IRT (Item
                                Response Teori)</p>
                            <p>Output : Profile Intelegensi atau potensi intelegensi</p>
                            <a href="test_intelegensi.html" class="read-more"><span>Mulai Tes</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/favicon1.png" alt="">
                            <span>Telle Assesment</span>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sed, explicabo cum
                            rerum ullam id sapiente accusantium corporis voluptatum! Impedit est illo maiores deserunt
                            voluptates nihil, ipsum sapiente. Ducimus, earum!</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Program</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tele-Assesmen</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>telle assesment</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Ubaya-team</a>
            </div>
        </div>
    </footer><!-- End Footer -->

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
