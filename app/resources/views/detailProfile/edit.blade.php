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

    <style type="text/css">

    </style>

    <!-- =======================================================
    * Template Name: FlexStart
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/favicon1.png') }}" alt="">
                <span>Telle Asessment</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    @auth
                        {{-- <li><a class="nav-link scrollto"
                                href="{{ route('profile', ['id' => $user->id]) }}">{{ $user->name }}</a></li>
                        <li> --}}
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
    <div class="container-xl px-4 mt-5" id="body-content">
        {{-- <hr class="mt-0 mb-4"> --}}

        <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xl-4">

                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <img class="img-account-profile rounded-circle mb-2" id="preview"
                                style="max-width: 200px; max-height: 200px;"
                                @if ($user->image) src="{{ asset('user/images/' . $user->image) }}" 
                            @else
                                
                            src="https://bootdey.com/img/Content/avatar/avatar7.png" @endif
                                alt>

                            <div class="mb-3">
                                <input class="form-control" type="file" id="image" name="image">
                            </div>

                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to
                                    other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" name="username"
                                    placeholder="Enter your username" value="{{ $user->username ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputStatus">Status</label>
                                <input class="form-control" id="inputStatus" type="text" name="status"
                                    placeholder="Enter your Status" value="{{ $user->status ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputAddress">Address</label>
                                <input class="form-control" id="inputAddress" type="text" name="alamat"
                                    placeholder="Enter your Address" value="{{ $user->alamat ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputFullName">Full Name</label>
                                <input class="form-control" id="inputFullName" type="text" name="name"
                                    placeholder="Enter your Full Name" value="{{ $user->name }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputFullName">Email</label>
                                <input class="form-control" id="inputEmail" type="email" name="email"
                                    placeholder="Enter your Email" value="{{ $user->email }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Whatsapp</label>
                                <input class="form-control" id="inputWhatsapp" type="text" name="wa"
                                    placeholder="Enter your Whatsapp" value="{{ $user->wa ?? '' }}" required>
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="text" name="phone"
                                        placeholder="Enter your phone number" value="{{ $user->phone ?? '' }}"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="inputBirthday" type="date" name="birthday"
                                        placeholder="Enter your birthday" value="{{ $user->birthday ?? '' }}"
                                        required>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Website</label>
                                <input class="form-control" id="inputUsername" type="text" name="website"
                                    placeholder="Enter your website" value="{{ $user->website ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Github</label>
                                <input class="form-control" id="inputEmailAddress" type="text" name="github"
                                    placeholder="Enter your Github" value="{{ $user->github ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Twitter</label>
                                <input class="form-control" id="inputEmailAddress" type="text" name="twitter"
                                    placeholder="Enter your Twitter" value="{{ $user->twitter ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Instagram</label>
                                <input class="form-control" id="inputEmailAddress" type="text" name="instagram"
                                    placeholder="Enter your Instagram" value="{{ $user->instagram ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Facebook</label>
                                <input class="form-control" id="inputEmailAddress" type="text" name="facebook"
                                    placeholder="Enter your Facebook" value="{{ $user->facebook ?? '' }}">
                            </div>


                            <a class="btn btn-danger" href="{{ route('profile', ['id' => $user->id]) }}">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
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
    <script>
        let selectImage = document.getElementById('image');
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>

</body>

</html>
