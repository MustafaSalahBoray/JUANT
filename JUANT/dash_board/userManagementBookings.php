<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
  
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
    <title>Management Requests - JuantHost</title>
  
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
  
    <link href="assets/css/booking.css" rel="stylesheet">
    <link href="assets/css/AddAdvertisment.css" rel="stylesheet">



  
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
        <a class="nav-link collapsed" href="index.php">
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
        <a class="nav-link" href="chooseSearchBookingWay.php">
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
            <h1>Management Requests</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="chooseSearchBookingWay.php">Manage Requests Ways</a></li>
                    <li class="breadcrumb-item active">Management Requsets</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section places">
            <div class="row">
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body pt-3">

                                    <div class="back-bar text-center mb-4">
                                        <a href="chooseSearchBookingWay.php"><i class="bi bi-arrow-left-circle-fill"></i>                   
                                        </a>
                                    </div><!-- End Search Bar -->

                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Requests</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-edit">Up Coming</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">On Going</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">History</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <div class="card">
                                                <div class="pt-3">    
                                                    <div class="">
                                                        <div class="search-bar">
                                                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                                                <input type="text" name="query" placeholder="Search for User" title="Enter search keyword" id="search-input">
                                                                <button type="submit" title="Search" id="search"><i class="bi bi-search"></i></button>
                                                            </form>
                                                        </div><!-- End Search Bar -->
    
    
                                                        <div class="filter d-flex">
                                                            
                                                            <div class="form-group justify-content-end">
                                                                <select class="form-control" id="sel1">
                                                                  <option>All Months</option>
                                                                  <option>Jan</option>
                                                                  <option>Feb</option>
                                                                  <option>Mar</option>
                                                                  <option>Apr</option>
                                                                  <option>May</option>
                                                                  <option>Jun</option>
                                                                  <option>Jul</option>
                                                                  <option>Aug</option>
                                                                  <option>Sep</option>
                                                                  <option>Oct</option>
                                                                  <option>Nov</option>
                                                                  <option>Dec</option>
                                                                </select>
                                                              </div>
                                                            
                                                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                <li><a class="dropdown-item active" href="#">All</a></li>
                                                                <li><a class="dropdown-item" href="#">Requseted</a></li>
                                                                <li><a class="dropdown-item" href="#">Canceld</a></li>
                                                                <li><a class="dropdown-item" href="#">Confirmed</a></li>
                                                                <li><a class="dropdown-item" href="#">Completed</a></li>
                                                                <li><a class="dropdown-item" href="#">Completed</a></li>
                                                                <li><a class="dropdown-item" href="#">High Payed</a></li>
                                                                <li><a class="dropdown-item" href="#">Low Payed</a></li>      
                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <div class="tab-content">
                                                        <!-- Left side columns -->

                                                        <div class="col-lg-12">
                                                            <div class="row">

                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                                <!-- place Card -->
                                                                <div class="col-xxl4 col-md-4 my-4">
                                                                    <div class="card info-card sales-card">                                             
                                                                        <div class="news">
                                                                            <div class="post-item">
                                                                                <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="">
                                                                                <h4>Request from Yasser</h4>
                                                                                <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
                                                                                <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
                                                                                <p class="pe-2"><i class="bi bi-clock pe-1"></i>8:30</p>                  
                                                                                <p class="pe-2"><i class="bi bi-cash pe-1"></i>$170</p>
                                                                                <p class="pe-2"><span class="badge bg-info">Request</span> </p>      
      
             
            
                                                                                <p class="info"><a href="#">See request Information <i class="bi bi-caret-right-fill"></i></a></p>
                                                                                <div class="ms-3">
                                                                                    <button class="btn p-2 p-lg-3 btn-primary me-auto ms-3 ">APPROVE</button>
                                                                                    <button class="button2 btn p-2 p-lg-3 btn-primary main-btn ms-2">DECLINE</button>
                                                                                </div>

                                                                            </div>
                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End place Card -->
                                                            </div>
                                                        </div>
                                                        <!-- End Left side columns -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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