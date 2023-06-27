<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - JuantHost</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
    require ('components/header.php');
  ?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->






      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="chooseSearchBookingWay.php">
          <i class="bi bi-ticket"></i>
          <span>Bookings</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Places.php">
          <i class="bi bi-building"></i>
          <span>Places</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Advertisments.php">
          <i class="bi bi-badge-ad"></i>
          <span>Advertisements</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-telephone"></i>
          <span>Contact Us</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-box-arrow-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">





            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Places</h5>
                  <div class="filter">
                    <a class="icon" href="Places.php">See All</a>
                </div>

                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th scope="col">Picture</th>
                        <th scope="col">Governorate</th>
                        <th scope="col">Area</th>
                        <th scope="col">Pay Way</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Min Budget</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                               <?php 
                               require '../signUpPage/dp.php';
                               $Show=$db->prepare("SELECT * FROM  place");
                               $Show->execute();
                               foreach ($Show as $key ) {
                                 // code...
                               


                        ?>
                        <th scope="row"><a href="#"><img src="../img_place/<?php echo $key['images'];?>" alt=""></a></th>
                        <td><?php echo $key['Governorate']; ?></td>
                        <td class="fw-bold"><?php echo $key['area']; ?></td>
                        <td class="fw-bold"><?php echo $key['types']; ?></td>
                          <td class="fw-bold"><?php echo $key['capacity']; ?></td>
                        <td class="fw-bold"><?php echo $key['minBudget']; ?></td>

                      </tr>
                     
                    <?php }?>
                     
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
            
            
            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6 my-4 text-center">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body my-4 pb-1 text-center">
                  <h5 class="card-title">Currently Requests <span>| Today</span></h5>

                  <div class="d-flex justify-content-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-ticket-perforated"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6 my-4 text-center">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body my-4 pb-1 text-center">
                  <h5 class="card-title">Done Requests <span>| Today</span></h5>

                  <div class="d-flex justify-content-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">



          <!-- booking Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item active" href="#">All</a></li>
                <li><a class="dropdown-item" href="#">Requests</a></li>
                <li><a class="dropdown-item" href="#">Active</a></li>
                <li><a class="dropdown-item" href="#">Pending</a></li>
                <li><a class="dropdown-item" href="#">Rejected</a></li>

              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Request Booking</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/product-1 1.svg" alt="">
                  <h4>Request from Yasser</h4>
                  <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                  <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                  <p class="pe-2"><span class="badge bg-info">Requseted</span></p>                  
                  <p><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                  <a href="../sign_in_page/sign_in.php" class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</a>
                  <a href="../sign_in_page/sign_in.php" class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-5">DECLINE</a>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/product-1 1.svg" alt="">
                  <h4>Request from Yasser</h4>
                  <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                  <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                  <p class="pe-2"><span class="badge bg-info">Requseted</span></p>                  
                  <p><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                  <a href="../sign_in_page/sign_in.php" class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</a>
                  <a href="../sign_in_page/sign_in.php" class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-5">DECLINE</a>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/product-1 1.svg" alt="">
                  <h4>Request from Yasser</h4>
                  <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                  <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                  <p class="pe-2"><span class="badge bg-warning">Pending</span></p>                  
                  <p><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                  <a href="../sign_in_page/sign_in.php" class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</a>
                  <a href="../sign_in_page/sign_in.php" class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-5">DECLINE</a>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Juant</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="">Juant</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>