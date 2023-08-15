<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mata Pelajaran</title>
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
        <a class="nav-link collapsed" href="Siswa">
          <i class="bi bi-people"></i>
          <span>Siswa</span>
        </a>
      </li><!-- End Siswa Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Guru.html">
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
        <a class="nav-link" href="Mata-Pelajaran">
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
      <h1>Mata Pelajaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
          <li class="breadcrumb-item active">Mata Pelajaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">                
          <div class="row">
            <!-- BAGIAN HEADER TABEL -->
            <div class="card info-card customers-card">
              <div class="filter" data-bs-toggle="tooltip" data-bs-placement="left" title="Semester">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Semester</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Ganjil 2023/2024</a></li>
                  <li><a class="dropdown-item" href="#">Genap 2023/2024</a></li>
                  <li><a class="dropdown-item" href="#">Ganjil 2022/2023</a></li>
                  <li><a class="dropdown-item" href="#">Genap 2022/2023</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Total 145 Mata Pelajaran <span>| Ganjil 2023/2024</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" title="Menetapkan Mata Pelajaran Tahun Akademik saat ini">
                      <a class="nav-link collapsed" href="Tetapkan-Mapel.html">
                        <i class="bi bi-journal-plus"></i>
                      </a>
                  </div>
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="Right" title="Menetapkan Guru Pengampu Mata Pelajaran Tahun Akademik saat ini">
                    <a class="nav-link collapsed" href="Ampu-Mapel">
                      <i class="bi bi-person-plus-fill"></i>
                    </a>
                  </div>
                </div>
              </div><!-- AKHIR BAGIAN HEADER TABEL -->
              <!-- Table with stripped rows -->
              <table class="table datatable table-striped">
                <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kode</th>
                      <th scope="col">Mata Pelajaran</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>                        
                  <tr>
                    <th scope="row">1</th>
                    <td>MTKN3</td>
                    <td>Matematika</td>
                    <td>Adaptif</td>                                  
                    <td>
                      <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                        <i class="bi bi-info-square"></i>
                      </button>
                      <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-people-fill"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>BINN3</td>
                    <td>Bahasa Indonesia</td>
                    <td>Adaptif</td>                                  
                    <td>
                      <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                        <i class="bi bi-info-square"></i>
                      </button>
                      <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-people-fill"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>BIGN2</td>
                    <td>Bahasa Inggris</td>
                    <td>Adaptif</td>
                    <td>
                      <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                        <i class="bi bi-info-square"></i>
                      </button>
                      <button type="button" class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-people-fill"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table><!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
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
                    <a href="Pelaksanaan-KBM" class="fw-bold text-dark">
                      Pendidikan Jasmani dan Olah Raga di kelas XII Teknika
                    </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">09:20</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    <a href="Pelaksanaan-KBM" class="fw-bold text-dark">
                      Pendidikan Agama di kelas XI Teknika 
                    </a>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">13:30</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    <a href="Pelaksanaan-KBM" class="fw-bold text-dark">
                      Ilmu Pengetahuan Alam di kelas XII Nautika 
                    </a>
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent KBM -->
          <div class="card">
            <div class="filter" data-bs-toggle="tooltip" data-bs-placement="left" title="Filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
  
                <li><a class="dropdown-item" href="#">Ganjil</a></li>
                <li><a class="dropdown-item" href="#">Genap</a></li>
              </ul>
            </div>
  
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
          </div><!-- End Recent Activity -->
          
        </div><!-- Akhir col-lg-4 -->
      </div>
    </section>
    <!-- Modal Detil Mapel -->
    <div class="modal fade" id="verticalycentered1" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Detil Mata Pelajaran Matematika</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Mata Pelajaran</label>
                <input type="text" class="form-control" id="inputEmail5" placeholder="Matematika" disabled>
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="inputPassword5" placeholder="Adaptif" disabled>
              </div>
              <div class="col-md-12">
                <label for="inputName5" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="inputName5" placeholder="Deskripsi Pelajaran Matematika" disabled>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div><!-- Akhir Modal Detil Mapel -->
    <!-- Modal Guru Pengampu -->
    <div class="modal fade" id="verticalycentered" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Guru Pengampu Mata Pelajaran Matematika</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- List group with custom content -->
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"><a href="Profil-Guru">Subhandi</a></div>
                  <a href="Detil-Kelas.html">XII Teknika</a> 
                </div>
                <span class="badge bg-primary rounded-pill">4 Jam</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"><a href="Profil-Guru">Subhandi</a></div>
                  <a href="Detil-Kelas.html">XI Teknika</a> 
                </div>
                <span class="badge bg-primary rounded-pill">4 Jam</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold"><a href="Profil-Guru">Subhandi</a></div>
                  <a href="Detil-Kelas.html">X Teknika</a> 
                </div>
                <span class="badge bg-primary rounded-pill">4 Jam</span>
              </li>
            </ol><!-- End with custom content -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div><!-- End Modal Guru Pengampu -->

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