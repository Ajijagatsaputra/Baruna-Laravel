<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KBM</title>
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
              <a class="dropdown-item d-flex align-items-center" href="profil">
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
        <a class="nav-link" href="KBM">
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
        <a class="nav-link collapsed" href="Siswa">
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
      <h1>Kegiatan Belajar Mengajar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
          <li class="breadcrumb-item active">KBM</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Title Card -->
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Mata Pelajaran yang Diampu di Semester Ini <span>| Ganjil 2023/2024</span></h5>
              </div>
            </div><!-- End Title Card -->

            <!-- Siswa Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Bahasa Indonesia <span>| X Teknika</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#tempat-1">
                        <i class="bi bi-people"></i>
                      </a>
                    </div>
                    <div class="ps-3">
                      <h6>45</h6>
                      <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Jam Pelajaran</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Siswa Card -->
            <!-- Guru Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Matematika <span>| X Nautika</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#tempat-1">
                        <i class="bi bi-people"></i>
                      </a>
                    </div>
                    <div class="ps-3">
                      <h6>64</h6>
                      <span class="text-success small pt-1 fw-bold">8</span> <span class="text-muted small pt-2 ps-1">Jam Pelajaran</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Guru Card -->
            <!-- Kelas Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Bahasa Inggris <span>| XII Teknika</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#tempat-1">
                        <i class="bi bi-people"></i>
                      </a>
                    </div>
                    <div class="ps-3">
                      <h6>2</h6>
                      <span class="text-success small pt-1 fw-bold">2</span> <span class="text-muted small pt-2 ps-1">Jam Pelajaran</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Kelas Card -->
            <!-- Mata Pelajaran Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Fisika <span>| XI Nautika</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#tempat-1">
                        <i class="bi bi-people"></i>
                      </a>
                    </div>
                    <div class="ps-3">
                      <h6>48</h6>
                      <span class="text-success small pt-1 fw-bold">8</span> <span class="text-muted small pt-2 ps-1">Jam Pelajaran</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Mata Pelajaran Card -->
          </div>
  
          
        </div>
    <!-- Modal Detil Mapel -->
    <div class="modal fade" id="tempat-1" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detil KBM</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
  
                <div class="card">
                    <div class="card-body">
                      <!-- Default Tabs -->
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pertemuan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Penugasan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="riwayatampu-tab" data-bs-toggle="tab" data-bs-target="#riwayatampu" type="button" role="tab" aria-controls="riwayatampu" aria-selected="false">Penilaian UTS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Penilaian UAS</button>
                        </li> 
                      </ul>
                      <div class="tab-content pt-2" id="myTabContent">
                        <!-- Tab3 untuk cadangan -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">                  
                          <h5 class="card-title">Penilaian Ujian Akhir Semester  <span>| Bahasa Indonesia XII Teknika</span></h5>
                          <!-- Table with stripped rows -->
                          <table class="table datatable table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Nilai</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>28</td>
                                  <td>Brandon Jacob</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>35</td>
                                  <td>Bridie Kessler</td>
                                  <td>Perempuan</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>45</td>
                                  <td>Ashleigh Langosh</td>
                                  <td>Perempuan</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>34</td>
                                  <td>Angus Grady</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>47</td>
                                  <td>Raheem Lehner</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                            <input type="number" class="form-control">
                                    </form>
                                  </td>
                                </tr>
                              </tbody>
                                  </table>
                          <!-- End Table with stripped rows -->
                          <button type="button" class="btn btn-primary" ><a href="KBM.html">Simpan</a></button>
                        </div>
                        <div class="tab-pane fade" id="riwayatampu" role="tabpanel" aria-labelledby="riwayatampu-tab">
                          <h5 class="card-title">Penilaian Ujian Tengah Semester <span>| Bahasa Indonesia XII Teknika</span></h5>
                              
                          <!-- Table with stripped rows -->
                          <table class="table datatable table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Nilai</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>28</td>
                                  <td>Brandon Jacob</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>35</td>
                                  <td>Bridie Kessler</td>
                                  <td>Perempuan</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>45</td>
                                  <td>Ashleigh Langosh</td>
                                  <td>Perempuan</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>34</td>
                                  <td>Angus Grady</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                        <input type="number" class="form-control">
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>47</td>
                                  <td>Raheem Lehner</td>
                                  <td>Laki-Laki</td>
                                  <td>
                                    <form>
                                            <input type="number" class="form-control">
                                    </form>
                                  </td>
                                </tr>
                              </tbody>
                                  </table>
                          <!-- End Table with stripped rows -->
                          <button type="button" class="btn btn-primary" ><a href="KBM.html">Simpan</a></button>
        
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <div class="card info-card sales-card">
                            <h5 class="card-title">Pemberian Tugas <span>| Bahasa Indonesia XII Teknika</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#tambahtugas">
                                        <i class="bi bi-plus-square"></i>
                                    </a>
                                </div>
                            </div>
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                  <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Tanggal</th>
                                      <th scope="col">Tugas</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>3 Agustus 2023</td>
                                      <td>Membuat Puisi</td>
                                      <td>
                                          <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#infotugas">
                                              <i class="bi bi-info-square"></i>
                                          </button>
                                          <button type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#nilaitugas">
                                              <i class="bi bi-pencil-square"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">2</th>
                                      <td>3 Agustus 2023</td>
                                      <td>Membuat Puisi</td>
                                      <td>
                                          <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#infotugas">
                                              <i class="bi bi-info-square"></i>
                                          </button>
                                          <button type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#nilaitugas">
                                              <i class="bi bi-pencil-square"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <th scope="row">3</th>
                                      <td>3 Agustus 2023</td>
                                      <td>Membuat Puisi</td>
                                      <td>
                                          <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#infotugas">
                                              <i class="bi bi-info-square"></i>
                                          </button>
                                          <button type="button" class="btn btn-success rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#nilaitugas">
                                              <i class="bi bi-pencil-square"></i>
                                          </button>
                                      </td>
                                  </tr>
                                  </tbody>
                              </table>
                              <!-- End Table with stripped rows -->
                      </div>                  
        
                        </div>
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Title Card -->
                          <h5 class="card-title">Pelaksanaan KBM <span>| Bahasa Indonesia XII Teknika</span></h5>
                              <!-- Table with stripped rows -->
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Materi</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>3 Agustus 2023</td>
                                    <td>Membuat Puisi</td>
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-people"></i>
                                        </button>            
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>4 Agustus 2023</td>
                                    <td>Membuat Puisi</td>
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-people"></i>
                                        </button>            
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>5 Agustus 2023</td>
                                    <td>Membuat Puisi</td>
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-people"></i>
                                        </button>            
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!-- End Table with stripped rows -->
            
                        </div>
                      </div>
                    </div><!-- End Title Card -->
        
                  </div>
        
                    </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div><!-- Akhir Modal Detil Mapel -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent KBM -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">KBM Hari Ini <span>| 3 Kelas</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">07:10</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    <a href="Pelaksanaan-KBM.html" class="fw-bold text-dark" >
                      Pendidikan Jasmani dan Olah Raga di kelas XII Teknika
                    </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">09:20</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <a href="Pelaksanaan-KBM.html" class="fw-bold text-dark">
                      Pendidikan Agama di kelas XI Teknika 
                    </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">13:30</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="Pelaksanaan-KBM.html" class="fw-bold text-dark">
                      Ilmu Pengetahuan Alam di kelas XII Nautika 
                    </a>
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent KBM -->
          <div class="modal fade" id="fullscreenModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Kegiatan Belajar Mengajar Saat Ini</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">            
                  <form class="row g-3">
                    <div class="col-md-8">
                      <div class="col-12">
                        <label for="inputNanme4" class="form-label">Nama Mata Pelajaran </label>
                        <input type="text" class="form-control" id="inputNanme4" value="Pendidikan Jasmani dan Olah Raga">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-12">
                        <label for="inputEmail4" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="inputEmail4" value="XII Teknika">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Mulai Pukul</label>
                        <input type="time" class="form-control" id="inputPassword4" value="07:10">
                      </div>    
                    </div>
                    <div class="col-md-4">
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Sampai Pukul</label>
                        <input type="time" class="form-control" id="inputPassword4" value="08:40">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-12">
                        <label for="inputPassword4" class="form-label">Jumlah Jam</label>
                        <input type="text" class="form-control" id="inputPassword4" value="2">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Materi</label>
                        <input type="text" class="form-control" id="inputAddress" value="">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="col-12">
                        <label for="inputAddress" class="form-label">Uraian Materi</label>
                        <input type="text" class="form-control" id="inputAddress" value="">
                      </div>
                    </div>
                  </form>    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal1">Simpan</button>
                </div>
              </div>
            </div>
          </div><!-- End Full Screen Modal-->
          <div class="modal fade" id="fullscreenModal1" tabindex="-1" data-bs-backdrop="false">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Presensi Siswa Kegiatan Belajar Mengajar Saat Ini</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Table with stripped rows -->
                  <table class="table datatable table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>28</td>
                        <td>Brandon Jacob</td>
                        <td>Laki-Laki</td>
                        <td>
                          <form>
                              <div class="row mb-3">
                                  <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Alfa</option>
                                      <option value="H">Hadir</option>
                                      <option value="S">Sakit</option>
                                      <option value="I">Izin</option>
                                      <option value="A">Alfa</option>
                                    </select>
                                  </div>
                                </div>              
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>35</td>
                        <td>Bridie Kessler</td>
                        <td>Perempuan</td>
                        <td>
                          <form>
                              <div class="row mb-3">
                                  <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Alfa</option>
                                      <option value="H">Hadir</option>
                                      <option value="S">Sakit</option>
                                      <option value="I">Izin</option>
                                      <option value="A">Alfa</option>
                                    </select>
                                  </div>
                                </div>              
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>45</td>
                        <td>Ashleigh Langosh</td>
                        <td>Perempuan</td>
                        <td>
                          <form>
                              <div class="row mb-3">
                                  <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Alfa</option>
                                      <option value="H">Hadir</option>
                                      <option value="S">Sakit</option>
                                      <option value="I">Izin</option>
                                      <option value="A">Alfa</option>
                                    </select>
                                  </div>
                                </div>              
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>34</td>
                        <td>Angus Grady</td>
                        <td>Laki-Laki</td>
                        <td>
                          <form>
                              <div class="row mb-3">
                                  <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Alfa</option>
                                      <option value="H">Hadir</option>
                                      <option value="S">Sakit</option>
                                      <option value="I">Izin</option>
                                      <option value="A">Alfa</option>
                                    </select>
                                  </div>
                                </div>              
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>47</td>
                        <td>Raheem Lehner</td>
                        <td>Laki-Laki</td>
                        <td>
                          <form>
                              <div class="row mb-3">
                                  <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Alfa</option>
                                      <option value="H">Hadir</option>
                                      <option value="S">Sakit</option>
                                      <option value="I">Izin</option>
                                      <option value="A">Alfa</option>
                                    </select>
                                  </div>
                                </div>              
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">Kembali</button>
                  <button type="button" class="btn btn-primary" ><a href="Profil.html">Simpan</a></button>
                </div>
              </div>
            </div>
          </div><!-- End Full Screen Modal-->

          <!-- Update Account -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kalender Akademik <span>| Ganjil</span></h5>
  
              <div class="activity">
  
                <div class="activity-item d-flex">
                  <div class="activite-label">3 Agt</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Ulang Tahun <a href="#" class="fw-bold text-dark">Papa</a> ke-40
                  </div>
                </div><!-- End activity item-->
  
                <div class="activity-item d-flex">
                  <div class="activite-label">17 Agt</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Ulang Tahun Mas Bagus
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">13 Okt</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Ulang Tahun Adek
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">9 Des</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Ulang Tahun <a href="#" class="fw-bold text-dark">Kakak</a> ke-19
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">6 jun</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Ulang Tahun Mama
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 Jan</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Tahun Baru
                  </div>
                </div><!-- End activity item-->

              </div>
  
            </div>
        </div>

      </div>
    </section>
           
                          <!-- Modal Tambah Dokumen -->
                          <div class="modal fade" id="verticalycentered1" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Melihat Detil KBM</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <div class="modal-body">
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                          <label for="inputEmail5" class="form-label">Tanggal</label>
                                          <input type="text" class="form-control" id="inputEmail5" placeholder="3 Agustus 2023" disabled>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputPassword5" class="form-label">Kelas</label>
                                          <input type="text" class="form-control" id="inputPassword5" placeholder="XII Teknika" disabled>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputEmail5" class="form-label">Mata Pelajaran</label>
                                          <input type="text" class="form-control" id="inputEmail5" placeholder="Bahasa Indonesia" disabled>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputPassword5" class="form-label">Materi</label>
                                          <input type="text" class="form-control" id="inputPassword5" placeholder="Materi Bahasa Indonesia" disabled>
                                        </div>
                                        <div class="col-md-12">
                                          <label for="inputName5" class="form-label">Uraian Materi</label>
                                          <input type="text" class="form-control" id="inputName5" placeholder="Uraian Materi Pembelajaran Bahasa Indonesia" disabled>
                                        </div>
                                      </form>
                                    </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tempat-1">OK</button>
                                  </div>
                              </div>
                            </div>
                          </div><!-- Akhir Modal Tambah Dokumen -->
                          <!-- Modal Ubah Profil -->
                          <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Melihat Kehadiran Siswa</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>28</td>
                                            <td>Brandon Jacob</td>
                                            <td>Laki-laki</td>
                                            <td>
                                                <form>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Hadir</option>
                                                            <option value="H">Hadir</option>
                                                            <option value="S">Sakit</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        </select>
                                                        </div>
                                                    </div>              
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>35</td>
                                            <td>Bridie Kessler</td>
                                            <td>Perempuan</td>
                                            <td>
                                                <form>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Hadir</option>
                                                            <option value="H">Hadir</option>
                                                            <option value="S">Sakit</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        </select>
                                                        </div>
                                                    </div>              
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>45</td>
                                            <td>Ashleigh Langosh</td>
                                            <td>Perempuan</td>
                                            <td>
                                                <form>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Hadir</option>
                                                            <option value="H">Hadir</option>
                                                            <option value="S">Sakit</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        </select>
                                                        </div>
                                                    </div>              
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>34</td>
                                            <td>Angus Grady</td>
                                            <td>Laki-laki</td>
                                            <td>
                                                <form>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Hadir</option>
                                                            <option value="H">Hadir</option>
                                                            <option value="S">Sakit</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        </select>
                                                        </div>
                                                    </div>              
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>47</td>
                                            <td>Raheem Lehner</td>
                                            <td>Laki-laki</td>
                                            <td>
                                                <form>
                                                    <div class="row mb-3">
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Hadir</option>
                                                            <option value="H">Hadir</option>
                                                            <option value="S">Sakit</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        </select>
                                                        </div>
                                                    </div>              
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tempat-1">BATAL</button>
                                  <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered2">Ubah</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Modal Ubah Profil -->
                          <!-- Modal Ubah Profil -->
                          <div class="modal fade" id="verticalycentered2" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Konfirmasi Mengubah Kehadiran Siswa</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Apakah yakin data profil yang anda ubah sudah benar?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#verticalycentered">BATAL</button>
                                  <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tempat-1">Ubah</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Modal Ubah Profil -->
                     <!-- Modal Tambah Dokumen -->
                    <div class="modal fade" id="tambahtugas" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Menambahkan Tugas Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form class="row g-3">
                            <div class="modal-body">
                              <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Nama Tugas">
                              </div>
                              <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Uraian Tugas">
                              </div>
                              <div class="col-md-12">
                                <label for="inputNumber" class="col-md-6">Unggah Dokumen Tugas</label>
                                <div class="col-md-12">
                                  <input class="form-control" type="file" id="formFile">
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tempat-1">BATAL</button>
                              <button type="submit" class="btn btn-primary"><a href="KBM.html">TAMBAHKAN</a></button>
                            </div>
                          </form><!-- End No Labels Form -->
                        </div>
                      </div>
                    </div><!-- Akhir Modal Tambah Dokumen -->
    <!-- Modal Detil Mapel -->
    <div class="modal fade" id="infotugas" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detil Tugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3">
              <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Tanggal Tugas</label>
                  <input type="text" class="form-control" id="inputPassword5" placeholder="3 Agustus 2023" disabled>
              </div>
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Mata Pelajaran</label>
                <input type="text" class="form-control" id="inputEmail5" placeholder="Bahasa Indonesia" disabled>
              </div>
              <div class="col-md-12">
                <label for="inputName5" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="inputName5" placeholder="Deskripsi Tugas Pelajaran Bahasa Indonesia" disabled>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tempat-1">OK</button>
          </div>
        </div>
      </div>
    </div><!-- Akhir Modal Detil Mapel -->
    <div class="modal fade" id="nilaitugas" tabindex="-1" data-bs-backdrop="false">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Penilaian Tugas (nama tugas)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Table with stripped rows -->
            <table class="table datatable table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIS</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>28</td>
                  <td>Brandon Jacob</td>
                  <td>Laki-Laki</td>
                  <td>
                    <form>
                        <input type="number" class="form-control">
                    </form>
                </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>35</td>
                  <td>Bridie Kessler</td>
                  <td>Perempuan</td>
                  <td>
                    <form>
                        <input type="number" class="form-control">
                    </form>
                </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>45</td>
                  <td>Ashleigh Langosh</td>
                  <td>Perempuan</td>
                  <td>
                    <form>
                        <input type="number" class="form-control">
                    </form>
                </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>34</td>
                  <td>Angus Grady</td>
                  <td>Laki-Laki</td>
                  <td>
                    <form>
                        <input type="number" class="form-control">
                    </form>
                </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>47</td>
                  <td>Raheem Lehner</td>
                  <td>Laki-Laki</td>
                  <td>
                    <form>
                            <input type="number" class="form-control">
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tempat-1">Kembali</button>
            <button type="button" class="btn btn-primary" ><a href="KBM.html">Simpan</a></button>
          </div>
        </div>
      </div>
    </div><!-- End Full Screen Modal-->
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