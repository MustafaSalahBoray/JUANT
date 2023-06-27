<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Make Advertisment - JuantHost</title>
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
        <a class="nav-link" href="Advertisments.php">
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
      <h1>Make Advertisements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Advertisments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section places">
      <div class="row">

        





        <section class="section profile">
          <div class="row">
    
            <div class="col-lg-8">
    
              <div class="card mb-3">
                <div class="card-body pt-3">
                  
                  
                  <div class="search-bar">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                      <input type="text" name="query" placeholder="Search By Governorate" title="Enter search keyword" id="search-input">
                      <button type="submit" title="Search" id="search"><i class="bi bi-search"></i></button>
                    </form>
                  </div><!-- End Search Bar -->

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-funnel"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li><a class="dropdown-item active" href="#">All</a></li>
                      <li><a class="dropdown-item" href="#">Zamalek</a></li>
                      <li><a class="dropdown-item" href="#">Giza</a></li>
                      <li><a class="dropdown-item" href="#">6th October</a></li>
                      <li><a class="dropdown-item" href="#">Nasr City</a></li>
                    </ul>
                  </div>


                  <div class="tab-content pt-2">

        <!-- Left side columns -->
        
        <div class="col-lg-12">
          <div class="row">

            <div class="add-places">
              <div class="card-body text-center">
                <h5 class="card-title">Make Advertisement By Easier Way</h5>
                <p>Just Choose Branch and make for it advertisment and reach more and more customers</p>
  

              </div>
            </div>


            
           
        

            <!-- place Card -->
            <?php 
                  require'../signUpPage/dp.php';
                  $select=$db->prepare("SELECT * FROM place");
                  $select->execute();
                  foreach ($select as $key) {
                   
                        echo '  <div class="col-xxl-6 col-md-6 my-4">
              <div class="card info-card sales-card">
            
                <div class="filter">
                  <a class="icon" href="placeDestailAd.php">See Details</a>
                </div>
            
                <div class="card-body pt-5">
            
                  
                  <div class="card-icon d-flex">
                    <img src="../img_place/'. $key['images'].'" alt="">
                  <div>
                    <h5 class="card-title"><i class="bi bi-geo-alt"></i>'.$key['Governorate'].'</h5>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <div class="">
                    <a href="adPricing.php" class="button2 btn-primary btn-lg" title="">CHOOSE</a>
                  </div>
                </div>
            
           
            </div>
         
            </div> 
              </div>';
       }
            ?>
           
            
            <!-- End place Card -->

            
          

            <!-- End place Card -->

          </div>
        </div><!-- End Left side columns -->     
        

      </div>
    </div>
  </div>
</div>

               
<!-- Right side columns -->

<div class="col-lg-4">




  
  <!-- booking Traffic -->
  
  <div class="card">
    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-funnel"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>
        <li><a class="dropdown-item active" href="#">All</a></li>
        <li><a class="dropdown-item" href="#">Active</a></li>
        <li><a class="dropdown-item" href="#">Pending</a></li>
        <li><a class="dropdown-item" href="#">Rejected</a></li>
      </ul>
    </div>
    <div class="card-body pb-0">
      <h5 class="card-title pb-4">Advertisements</h5>
      <div class="news">
        <div class="post-item clearfix">
          <img src="assets/img/product-1 1.svg" alt="">

          <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
          <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
          <p><i class="bi bi-calendar3 pe-1"></i>12/6/2023</p>
          <span class="badge bg-success">Active</span>

          <p class="pt-2"><a href="#">See Ad Destails<i class="bi bi-caret-right-fill"></i></a></p>
        </div>
        <div class="post-item clearfix">
          <img src="assets/img/product-1 1.svg" alt="">
          <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
          <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
          <p><i class="bi bi-calendar3 pe-1"></i>12/6/2023</p>
          <span class="badge bg-warning">Pending</span>

          <p class="pt-2"><a href="#">See Ad Destails<i class="bi bi-caret-right-fill"></i></a></p>
        </div>
        <div class="post-item clearfix">
          <img src="assets/img/product-1 1.svg" alt="">
          <p><i class="bi bi-geo-alt pe-1"></i>Giza, Zamalek</p>
          <p><i class="bi bi-calendar-event pe-1"></i>12/5/2023</p>
          <p><i class="bi bi-calendar3 pe-1"></i>12/6/2023</p>
          <span class="badge bg-danger">Rejected</span>
          <p class="pt-2"><a href="#">See Ad Destails<i class="bi bi-caret-right-fill"></i></a></p>
        </div>
      </div><!-- End sidebar recent posts-->
    </div>
  </div><!-- End News & Updates -->
</div><!-- End Right side columns -->
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































































































