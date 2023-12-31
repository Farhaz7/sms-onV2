<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-GLhlTQ8iK9tGR5RVL6ZN7NxFI1u1g3AcCjz0qGwF+6z5lZ6G3UZLI3zqG5FaLJ" crossorigin="anonymous">
    <link href="assets/css/dbuser.css" rel="stylesheet">
    <link href="assets/css/profil.css" rel="stylesheet">
    <link href="assets/css/editprofil.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
    <title>Profil</title>
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

                    <li class="sidebar-item active">
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

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="syarat">
                            <i class="align-middle" data-feather="file"></i> <span class="align-middle">Syarat -
                                Syarat</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
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
                    <h1 class="h1"><strong>Menu Data</strong></h1>
                    <div class="d-flexs">
                    <section class="tanda">User / Home / Profil</section>
                </div>
            </div>
                <!-- Account page navigation-->

                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Akun</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="assets/img/avatar.png" alt="">
                                <div class="mt-3">
                                    <h4>{{Auth::user()->nik_meninggal}}</h4>
                                    <p class="text-secondary mb-1">{{Auth::user()->nama_meninggal}}</p>
                                    <p class="text-muted font-size-sm">{{Auth::user()->email}}</p>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header">Data Akun</div>
                            <div class="card-body">
                                <form>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">NIK Yang Meninggal</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="" value="{{Auth::user()->nik_meninggal}}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Nama Yang Meninggal</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="" value="{{Auth::user()->nama_meninggal}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Tanggal Meninggal</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ \Carbon\Carbon::parse(Auth::user()->tgl_meninggal)->isoFormat('D MMMM Y') }}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Alamat Yang Meninggal</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{Auth::user()->alamat_meninggal}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Kecamatan Yang Meninggal</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{Auth::user()->kecamatan_meninggal}}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Kelurahan Yang Meninggal</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{Auth::user()->kecamatan_meninggal}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">NIK Ahli Waris</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{Auth::user()->nik_ahwa}}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Nama Ahli Waris</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{Auth::user()->nama_ahwa}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Nomor Telpon Ahli Waris</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{Auth::user()->notelp_ahwa}}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Alamat Ahli Waris</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{Auth::user()->alamat_ahwa}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row gx-3 mb-3">

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Kecamatan Ahli Waris</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{Auth::user()->kecamatan_ahwa}}" disabled>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Kelurahan Ahli Waris</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{Auth::user()->kecamatan_ahwa}}" disabled>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Kedudukan Ahli Waris</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="" value="{{Auth::user()->kedudukan}}" disabled>
                                    </div>
                                    <a href="editprofil">
                                        <button class="btn btn-primary" type="button">Edit Data</button>
                                    </a>
                                </form>
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
    <script src="assets/js/profil.js"></script>



</body>

</html>
