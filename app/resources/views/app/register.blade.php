<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Responsive Login Form Sign In Sign Up</title>
</head>

<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="assets/img/bg4.svg" alt="">
            </div>

            <div class="login__forms">
                <form method="POST" action="{{ route('register.store') }}" class="login__create" id="login-up">
                    @csrf
                    <h1 class="login__title">Create Account</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input name="name" type="text" placeholder="Nama Pengguna" class="login__input" required>
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input name="email" type="email" placeholder="Email" class="login__input" required>
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input name="password" type="password" placeholder="Kata sandi" class="login__input" required
                            minlength="8">
                    </div>

                    <button type="submit" class="login__button">Daftar</button>

                    <div>
                        <span class="login__account">Sudah memiliki Akun ?</span>
                        <a href="{{ route('login') }}" class="login__signup">Masuk</a>
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"></a>
                        <a href="#" class="login__social-icon"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
