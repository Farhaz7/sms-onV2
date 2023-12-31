<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iK9tGR5RVL6ZN7NxFI1u1g3AcCjz0qGwF+6z5lZ6G3UZLI3zqG5FaLJ" crossorigin="anonymous">
    <link href="assets/css/dbuser.css" rel="stylesheet">
    <link href="assets/css/syarat.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
    <title>Syarat - Syarat</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <img src="assets/img/bjb.png" alt="Logo" class="logo-img" style="width: 50px; height: auto;">
                    <span class="align-middle">Layanan SMS-ON</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="dbuser">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="profil">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Tambahkan
                                Berkas</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="uploadberkas">• Upload Berkas</a></li>
                            <li><a href="berkas">• Berkas</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="syarat">
                            <i class="align-middle" data-feather="file"></i> <span class="align-middle">Syarat -
                                Syarat</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="assets/pdf/PERWALISMS-ON.pdf">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Peraturan
                                Walikota</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="logout">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
                        </a>
                    </li>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <span class="text-dark">{{Auth::user()->nama_ahwa}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profil"><i class="align-middle me-1" data-feather="user"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="dbuser"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i>Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">
                    <div class="container-fluidt p-0">
                        <div class="row">
                            <div style="display: flex; justify-content: center; align-items: center; height: 15vh;">
                                <img src="/assets/img/bjb.png" style="height: 140px;" alt="Logo">
                            </div>
                            <div class="text-syarat">
                                <h3><strong><b>Persyaratan Santunan Kematian Kepada<br>Warga Kurang Mampu Kota Banjarbaru</b></strong></h3>
                            </div>
                            <br>
                            <div class="persyaratan">
                                <h3><b>Persyaratan :</b></h3>
                                <section> 1. Surat Pengantar dari Kelurahan<section>
                                <section> 2. Surat Ahli Waris dari Kelurahan<section>
                                <section> 3. Surat keterangan tidak mampu atau Kart KIS/KKS/Jamkesda DLL Khusus warga tidak mampu.<section>
                                <section> 4. Fotocopy E-KTP yang meninggal.<section>
                                <section> 5. Fotocopy E-KTP Ahli waris.<section>
                                <section> 6. Fotocopy Kart Keluarga.<section>
                                <section> 7. Fotocopy Akte Kematian.<section>
                                <section> 8. Bagi anak yang belum ber E-KTP bisa diganti dengan aka kelahiran atau surat keterangan lahir dari bidan/dokter.<section>
                            </div>

                            <br>

                            <div class="sistem">
                                <h3><b>Sistem, Mekanisme dan Prosedur :</b></h3>
                                <section> 1. Warga bisa mengakses website ini dan mulai mendaftar terlebih dahulu dengan format yang sudah.<section>
                                <section> 2. Warga dapat mengupload kelengkapan berkas permohonan layanan santunan kematian dalam waktu 30 hari setelah pendaftaran.<section>
                                <section> 3. Petugas akan menerima, memverifikasi dan mengagendakan berkas santunan kematian yang telah d penyerahan dana santunan kematian.<section>
                                <section> 4. Petugas membuat Telaahan Staf dan daftar penerima santunan kematian.<section>
                                <section> 5. Pejabat berwenang memberikan persetujuan pada Telaahan Staf dan daftar penerima santunan kematian.<section>
                                <section> 6. Petugas menyerahkan berkas, telaahan staf dan daftar penerima santunan kematian yang telah disetujui untuk verifikasi oleh bendahara pengeluaran guna pencairan dana santuanan kematian.<section>
                                <section> 7. Petugas menyerahkan dana santunan kematian kepada ahli waris.<section>
                            </div>

                            <br>

                            <div class="waktu">
                                <h3><b>Waktu Penyelesaian :</b></h3>
                                <section> - Berkas diterima<section>
                                <section> - Berkas diverifikasi, diagendakan<section>
                                <section> - Berkas dibuatkan Telaahan Staf<section>
                                <section> - Apabila disetujui, diproses untuk pencairan dana santunan kematiannya<section>
                                <section> - Setelah dana santunan kematian cair, disalurkan ke rumah ahli waris yang telah terdata Produk Layanan<section>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="#" target="_blank">&copy;<strong>SMS-ON 2023</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="assets/js/dbuser.js"></script>
    <script src="assets/js/dbuser2.js"></script>


</body>

</html>
