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


<?php
require ('components/sidebar.php');
?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Management Places</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"><a href="Places.php">Places</a></li>
          <li class="breadcrumb-item active"><a href="#">Add Place</a></li>
          <li class="breadcrumb-item active"><a href="#">Step 1</a></li>
          <li class="breadcrumb-item active">Step 2</li>
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
                    <a href="Places.php"><i class="bi bi-x-circle-fill"></i>                   
                    </a>
                  </div><!-- End Search Bar -->

                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Add Information</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link disabled collapsed" data-bs-toggle="tab" data-bs-target="#profile-change-password">Services</button>
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
      
                        
                          <div class="row mb-3">
      
      
      
      
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                              <h5 class="card-title text-center">Add New Place</h5>
            
            
            
                              <div class="card-profile text-center">
                                <form action="" method="post" enctype="multipart/form-data" id="form-upload">
                                  <label class="col-md-4 col-lg-2 col-form-label" for="">Choose Images</label>

                                  <div class="img-thumbs img-thumbs" id="img-preview">

                                  </div>
                                  <div class="form-group">
                                    <input type="file" class="form-control col-md-8 col-lg-10" name="images" multiple id="upload-img" />
                                  </div>

                                 >
                                
                              </div>
                            </div>
      
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-card-text"></i>About</label>
                            <div class="col-md-8 col-lg-10">
                              <textarea name="About" type="text" class="form-control" id="About"></textarea>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt"></i>Governorate</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Governorate" type="text" class="form-control" id="Governorate" >
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt pl-4"></i>Area</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="area" type="text" class="form-control" id="Governorate" >
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-geo-alt"></i>Location</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Location" type="url" class="form-control" id="Copmany" >
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-person-bounding-box"></i>Capacity</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Capacity" type="number" class="form-control" id="Capacity" >
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-cash"></i>Min Budget</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Budget" type="number" class="form-control" id="Copmany" >
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-credit-card"></i>Pay Way</label>
                            <div class="col-md-8 col-lg-10">
                              <select class="form-control" id="sel1" name="types">
                                <option value="Online">Online</option>
                                <option value="At Host">At Host</option>
                              </select>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-phone"></i>Phone</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="Phone" type="text" class="form-control" id="Phone" >
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-2 col-form-label"><i class="bi bi-envelope"></i>Email</label>
                            <div class="col-md-8 col-lg-10">
                              <input name="email" type="email" class="form-control" id="Email">
                            </div>
                          </div>
      
                          <div class="d-flex justify-content-center">
                            <div class="pt-2">

                              <button class="button2 mt-4 btn-primary btn-lg" type="submit" name="submit" title="Remove my profile image">NEXT</button>
                            </div>
                          </div>
                        </form><!-- End Profile Edit Form -->
                      </div>

                      
                    </div><!-- End Bordered Tabs -->
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


      <?php 
             require '../signUpPage/dp.php';
           // require '../dash_board/AddPlaceStep1.php';
         
        
         if(isset($_POST['submit'])){
            
            $image=$_FILES['images']['name'];
           $imagetmp=$_FILES['images']['tmp_name'];
             $InsertPlace=$db->prepare("INSERT INTO place (images,about,Governorate,area,location,capacity,minBudget,types,phone,email) VALUES (:images,:about,:Governorate,:area,:location,:capacity,:minBudget,:types,:phone,:email)");
              $InsertPlace->bindparam("images",$image);
               $InsertPlace->bindparam("about",$_POST['About']);
               $InsertPlace->bindparam("Governorate",$_POST['Governorate']);
              $InsertPlace->bindparam("area",$_POST['area']);
              $InsertPlace->bindparam("location",$_POST['Location']);
             $InsertPlace->bindparam("capacity",$_POST['Capacity']);
           $InsertPlace->bindparam("minBudget",$_POST['Budget']);
                     $InsertPlace->bindparam("types",$_POST['types']);
                 $InsertPlace->bindparam("phone",$_POST['Phone']);
               $InsertPlace->bindparam("email",$_POST['email']);
               if ($InsertPlace->execute()) { 
                  move_uploaded_file($imagetmp,"../img_place/$image");
                  $select=$db->prepare("SELECT * FROM place WHERE capacity=:capacity");
                  $select->bindparam("capacity",$_POST['Capacity']);
                  $select->execute();
                  foreach ($select as $key ) { 

                    //echo "<script> window.open('http://localhost/JUANT/JUANT/dash_board/AddPlaceStep2.php?Service=".$key['id']."','_self')</script>";
                                  }


               }
                                  
          }
  $show=$db->prepare("SELECT * FROM place WHERE capacity=:capacity");
                  $show->bindparam("capacity",$_POST['Capacity']);
                  $show->execute();
                  foreach ($show as $key ) {    
                  
 
 ?>
 
 <form method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="img" value="<?php echo $key['id']?>">
  <input type="file" name="multi[]" multiple>
  <button type="submit" name="multis" class="btn btn-primary">multi</button>
   
 </form>

 <?php 
      }
      if (isset($_POST['multis'])) {
          
       
           $counImage=count($_FILES['multi']['name']);
           for ($i=0; $i <$counImage ; $i++) { 
              $imagemlti=$_FILES['multi']['name'][$i];
             $imagetmpmlti=$_FILES['multi']['tmp_name'][$i];
             if (  move_uploaded_file($imagetmpmlti,"../img_place/$imagemlti")) {
            $insert=$db->prepare("INSERT INTO  image(image ,place_img) VALUES(:image,:place_img)");
           $insert->bindparam("image",$imagemlti);
           $insert->bindparam("place_img",$_POST['img']);
             if($insert->execute()){
               echo "<script> window.open('http://localhost/JUANT/JUANT/dash_board/AddPlaceStep2.php?Service=".$key['id']."','_self')</script>";
          } 
          else{
            echo "string";
          }
             }
           } 

     
        

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

</body>

</html>