<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"integrity="sha384-GLhlTQ8iK9tGR5RVL6ZN7NxFI1u1g3AcCjz0qGwF+6z5lZ6G3UZLI3zqG5FaLJ" crossorigin="anonymous">
    <link href="assets/css/dbuser.css" rel="stylesheet">
    <link href="assets/css/uploadberkas.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
    <title>Dashboard</title>
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

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Tambahkan
                                Berkas</span>
                        </a>
                        <ul class="submenu active">
                            <li><a href="uploadberkas">• Upload Berkas</a></li>
                            <li><a href="berkas">• Berkas</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="syarat">
                            <i class="align-middle" data-feather="file"></i> <span class="align-middle">Syarat -
                                Syarat</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/assets/pdf/PERWALISMS-ON.pdf">
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
                                <a class="dropdown-item" href="profil"><i class="align-middle me-1"
                                        data-feather="user"></i>
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
                <div class="container-fluid p-0">
                    <div class="d-flex">
                        <h1 class="h1"><strong>Upload Berkas</strong></h1>
                        <div class="d-flexs">
                        <section class="tanda">User / Home / Upload Berkas</section>
                    </div>
                </div>
                    <hr class="mt-0 mb-3">
                    <div class="formbold-main-wrapper">
                        <div class="formbold-form-wrapper">
                            <form action="" method="POST">
                                <form action="{{ route('uploadberkas.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="berkass">
                                        <label for="nik_meninggal" class="formbold-form-label">1. Surat pengantar dari kelurahan <span style="color: red;">[tipe file : jpg/png] :</label>
                                        <input class="formbold-form-input" type="file" name="surat_pengantar" id="surat_pengantar" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nama_meninggal" class="formbold-form-label">2. Surat ahli waris dari kelurahan <span style="color: red;">[tipe file : jpg/png]</label>
                                            <input  class="formbold-form-input" type="file" name="ktp_meninggal" id="ktp_meninggal" value="" placeholder="" >
                                    </div>
                                    <div class="berkass">
                                        <label for="nik_meninggal" class="formbold-form-label">3. Surat keterangan tidak mampu atau kartu
                                            KIS/KKS/BPJS/JAMKESDA DLL khusus untuk warga tidak mampu. <span style="color: red;">[tipe file : jpg/png] :</label>
                                        <input class="formbold-form-input" type="file" name="surat_tdk_mampu" id="surat_tdk_mampu" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nama_meninggal" class="formbold-form-label">4. Foto E-KTP yang meninggal dan Bagi anak yang belum ber E-KTP bisa diganti dengan akta kelahiran,
                                            KIA atau surat ket.Lahir dari Bidan / Dokter <span style="color: red;">[tipe file : jpg/png]</label>
                                        <input class="formbold-form-input" type="file" name="ktp_meninggal" id="ktp_meninggal" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nik_meninggal" class="formbold-form-label">5. Foto E-KTP ahli waris <span style="color: red;">[tipe file : jpg/png] :</label>
                                            <input class="formbold-form-input" type="file" name="ktp_ahwa" id="ktp_ahwa" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nama_meninggal" class="formbold-form-label">6. Foto kartu keluarga Yang Meninggal <span style="color: red;">[tipe file : jpg/png]</label>
                                            <input class="formbold-form-input" type="file" name="kk_meninggal" id="kk_meninggal" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nik_meninggal" class="formbold-form-label">7. Foto akte kematian <span style="color: red;">[tipe file : jpg/png] :</label>
                                            <input class="formbold-form-input" type="file" name="akte_meninggal" id="akte_meninggal" value="" placeholder=""/>
                                    </div>
                                    <div class="berkass">
                                        <label for="nama_meninggal" class="formbold-form-label">8. Foto Kartu Keluarga Ahli Waris <span style="color: red;">[tipe file : jpg/png]</label>
                                            <input class="formbold-form-input" type="file" name="kk_ahwa" id="kk_ahwa" value="" placeholder=""/>
                                    </div>

                                <div>
                                    <button type="submit" class="formbold-btn">Simpan Data</button>
                                </div>
                            </form>
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
    <script src="assets/js/profil.js"></script>



</body>

</html>
