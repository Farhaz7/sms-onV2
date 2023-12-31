<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Layanan SMS-ON</title>
    <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
</head>
<style>
    body{
  background-image: url('assets/img/bgbalaix.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login"><strong>LOGIN SMS-ON</strong></div>
            <div class="title signup"><strong>DAFTAR AKUN</strong></div>
        </div>
        <div class="image-container">
            <img id="loginImage" src="assets/img/bjb.png" alt="">
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Daftar</label>
                <div class="slider-tab"></div>
            </div>

            <div class="form-inner">
                <form class="login" action="{{ route('actionlogin') }}" method="post">
                @csrf
                    <div class="field">
                        <input type="text" name="nik" placeholder="NIK Yang Meninggal" required="">
                    </div>
                    @error('nik')
                        <small>{{ $message }}</small>
                    @enderror
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required="">
                    </div>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                    <div class="pass-link"><a href="#">Lupa password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Belum punya akun? <a href="">Daftar sekarang</a></div>
                </form>

                <form class="signup" action="{{ route('actionregister') }}" method="post">
                    @csrf
                    <div class="field">
                        <input type="text" name="nik" pattern="\d{16}" title="NIK harus terdiri dari 16 digit angka" placeholder="NIK Yang Meninggal" required="">
                    </div>
                    <div class="field">
                        <input type="text" name="name" placeholder="Nama Yang Meninggal" required="">
                    </div>
                    <div class="field">
                        <input type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="field">
                        <input type="password" name="password" pattern=".{6,}" title="Password harus terdiri dari minimal 6 karakter" placeholder="Password" required="">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
<script src="/assets/js/login.js"></script>
<script src="/assets/js/pembatas.js"></script>

</html>
