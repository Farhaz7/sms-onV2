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
    <link rel="shortcut icon" href="/assets/img/bjb.ico" />
    <title>Edit Data</title>
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
                    <h1 class="h1"><strong>Edit Data</strong></h1>
                    <div class="d-flexs">
                    <section class="tanda">User / Home / Edit Data</section>
                </div>
            </div>
            <hr class="mt-0 mb-3">
                <div class="formbold-main-wrapper">
                    <div class="formbold-form-wrapper">
                        <form action="/simpan-data/{{Auth::user()->id}}" method="post" onSubmit="return validateForm()">
                            @METHOD('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="nik_meninggal" class="formbold-form-label">NIK Yang Meninggal :</label>
                                        <input class="formbold-form-input" type="text" name="nik_meninggal" id="nik_meninggal" value="{{Auth::user()->nik_meninggal}}" placeholder="" disabled />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="nama_meninggal" class="formbold-form-label">Nama Yang Meninggal :</label>
                                        <input class="formbold-form-input" type="text" name="nama_meninggal" id="nama_meninggal" value="{{Auth::user()->nama_meninggal}}" placeholder="" disabled/>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5 w-full">
                                        <label for="tgl_meninggal" class="formbold-form-label">Tanggal Meninggal :</label>
                                        <input class="formbold-form-input" type="date" name="tgl_meninggal" id="tgl_meninggal" value="{{Auth::user()->tgl_meninggal}}" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="alamat_meninggal" class="formbold-form-label">Alamat Lengkap Yang Meninggal :</label>
                                        <input class="formbold-form-input" type="text" name="alamat_meninggal" id="alamat_meninggal" value="{{Auth::user()->alamat_meninggal}}" placeholder="" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label class="formbold-form-label">Kecamatan Yang Meninggal :</label>
                                        <select name="kecamatan_meninggal" id="kecamatan_meninggal"
                                            class="formbold-form-input">
                                            <option value="" selected disabled>{{Auth::user()->kecamatan_meninggal}}</option>
                                            <option value="Banjarbaru Selatan" {{ Auth::user()->kecamatan_ahwa === 'Banjarbaru Selatan' ? 'selected' : '' }}>Banjarbaru Selatan</option>
                                            <option value="Banjarbaru Utara" {{ Auth::user()->kecamatan_ahwa === 'Banjarbaru Utara' ? 'selected' : '' }}>Banjarbaru Utara</option>
                                            <option value="Cempaka" {{ Auth::user()->kecamatan_ahwa === 'Cempaka' ? 'selected' : '' }}>Cempaka</option>
                                            <option value="Landasan Ulin" {{ Auth::user()->kecamatan_ahwa === 'Landasan Ulin' ? 'selected' : '' }}>Landasan Ulin</option>
                                            <option value="Liang Anggang" {{ Auth::user()->kecamatan_ahwa === 'Liang Anggang' ? 'selected' : '' }}>Liang Anggang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label  class="formbold-form-label">Kelurahan Yang Meninggal :</label>
                                        <select class="formbold-form-input" name="kelurahan_meninggal" id="kelurahan_meninggal">
                                            <option value="" selected disabled>{{Auth::user()->kelurahan_meninggal}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="fName" class="formbold-form-label">NIK Ahli Waris :</label>
                                        <input class="formbold-form-input" type="text" name="nik_ahwa" id="nik_ahwa" placeholder="" value="{{Auth::user()->nik_ahwa}}" />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="lName" class="formbold-form-label">Nama Ahli Waris :</label>
                                        <input class="formbold-form-input" type="text" name="nama_ahwa" id="nama_ahwa" placeholder="" value="{{Auth::user()->nama_ahwa}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5 w-full">
                                        <label for="telp" class="formbold-form-label">Nomor Telepon Ahli Waris :</label>
                                        <input class="formbold-form-input" type="text" name="notelp_ahwa" id="notelp_ahwa" placeholder="" value="{{Auth::user()->notelp_ahwa}}" />
                                    </div>
                                </div>

                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="time" class="formbold-form-label">Alamat Lengkap Ahli Waris :</label>
                                        <input class="formbold-form-input" type="text" name="alamat_ahwa" id="alamat_ahwa" value="{{Auth::user()->alamat_ahwa}}" placeholder="" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="time" class="formbold-form-label">Email Ahli Waris :</label>
                                        <input class="formbold-form-input" type="text" name="email" id="email" value="{{Auth::user()->email}}" placeholder="" disabled />
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="ked" class="formbold-form-label">Kedudukan Ahli Waris :</label>
                                        <select name="kedudukan" id="kedudukan"
                                            class="formbold-form-input">
                                            <option disabled {{ !Auth::user()->kedudukan ? 'selected' : '' }}></option>
                                            <option value="Saudara Kandung" {{ Auth::user()->kedudukan === 'Saudara Kandung' ? 'selected' : '' }}>Saudara Kandung</option>
                                            <option value="Anak Kandung" {{ Auth::user()->kedudukan === 'Anak Kandung' ? 'selected' : '' }}>Anak Kandung</option>
                                            <option value="Suami" {{ Auth::user()->kedudukan === 'Suami' ? 'selected' : '' }}>Suami</option>
                                            <option value="Istri" {{ Auth::user()->kedudukan === 'Istri' ? 'selected' : '' }}>Istri</option>
                                            <option value="Cucu" {{ Auth::user()->kedudukan === 'Cucu' ? 'selected' : '' }}>Cucu</option>
                                            <option value="Pilihan Lain" {{ Auth::user()->kedudukan === 'Pilihan Lain' ? 'selected' : '' }}>Pilihan Lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap formbold--mx-3">
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="kcm" class="formbold-form-label">Kecamatan Ahli Waris :</label>
                                        <select name="kecamatan_ahwa" id="kecamatan_ahwa"
                                            class="formbold-form-input">
                                            <option value="" selected disabled>{{Auth::user()->kecamatan_ahwa}}</option>
                                            <option value="Banjarbaru Selatan" {{ Auth::user()->kecamatan_ahwa === 'Banjarbaru Selatan' ? 'selected' : '' }}>Banjarbaru Selatan</option>
                                            <option value="Banjarbaru Utara" {{ Auth::user()->kecamatan_ahwa === 'Banjarbaru Utara' ? 'selected' : '' }}>Banjarbaru Utara</option>
                                            <option value="Cempaka" {{ Auth::user()->kecamatan_ahwa === 'Cempaka' ? 'selected' : '' }}>Cempaka</option>
                                            <option value="Landasan Ulin" {{ Auth::user()->kecamatan_ahwa === 'Landasan Ulin' ? 'selected' : '' }}>Landasan Ulin</option>
                                            <option value="Liang Anggang" {{ Auth::user()->kecamatan_ahwa === 'Liang Anggang' ? 'selected' : '' }}>Liang Anggang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full sm:w-half formbold-px-3">
                                    <div class="formbold-mb-5">
                                        <label for="kel" class="formbold-form-label">Kelurahan Ahli Waris :</label>
                                        <select name="kelurahan_ahwa" id="kelurahan_ahwa"
                                            class="formbold-form-input">
                                            <option  value="" selected disabled>{{Auth::user()->kelurahan_ahwa}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <button type="submit" class="formbold-btn">Simpan Data</button>
                            </div>
                        </form>
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
