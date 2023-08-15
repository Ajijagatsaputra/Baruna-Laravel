<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Siswa-Profil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin')}}/assets/img/logo-removebg-preview.png" rel="icon">
  <link href="{{asset('admin')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('admin')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="Dashboard" class="logo d-flex align-items-center">
        <img src="{{asset('admin')}}/assets/img/blogo.png" alt=""> 
        <span class="d-none d-lg-block">SMK Bahari Tegal</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <!-- 
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('admin')}}/assets/img/IMG20230701192345.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Tubagus Faisal Bahri</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Tubagus Faisal Bahri</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Profil.html">
                <i class="bi bi-person-fill"></i>
                <span>Profil Saya</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="Dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="KBM">
          <i class="bi bi-journal-check"></i>
          <span>KBM</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="profil">
          <i class="bi bi-person-fill"></i>
          <span>Profil Saya</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="Siswa">
          <i class="bi bi-people"></i>
          <span>Siswa</span>
        </a>
      </li><!-- End Siswa Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Guru">
          <i class="bi bi-people-fill"></i>
          <span>Guru</span>
        </a>
      </li><!-- End Guru Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kelas">
          <i class="bi bi-person-square"></i>
          <span>Kelas</span>
        </a>
      </li><!-- End Kelas Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Mata-Pelajaran">
          <i class="bi bi-journals"></i>
          <span>Mata Pelajaran</span>
        </a>
      </li><!-- End Mata Pelajaran Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Jadwal-Pelajaran">
          <i class="bi bi-journal-text"></i>
          <span>Jadwal Pelajaran</span>
        </a>
      </li><!-- End Jadwal Pelajaran Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Tahun-Akademik">
          <i class="bi bi-list-stars"></i>
          <span>Tahun Akademik</span>
        </a>
      </li><!-- End Tahun Akademik Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Rekapitulasi">
          <i class="bi bi-list-stars"></i>
          <span>Rekapitulasi</span>
        </a>
      </li><!-- End Rekapitulasi Page Nav -->

      <!--li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Rekapitulasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Rekapitulasi_1</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Rekapitulasi_2</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Rekapitulasi_3</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Rekapitulasi_4</span>
            </a>
          </li>
        </ul>
      </li> End Rekapitulasi Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
<!-- =================================== BAGIAN UTAMA/TENGAH =================================== -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profil Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.html">Home</a></li>
          <li class="breadcrumb-item"><a href="Siswa.html">Siswa</a></li>
          <li class="breadcrumb-item active">Profil Siswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <!-- Left side columns -->
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <!-- Default Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profil</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Nilai Raport</button>
                </li>
                <!-- Tab3 untuk tambahan
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">tab3</button>
                </li> Akhir tab3 -->
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                  <h5 class="card-title">Masih Kosong</h5>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="card info-card sales-card">
                    <div class="filter" data-bs-toggle="tooltip" data-bs-placement="left" title="Pilih Semester">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                          <h6>Semester</h6>
                        </li>
                        <!--li><a class="dropdown-item" href="#">Genap 2022/2023</a></li>
                        <li><a class="dropdown-item" href="#">Ganjil 2022/2023</a></li>
                        <li><a class="dropdown-item" href="#">Genap 2021/2022</a></li>
                        <li><a class="dropdown-item" href="#">Ganjil 2021/2022</a></li-->
                        <li><a class="dropdown-item" href="#">Semester 4</a></li>
                        <li><a class="dropdown-item" href="#">Semester 3</a></li>
                        <li><a class="dropdown-item" href="#">Semester 2</a></li>
                        <li><a class="dropdown-item" href="#">Semester 1</a></li>
                      </ul>
                    </div>
                    <div class="card-body">      
                      <h5 class="card-title">Nilai Raport Siswa <span>| Brandon Jacob</span></h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cetak Raport">
                          <a class="nav-link collapsed" href="#">
                            <i class="bi bi-download"></i>
                          </a>                              
                        </div>
                        <div class="ps-3">
                          <h6>Total Nilai 145</h6>
                          <span class="text-primary small pt-1 fw-bold">Genap</span> 
                          <span class="text-muted small pt-2 ps-1">2022/2023</span>
                        </div>
                      </div>   
                      <h5 class="card-title">Normatif</h5>
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Ketuntasan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Pendidikan Agama</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bahasa Indonesia</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bahasa Inggris</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Matematika</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                        </tbody>
                      </table><!-- End Table with stripped rows -->
                      <h5 class="card-title">Adaptif</h5>
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Ketuntasan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Pendidikan Agama</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bahasa Indonesia</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bahasa Inggris</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Matematika</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                        </tbody>
                      </table><!-- End Table with stripped rows -->
                      <h5 class="card-title">Produktif</h5>
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Ketuntasan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Pendidikan Agama</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Bahasa Indonesia</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Bahasa Inggris</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Matematika</td>
                            <td>75</td>
                            <td>80</td>
                            <td>Tuntas</td>
                          </tr>
                        </tbody>
                      </table><!-- End Table with stripped rows -->
                      <h5 class="card-title">Kehadiran <span>| 85%</span></h5>
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">keterangan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Prosentase</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Sakit</td>
                            <td>5</td>
                            <td>5%</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Izin</td>
                            <td>5</td>
                            <td>5%</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Alfa</td>
                            <td>5</td>
                            <td>5%</td>
                          </tr>
                        </tbody>
                      </table><!-- End Table with stripped rows -->

                    </div>
                  </div>

                </div>
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <!-- Title Card -->
                  <h5 class="card-title">Profil Siswa <span>| Brandon Jacob</span></h5>
    
                  <!-- No Labels Form -->
                  <form class="row g-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="NIS">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="NISN">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-6">
                      <select id="inputState" class="form-select">
                        <option selected>Gender</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-md-6">
                      <input type="date" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="No Telp.">
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                      <textarea class="form-control" style="height: 100px" placeholder="Alamat"></textarea>
                    </div>
                    <div class="col-md-6">
                      <select id="inputState" class="form-select">
                        <option selected>Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Asal Sekolah">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Nilai Ujian">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Tahun Lulus">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Nama Ayah">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Nama Ibu">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="No Telp. Ayah">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="No Telp. Ibu">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Pekerjaan Ayah">
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Pekerjaan Ibu">
                    </div>
                    <div class="col-md-12">
                      <label for="inputNumber" class="col-md-6">Unggah Foto</label>
                      <div class="col-md-12">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Ubah</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End No Labels Form -->
                  <!-- Vertically centered Modal-->
                  <!-- Modal Tambah Dokumen -->
                  <div class="modal fade" id="verticalycentered2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Menambahkan Dokumen Siswa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="row g-3">
                          <div class="modal-body">
                            <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Nama Dokumen">
                            </div>
                            <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Deskripsi">
                            </div>
                            <div class="col-md-12">
                              <label for="inputNumber" class="col-md-6">Unggah Dokumen</label>
                              <div class="col-md-12">
                                <input class="form-control" type="file" id="formFile">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                            <button type="submit" class="btn btn-danger"><a href="Profil-Siswa.html">TAMBAHKAN</a></button>
                          </div>
                        </form><!-- End No Labels Form -->
                      </div>
                    </div>
                  </div><!-- Akhir Modal Tambah Dokumen -->
                  <!-- Modal Ubah Username Password -->
                  <div class="modal fade" id="verticalycentered1" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Konfirmasi Mengubah Username dan Password</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Apakah yakin akan Mengubah Username dan Password siswa?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                          <button type="submit" class="btn btn-danger"><a href="Siswa.html">IYA</a></button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Modal Ubah Username Password -->    
                  <!-- Modal Ubah Profil -->
                  <div class="modal fade" id="verticalycentered" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Konfirmasi Mengubah Profil Siswa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Apakah yakin data profil siswa yang diubah sudah benar?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                          <button type="submit" class="btn btn-danger"><a href="Siswa.html">IYA</a></button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Modal Ubah Profil -->
                </div>
              </div><!-- End Title Card -->
            </div>
          </div>
        </div>
        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Update Account -->
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Ubah Username dan Password <span>| Brandon Jacob</span></h5>
              <!-- No Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">Ubah</button>
                  <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                </div>
              </form><!-- End No Labels Form -->
            </div>
          </div><!-- End Update Account -->
          <!-- Riwayat Kelas -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Riwayat Kelas <span>| Brandon Jacob</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">Tingkat I</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    X Teknika
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Tingkat II</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    XI Teknika
                  </div>
                </div><!-- End activity item-->

              </div>
            </div>
          </div><!-- End Riwayat Kelas -->
          <!-- Prestasi -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Prestasi Siswa <span>| 3 Prestasi</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">17 Agt 2022</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Juara 1 Makan Kerupuk </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">17 Agt 2022</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Juara 1 Balap Karung </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">17 Agt 2022</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="#" class="fw-bold text-dark">Juara 1 Sepeda Hias </a>
                  </div>
                </div><!-- End activity item-->
                <div class="text-center">
                  <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2">Tambah Prestasi</a>
                </div>
              </div>

            </div>
          </div><!-- End Prestasi -->
        </div>

      </div>
    </section>

  </main><!-- End #main -->
<!-- =================================== AKHIR BAGIAN UTAMA/TENGAH =================================== -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SMK Bahari Tegal</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('admin')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin')}}/assets/js/main.js"></script>

</body>

</html>