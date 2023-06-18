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
                <form method="POST" action="{{ route('login.store') }}" class="login__registre" id="login-in">
                    @csrf
                    <h1 class="login__title">Sign In</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input name="email" type="email" placeholder="Email Pengguna" class="login__input" required>
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input name="password" type="password" placeholder="Kata sandi" class="login__input" required>
                    </div>

                    <a class="login__forgot" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>

                    <button type="submit" class="login__button">Masuk</button>

                    <div>
                        <span class="login__account">Belum mempunyai akun ?</span>
                        <a href="{{ route('register') }}" class="login__signin">Daftar Akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
