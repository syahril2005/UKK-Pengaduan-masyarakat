<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ujikom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="data:image/jpeg;base64,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" alt="">
        <span class="d-none d-lg-block">Ngadu Mas</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        {{-- <li class="nav-item dropdown">

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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('') }}assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('') }}assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('') }}assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav --> --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('') }}assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::guard('admin')->user()->nama_petugas }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::guard('admin')->user()->username }}</h6>
              <span>{{ Auth::guard('admin')->user()->telp }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.logout') }}">
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
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav --> --}}

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('tanggapan') }}">
          <i class="bi bi-person"></i>
          <span>Tanggapan & Pengaduan</span>
        </a>
      </li><!-- End Profile Page Nav -->

      @if (Auth::guard('admin')->user()->level == 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('petugas') }}">
          <i class="bi bi-person"></i>
          <span>Petugas</span>
        </a>
      </li><!-- End Profile Page Nav -->
      @endif
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->

  @yield('content')

  <!-- ======= Footer ======= -->
  {{-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>