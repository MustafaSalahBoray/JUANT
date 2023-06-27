<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Places - JuantHost</title>
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
          <li class="breadcrumb-item active"><a href="Places.php">Places</a></li>
          <li class="breadcrumb-item active"><a href="#">Add Place</a></li>
          <li class="breadcrumb-item active"><a href="AddPlaceStep1.php">Step 1</a></li>
          <li class="breadcrumb-item active"><a href="#">Step 2</a></li>
          <li class="breadcrumb-item active">Step 3</li>
          <li class="breadcrumb-item active">Step 4</li>

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
                    <a href="AddPlaceStep1.php"><i class="bi bi-arrow-left-circle-fill"></i>                   
                    </a>
                  </div><!-- End Search Bar -->

                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link collapsed"><a href="AddPlaceStep1.php">Add Information</a></button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-change-password">Services</button>
                      </li>

                      <li class="nav-item">
                        <button class="nav-link disabled collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">Reception Hours</button>
                      </li>

                      <li class="nav-item">
                        <button class="nav-link disabled collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">Pricing list</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-edit" id="profile-edit">
      
                        <!-- Change Password Form -->
                                                <?php  
                          
                               require '../signUpPage/dp.php';
                               if (isset($_GET['Service'])) {
                           
                                $select=$db->prepare("SELECT * FROM place WHERE id =:id");
                                $select->bindparam("id",$_GET['Service']);
                                $select->execute();
                                foreach ($select as $key) {

                                }}
                          ?>

                        <form method="POST">
      
                          <div class="services text-center">

                               <input type="hidden" name="placId" value="<?php echo $key['id']?>"  >
                             
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  value="gg" name="q1" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1"value="<?php echo $key['id']?>" name="q2" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $key['id']?>"  name="q3"/>
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                             <!-- <?php ?> -->
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4" name="q3" />
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
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option7" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option8" />
                              <label class="form-check-label" for="inlineCheckbox1"> <i class="bi bi-envelope"></i>Example</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option9" />
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
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option13"/>
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
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option16" />
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

                           
                          <div class="d-flex justify-content-center">
                            <div class="pt-2">

                              <button class="button2 mt-4 btn-primary btn-lg" type="submit" name="submit" title="Remove my profile image">NEXT</button>
                            </div>
                          </div>                            </form><!-- End Change Password Form -->
                      </div>

                    <!-- Profile Edit Form -->
 
      
                    <div class="tab-pane fade pt-3" id="profile-change-password">


                    </div>
                    
                    </div><!-- End Bordered Tabs -->
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


  <?php 
 
       if(isset($_POST['submit'])){
      //        $insert=$db->prepare("INSERT INTO serv (Name,Email ,carbohydrate ,place_id ) VALUES (:Name,:Email ,:carbohydrate ,:place_id )");
      // $insert->bindparam("Name",$_POST['q1']);
      // $insert->bindparam("Email",$_POST['q2']);
      // $insert->bindparam("carbohydrate",$_POST['q3']);
      // $insert->bindparam("place_id",$_POST['placId']);
      // if ($insert->execute()) {
      
        echo "<script> window.open('http://localhost/JUANT/JUANT/dash_board/AddPlaceStep3.php,'_blank')</script>";
        // header("location:http://localhost/JUANT/JUANT/dash_board/AddPlaceStep3.php");
       //       }
       // else{
       //  echo "sssssssssssssssssssssssssssssssssssssssssssssssss";
       // }
 }
  ?>






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
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->


  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script>
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
 -->
</body>

</html>