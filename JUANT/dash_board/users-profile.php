<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - JuantHost</title>
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
  <link href="assets/css/profileStyle.css" rel="stylesheet">
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
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title text-center">Profile Details</h5>



                  <div class="card-profile text-center">
                    <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
        
                      <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="Profile">
                      <h2>Yasser Farghal</h2>
                      <h3>Owner Of SomeWhere</h3>
                    </div>
                  </div>



                  <div class="row d-flex text-center">
                    <div class="col-lg-12 col-md-4 label ">First Name: <span>Yasser</span></div>
                  </div>

                  <div class="row text-center">
                    <div class="col-lg-12 col-md-4 label ">last Name: <span>Farghal</span></div>
                  </div>

                  <div class="row text-center">
                    <div class="col-lg-12 col-md-4 label ">Company: <span>SomeWhere</span></div>
                  </div>

                  <div class="row text-center">
                    <div class="col-lg-12 col-md-4 label ">Phone: <span>01553355555</span></div>
                  </div>

                  <div class="row text-center">
                    <div class="col-lg-12 col-md-4 label ">Email: <span>Example@mail.com</span></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">




                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title text-center">Profile Image</h5>
      
      
      
                        <div class="card-profile text-center">
                          <div class="card-body profile-card pt-2 d-flex flex-column align-items-center">
                            <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="Profile" >    
                        <div class="pt-3 mb-3">
                          <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><i class="bi bi-upload me-2"></i>UPLOAD</a>
                          <a href="#" class="button2 mt-4 btn-primary btn-sm" title="Remove my profile image"><i class="bi bi-trash me-2"></i>DELETE</a>
                        </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-2 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Yasser">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-2 col-form-label">last Name</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Farghal">
                      </div>
                    </div>

                    

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-2 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="company" type="text" class="form-control" id="company" value="Somewhere">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-2 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="address" type="text" class="form-control" id="Phone" value="01553355555">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-2 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="email" type="email" class="form-control" id="Email" value="example@mail.com">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
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
      Designed by <a href="https://bootstrapmade.com/">Juant</a>
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