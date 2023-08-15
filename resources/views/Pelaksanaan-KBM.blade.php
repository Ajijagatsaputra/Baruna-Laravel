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

<!-- =================================== BAGIAN UTAMA/TENGAH =================================== -->
  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Title Card -->
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Kegiatan Belajar Mengajar Saat Ini</h5>
              </div>
                <div class="card-body">            
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
                <div class="card-body text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal1">Simpan</button>
                </div>
            </div><!-- End Title Card -->

          </div>
  
        </div>
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
                <button type="button" class="btn btn-primary" ><a href="KBM">Simpan</a></button>
              </div>
            </div>
          </div>
        </div><!-- End Full Screen Modal-->
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