<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mata Pelajaran-Ampu Mapel</title>
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
          <li class="breadcrumb-item"><a href="Dashboard.html">Home</a></li>
          <li class="breadcrumb-item"><a href="Mata-Pelajaran.html">Mata Pelajaran</a></li>
          <li class="breadcrumb-item active">Mengampu Mata Pelajaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">                
                <div class="row">
                    <!-- BAGIAN HEADER TABEL -->
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Total 145 Mata Pelajaran <span>| Ganjil 2023/2024</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menetapkan Pengampu Pelajaran pada Semester ini">
                                    <button type="button" class="nav-link collapsed" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                        <i class="bi bi-person-plus-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div><!-- AKHIR BAGIAN HEADER TABEL -->
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
                        <!-- Modal Menetapkan Mapel -->
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Menetapkan Pengampu Mata Pelajaran pada Semester Ini</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>              
                              <div class="modal-body">
                                <form class="row g-3">
                                  <div class="col-md-3">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                      <option selected>Pilih Mata Pelajaran</option>
                                      <option value="1">Pendidikan Agama</option>
                                      <option value="2">Matematika</option>
                                      <option value="3">Bahasa Indonesia</option>
                                      <option value="4">Bahasa Inggris</option>
                                      <option value="5">Fisika</option>
                                      <option value="6">Kimia</option>
                                      <option value="7">IPA</option>
                                      <option value="8">PKn</option>
                                      <option value="9">IPS</option>
                                      <option value="10">Kewirausahaan</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                      <option selected>Pilih Guru Pengampu</option>
                                      <option value="1">Tubagus Faisal Bahri1</option>
                                      <option value="2">Tubagus Faisal Bahri2</option>
                                      <option value="3">Tubagus Faisal Bahri3</option>
                                      <option value="4">Tubagus Faisal Bahri4</option>
                                      <option value="5">Tubagus Faisal Bahri5</option>
                                      <option value="6">Tubagus Faisal Bahri6</option>
                                      <option value="7">Tubagus Faisal Bahri7</option>
                                      <option value="8">Tubagus Faisal Bahri8</option>
                                      <option value="9">Tubagus Faisal Bahri9</option>
                                      <option value="10">Tubagus Faisal Bahri10</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                      <option selected>Pilih Kelas</option>
                                      <option value="1">X Teknika</option>
                                      <option value="2">XI Teknika</option>
                                      <option value="3">XII Teknika</option>
                                      <option value="4">X Nautika</option>
                                      <option value="5">XI Nautika</option>
                                      <option value="6">XII Nautika</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                      <option selected>Pilih Jumlah Jam</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                    </select>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary"><a href="Ampu-Mapel.html">TETAPKAN</a></button>
                              </div>
                            </div>
                          </div>
                        </div><!-- Akhir Modal Menetapkan Mapel -->
                        <!-- Vertically centered Modal-->
                        <div class="modal fade" id="verticalycentered12" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Menbatalkan Pangampu Mata Pelajaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah yakin Pengampu Mata Pelajaran Matematika akan dibatalkan?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-danger"><a href="Ampu-Mapel.html">IYA</a></button>
                              </div>
                            </div>
                          </div>
                        </div><!-- End Vertically centered Modal-->
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Ampu</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Guru Pengampu</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jumlah Jam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                            <tbody>                        
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MTKN3</td>
                                    <td>Matematika</td>
                                    <td>Tubagus Faisal Bahri</td>
                                    <td>X Teknika</td>   
                                    <td>2</td>                                     
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered12">
                                            <i class="bi bi-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>BINN3</td>
                                    <td>Bahasa Indonesia</td>
                                    <td>Tubagus Faisal Bahri</td>
                                    <td>X Teknika</td>   
                                    <td>2</td>                                     
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered12">
                                            <i class="bi bi-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>BIGN2</td>
                                    <td>Bahasa Inggris</td>
                                    <td>Tubagus Faisal Bahri</td>
                                    <td>X Teknika</td>   
                                    <td>2</td>                                     
                                    <td>
                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                                            <i class="bi bi-info-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered12">
                                            <i class="bi bi-eraser"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table><!-- End Table with stripped rows -->
                    </div>
                </div>
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