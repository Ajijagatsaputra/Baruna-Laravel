<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jadwal Pelajaran</title>
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
        <a class="nav-link collapsed" href="Mata-Pelajaran">
          <i class="bi bi-journals"></i>
          <span>Mata Pelajaran</span>
        </a>
      </li><!-- End Mata Pelajaran Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="Jadwal-Pelajaran">
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
      <h1>Jadwal Pelajaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Jadwal Pelajaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- BAGIAN HEADER TABEL -->
            <div class="card info-card sales-card">
              <div class="filter" data-bs-toggle="tooltip" data-bs-placement="left" title="Pilih Hari">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Hari</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Senin</a></li>
                  <li><a class="dropdown-item" href="#">Selasa</a></li>
                  <li><a class="dropdown-item" href="#">Rabu</a></li>
                  <li><a class="dropdown-item" href="#">Kamis</a></li>
                  <li><a class="dropdown-item" href="#">Jumat</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title badge border-danger border-1 text-secondary">Jadwal Pelajaran <span>| Ganjil 2023/2024</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit Jadwal Pelajaran">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="modal" data-bs-target="#editjadwalpelajaran">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </div>
                  </div>
                <!-- Table with stripped rows -->
                <table class="table table-striped table-bordered border-primary text-center">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Jam Ke</th>
                      <th scope="col">X Teknika</th>
                      <th scope="col">X Nautika</th>
                      <th scope="col">XI Teknika</th>
                      <th scope="col">XI Nautika</th>
                      <th scope="col">XII Teknika</th>
                      <th scope="col">XII Nautika</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> 
                        <th scope="row">1</th>
                        <td>Senin</td>
                        <td>1</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>                  
                    <tr> 
                        <th scope="row">2</th>
                        <td>Senin</td>
                        <td>2</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">3</th>
                        <td>Senin</td>
                        <td>3</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">4</th>
                        <td>Senin</td>
                        <td>4</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">5</th>
                        <td>Senin</td>
                        <td>5</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">6</th>
                        <td>Senin</td>
                        <td>6</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">7</th>
                        <td>Senin</td>
                        <td>7</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">8</th>
                        <td>Senin</td>
                        <td>8</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">9</th>
                        <td>Senin</td>
                        <td>9</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">10</th>
                        <td>Senin</td>
                        <td>10</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">11</th>
                        <td>Selasa</td>
                        <td>1</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>                  
                    <tr> 
                        <th scope="row">12</th>
                        <td>Selasa</td>
                        <td>2</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">13</th>
                        <td>Selasa</td>
                        <td>3</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">14</th>
                        <td>Selasa</td>
                        <td>4</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">15</th>
                        <td>Selasa</td>
                        <td>5</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">16</th>
                        <td>Selasa</td>
                        <td>6</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">17</th>
                        <td>Selasa</td>
                        <td>7</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">18</th>
                        <td>Selasa</td>
                        <td>8</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">19</th>
                        <td>Selasa</td>
                        <td>9</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">20</th>
                        <td>Selasa</td>
                        <td>10</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">21</th>
                        <td>Rabu</td>
                        <td>1</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>                  
                    <tr> 
                        <th scope="row">22</th>
                        <td>Rabu</td>
                        <td>2</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">23</th>
                        <td>Rabu</td>
                        <td>3</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">24</th>
                        <td>Rabu</td>
                        <td>4</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">25</th>
                        <td>Rabu</td>
                        <td>5</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">26</th>
                        <td>Rabu</td>
                        <td>6</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">27</th>
                        <td>Rabu</td>
                        <td>7</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">28</th>
                        <td>Rabu</td>
                        <td>8</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">29</th>
                        <td>Rabu</td>
                        <td>9</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">30</th>
                        <td>Rabu</td>
                        <td>10</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">31</th>
                        <td>Kamis</td>
                        <td>1</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>                  
                    <tr> 
                        <th scope="row">32</th>
                        <td>Kamis</td>
                        <td>2</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">33</th>
                        <td>Kamis</td>
                        <td>3</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">34</th>
                        <td>Kamis</td>
                        <td>4</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">35</th>
                        <td>Kamis</td>
                        <td>5</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">36</th>
                        <td>Kamis</td>
                        <td>6</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">37</th>
                        <td>Kamis</td>
                        <td>7</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">38</th>
                        <td>Kamis</td>
                        <td>8</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">39</th>
                        <td>Kamis</td>
                        <td>9</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">40</th>
                        <td>Kamis</td>
                        <td>10</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">41</th>
                        <td>Jumat</td>
                        <td>1</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>                  
                    <tr> 
                        <th scope="row">42</th>
                        <td>Jumat</td>
                        <td>2</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">43</th>
                        <td>Jumat</td>
                        <td>3</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">44</th>
                        <td>Jumat</td>
                        <td>4</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">45</th>
                        <td>Jumat</td>
                        <td>5</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">46</th>
                        <td>Jumat</td>
                        <td>6</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">47</th>
                        <td>Jumat</td>
                        <td>7</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                      <tr> 
                        <th scope="row">48</th>
                        <td>Jumat</td>
                        <td>8</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      </tr>                  
                    </tbody>
                </table><!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="editjadwalpelajaran" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Jadwal Pelajaran <span>| Ganjil 2023/2024</span></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Table with stripped rows -->
                <table class="table table-striped table-bordered border-primary text-center">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam Ke</th>
                        <th scope="col">X Teknika</th>
                        <th scope="col">X Nautika</th>
                        <th scope="col">XI Teknika</th>
                        <th scope="col">XI Nautika</th>
                        <th scope="col">XII Teknika</th>
                        <th scope="col">XII Nautika</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <th scope="row">1</th>
                            <td>Senin</td>
                            <td>1</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                        </tr>                  
                        <tr> 
                            <th scope="row">2</th>
                            <td>Senin</td>
                            <td>2</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">3</th>
                            <td>Senin</td>
                            <td>3</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">4</th>
                            <td>Senin</td>
                            <td>4</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">5</th>
                            <td>Senin</td>
                            <td>5</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">6</th>
                            <td>Senin</td>
                            <td>6</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">7</th>
                            <td>Senin</td>
                            <td>7</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">8</th>
                            <td>Senin</td>
                            <td>8</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">9</th>
                            <td>Senin</td>
                            <td>9</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">10</th>
                            <td>Senin</td>
                            <td>10</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">11</th>
                            <td>Selasa</td>
                            <td>1</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                        </tr>                  
                        <tr> 
                            <th scope="row">12</th>
                            <td>Selasa</td>
                            <td>2</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">13</th>
                            <td>Selasa</td>
                            <td>3</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">14</th>
                            <td>Selasa</td>
                            <td>4</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">15</th>
                            <td>Selasa</td>
                            <td>5</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">16</th>
                            <td>Selasa</td>
                            <td>6</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">17</th>
                            <td>Selasa</td>
                            <td>7</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">18</th>
                            <td>Selasa</td>
                            <td>8</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">19</th>
                            <td>Selasa</td>
                            <td>9</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">20</th>
                            <td>Selasa</td>
                            <td>10</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">21</th>
                            <td>Rabu</td>
                            <td>1</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                        </tr>                  
                        <tr> 
                            <th scope="row">22</th>
                            <td>Rabu</td>
                            <td>2</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">23</th>
                            <td>Rabu</td>
                            <td>3</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">24</th>
                            <td>Rabu</td>
                            <td>4</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">25</th>
                            <td>Rabu</td>
                            <td>5</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">26</th>
                            <td>Rabu</td>
                            <td>6</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">27</th>
                            <td>Rabu</td>
                            <td>7</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">28</th>
                            <td>Rabu</td>
                            <td>8</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">29</th>
                            <td>Rabu</td>
                            <td>9</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">30</th>
                            <td>Rabu</td>
                            <td>10</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">31</th>
                            <td>Kamis</td>
                            <td>1</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                        </tr>                  
                        <tr> 
                            <th scope="row">32</th>
                            <td>Kamis</td>
                            <td>2</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">33</th>
                            <td>Kamis</td>
                            <td>3</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">34</th>
                            <td>Kamis</td>
                            <td>4</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">35</th>
                            <td>Kamis</td>
                            <td>5</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">36</th>
                            <td>Kamis</td>
                            <td>6</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">37</th>
                            <td>Kamis</td>
                            <td>7</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">38</th>
                            <td>Kamis</td>
                            <td>8</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">39</th>
                            <td>Kamis</td>
                            <td>9</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">40</th>
                            <td>Kamis</td>
                            <td>10</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">41</th>
                            <td>Jumat</td>
                            <td>1</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                        </tr>                  
                        <tr> 
                            <th scope="row">42</th>
                            <td>Jumat</td>
                            <td>2</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">43</th>
                            <td>Jumat</td>
                            <td>3</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">44</th>
                            <td>Jumat</td>
                            <td>4</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">45</th>
                            <td>Jumat</td>
                            <td>5</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">46</th>
                            <td>Jumat</td>
                            <td>6</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">47</th>
                            <td>Jumat</td>
                            <td>7</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                          <tr> 
                            <th scope="row">48</th>
                            <td>Jumat</td>
                            <td>8</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                            <td><select class="form-select" aria-label="Default select example"><option selected>abc</option><option value="1">papa</option><op</td>
                          </tr>                  
                        </tbody>
                  </table><!-- End Table with stripped rows -->
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
            </div>
          </div>
        </div>
      </div><!-- End Extra Large Modal-->

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