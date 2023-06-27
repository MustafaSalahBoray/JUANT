<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Places - JuantHost</title>
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
  <link href="assets/css/editPlace.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/Juant.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

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
            <span class="badge bg-danger badge-number">4</span>
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
            <img src="assets/img/A5C9D517-C24E-42BA-9793-914488CDDC05.jpeg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Yasser Farghal</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Yasser Farghal</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-left"></i>
                <span>Log Out</span>
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
        <a class="nav-link" href="Places.php">
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
      <h1>Management Places</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="Places.php">Place</a></li>
          <li class="breadcrumb-item active">Edit Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section places">
      <div class="row">

        





        <section class="section edit-profile">
          <div class="row">
    
            <div class="col-xl-12">
    
              <div class="card">
                <div class="card-body pt-3">
                  
                  
                  <div class="back-bar text-center">
                    <a href="Places.php"><i class="bi bi-arrow-left-circle-fill"></i>                   
                    </a>
                  </div><!-- End Search Bar -->

                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit SomeWhere Details</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#services-change">Services</button>
                      </li>

                      <li class="nav-item">
                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#reception-hours-change">Reception Hours</button>
                      </li>

                      <li class="nav-item">
                        <button class="nav-link collapsed" data-bs-toggle="tab" data-bs-target="#Menu-change">Pricing list</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-edit" id="profile-edit">
      
                        <form>
                          <div class="row mb-3">
      
                             <?php 
                                       require '../signUpPage/dp.php';
                                       if (isset($_GET['Edite'])) {
                                         $get=$db->prepare(" SELECT * FROM place WHERE id=:ID");
                                         $get->bindparam("ID",$_GET['Edite']);
                                         $get->execute();
                                         foreach ($get as $key ) {
                                           // code...
                                         


                                  ?>
      
      
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <h5 class="card-title text-center">Edit SomeWhere</h5>
            
            
            
                              <div class="card-profile text-center">
                                <form action="" method="post" enctype="multipart/form-data" id="form-upload">
                                  <label class="col-md-4 col-lg-2 col-form-label" for="">Choose Images</label>

                                  <div class="img-thumbs img-thumbs" id="img-preview">
                                    <img src="../img_place/<?php echo $key['images']?>" alt="">

                                  </div>
                                  <div class="form-group">
                                    <input type="file" class="form-control col-md-8 col-lg-10" name="images" multiple id="upload-img" />
                                  </div>

                                  </button>
                                </form>
                              </div>
                            </div>
      
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-card-text"></i>About</label>
                            <div class="col-md-8 col-lg-10">
                              <textarea name="About" type="text" class="form-control" id="About"><?php echo $key['about']?></textarea>
                            </div>
                          </div>
      

      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt"></i>Governorate</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Governorate" type="text" class="form-control" id="Governorate" value="<?php echo $key['Governorate']?>">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt pl-4"></i>Area</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Area" type="text" class="form-control" id="Governorate" value="<?php echo $key['area']?>">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt"></i>Location</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Location" type="url" class="form-control" id="Copmany" value="<?php echo $key['location']?>">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-person-bounding-box"></i>Capacity</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="capacity" type="number" class="form-control" id="Capacity" value="<?php echo $key['capacity']?>">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-cash"></i>Min Budget</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Budget" type="text" class="form-control" id="Copmany" value="<?php echo $key['minBudget']?>">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-credit-card"></i>Pay Way</label>
                            <div class="col-md-8 col-lg-10">
                              <select class="form-control" id="sel1" name="types">
                                <option value="<?php echo $key['id']?>"> <?php echo $key['types']?></option>
                                
                              </select>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-star"></i>Rating</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Rating" type="text" class="form-control" id="Copmany" value="<?php echo $key['Rating']?>" >
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-phone"></i>Phone</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Phone" type="text" class="form-control" id="Phone" value="<?php echo $key['phone']?>">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-envelope"></i>Email</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="email" type="email" class="form-control" id="Email" value="<?php echo $key['email']?>">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                          </div>
                            <?php }}?>
                        </form><!-- End Profile Edit Form -->
                      </div>


                    <!-- Profile Edit Form -->

      
                      <div class="tab-pane fade pt-3" id="services-change">
                        <h5 class="card-title text-center">Edit Services</h5>

                        <!-- Change Password Form -->
                        <form>
                          <div class="services text-center">

                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option6" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option7" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option8" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option9" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option10" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                       
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option11" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option12" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option13" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option14" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option15" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option16" checked/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option17" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option18" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>

                          </div>
                          
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">UPDATE </button>
                          </div>
                        </form><!-- End Change Password Form -->

                      </div>
      

                      <div class="tab-pane fade pt-3" id="reception-hours-change">
                        <!-- Change reception hours Form -->
                        <form>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox1" value="option1" onclick="Sunday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">Sunday</label>
                            <div  id="time1" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox2" value="option2" onclick="Monday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                            <div  id="time2" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox3" value="option3" onclick="thuesday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">thuesday</label>
                            <div  id="time3" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox4" value="option4" onclick="whensday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">whensday</label>
                            <div  id="time4" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox5" value="option5" onclick="thursday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">thursday</label>
                            <div  id="time5" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox6" value="option6" onclick="Friday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">Friday</label>
                            <div  id="time6" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlinedateCheckbox7" value="option7" onclick="Satrday()"/>
                            <label class="form-check-label" for="inlineCheckbox1">Satrday</label>
                            <div  id="time7" style="display:none"> 
                              <div class="from pt-2">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-top"></i> From <input type="time" id="appt" name="appt">     
                                  </p>                           
                                </form>
                              </div>
                              <div class="to">
                                <form action="/action_page.php">
                                  <p class="">
                                    <i class="bi bi-hourglass-bottom"></i> Until <input type="time" id="appt" name="appt">     
                                </p>                       
                                </form>
                              </div>
                            </div>
                          </div>


                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">UPDATE </button>
                          </div>
                        </form><!-- End reception hours  Form -->

                      </div>


                      <div class="tab-pane fade pt-3" id="Menu-change">
                        <!-- Change reception hours Form -->
                        <form>



                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">UPDATE </button>
                          </div>
                        </form><!-- End reception hours  Form -->

                      </div>

                      
                    </div><!-- End Bordered Tabs -->
      
                  </div>
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
  <script>
    var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    

  }
  
  
}
  </script>

  <script>
    function Sunday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox1");
      // Get the output text
      var date = document.getElementById("time1");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function Monday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox2");
      // Get the output text
      var date = document.getElementById("time2");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function thuesday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox3");
      // Get the output text
      var date = document.getElementById("time3");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function whensday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox4");
      // Get the output text
      var date = document.getElementById("time4");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function thursday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox5");
      // Get the output text
      var date = document.getElementById("time5");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function Friday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox6");
      // Get the output text
      var date = document.getElementById("time6");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }

    function Satrday() {
      // Get the checkbox
      var checkBox = document.getElementById("inlinedateCheckbox7");
      // Get the output text
      var date = document.getElementById("time7");
      // If the checkbox is checked, display the output text
      if (checkBox.checked == true){
        date.style.display = "block";
      } else {
        date.style.display = "none";
      }
    }
  </script>

</body>

</html>
<?php
  if (isset($_POST['update'])) { 
    echo "string";
     // $image=$_FILES['images']['name'];
     //   $imagetmp=$_FILES['images']['tmp_name'];
     // $upd=$db->prepare("UPDATE place SET images=:images , about=:about,Governorate=:Governorate,area=:area,location=:location,capacity=:capacity,minBudget=:minBudget ,types=:types , Rating=:Rating ,phone=:phone,email=:email WHERE id=:id");
     // $upd->bindparam("images", $image);
     // $upd->bindparam("about",$_POST['About']);
     // $upd->bindparam("Governorate",$_POST['Governorate']);
     // $upd->bindparam("area",$_POST['Area']);
     // $upd->bindparam("location",$_POST['Location']);
     // $upd->bindparam("capacity",$_POST['capacity']);
     // $upd->bindparam("minBudget",$_POST['Budget']); 
     //   $upd->bindparam("types",$_POST['types']);
     //    $upd->bindparam("Rating",$_POST['Rating']);
     // $upd->bindparam("phone",$_POST['Phone']);
     // $upd->bindparam("email",$_POST['email']);
     //  $upd->bindparam("id",$_POST['update']);
     //  if ($upd->execute()) {
     //       move_uploaded_file($imagetmp,"../img_place/$image");      }
     //       else{
     //        echo "string";
     //       }
     

  }


?>