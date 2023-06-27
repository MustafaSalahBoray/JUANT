<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juant</title>
        <!--design files-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/sign_up.css">
        <!--fonts style-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="mx-auto">
            <div class="card card0">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    
                    <div class="card card2">
                        <nav class="navbar navbar-expand-lg stick-top">
                            <div class="container">
                            <a class="navbar-brand" href="../landing_page_app/landingPageApplication/index.html">
                                <img src="images/Juant.png" alt="logo">
                            </a>
                        </nav>
                        <div class="text-area my-auto mx-md-2 px-md-5 right">
                        <h3>We are more than just a company</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="card card1">
                        <div class="row justify-content-center my-auto">
                            <div class="col-md-8 col-10 my-auto">
                                <h2 class="text-center ml-5 heading"> START JUANTING</h3>
                                <p class="msg-info text-center">Sign up now free and get <br>started business</p>
                                
                                <form id="form" method="POST">
                                    <!-- /** * ! user name Input here **/ -->
                                    <div class="form-group">
                                      <label for="username">First Name</label>
                                      <input type="text" name="fullName" id="fullName" placeholder="fullName" class="form-control" />
                                      <label class="form-control-desc">please enter your first name</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="username">Company</label>
                                      <input type="text" name="companyName" id="companyName" placeholder="CompanyName" class="form-control" />
                                      <label class="form-control-desc">please enter your Company name</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>


                                    <div class="form-group2">
                                      <label for="sel1" class="mb-2">Type Of Place</label>
                                      <div class="form-group">
                                        <select class="form-control" id="sel1" name="types">
                                          <option>Park</option>
                                          <option>Resturant</option>
                                          <option>Cafes</option>
                                          <option>Workspaces</option>
                                        </select>
                                      </div>
                                      <label class="form-control-desc">please enter your Company type</label>

                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>


                                
                                    <!-- /** 
                                          * ! Email Input here
                                         **/ -->
                                
                                    <div>
                                      <label for="email">Email</label>
                                      <input type="text" name="email" id="email" placeholder="abc@gmail.com" class="form-control"/>
                                      <label class="form-control-desc">please enter your e-mail</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="username">Phone Number</label>
                                      <input type="text" name="Phone" id="Phone" placeholder="Phone" class="form-control" />
                                      <label class="form-control-desc">please enter your phone number</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>
                                
                                    <!-- /** 
                                          * ! Password Input here
                                         **/ -->
                                
                                    <div>
                                      <label for="password">Password</label>
                                      <input type="password" name="password" id="password" placeholder="Password here" />
                                      <label class="form-control-desc">please enter strong password</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>
                                    
                                    <div>
                                      <label for="password">Confirm Password</label>
                                      <input type="password" name="cPassword" id="cPassword" placeholder="Confirm Password" />
                                      <label class="form-control-desc">please renter the password</label>
                                      <i class="fas fa-exclamation-circle failure-icon"></i>
                                      <i class="far fa-check-circle success-icon"></i>
                                      <div class="error"></div>
                                    </div>



                                    <button name="submit" class="getStarted mt-4 text-center" type="submit" id="submit">GET STARTED</button >
                                    
                                  </form>
                                

                            </div>

                        </div>


                        <div class="bottom text-center mb-2">
                            <p href="#" class="sm-text mx-auto mb-1">have an account already?<a href="http://localhost/JUANT/JUANT/sign_in_page/sign_in.php" class="btn btn-white ml-2">SIGN IN</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

            <?php 
            require 'dp.php';
                if (isset($_POST['submit'])) {  

                     $reqister=$db->prepare("INSERT INTO owner (fullName,companyName,type,email,Phone,password,cPassword) VALUES (:fullName,:companyName,:types,:email,:Phone,:password,:cPassword)");
        $reqister->bindparam("fullname",$_POST['fullName']);
          $reqister->bindparam("companyName",$_POST['companyName']);
         $reqister->bindparam("type",$_POST['types']);
         $reqister->bindparam("email",$_POST['email']);
            $reqister->bindparam("phone", $_POST['Phone']);
          $reqister->bindparam("password",$_POST['password']);
          $reqister->bindparam("cPass",$_POST['cPassword']);
             if ($reqister->execute()) {

          echo'ssssssssssssssssssssssssssssss';
             }
             else{
              echo"ss";
             }
                    
                }
 



            ?>


        <!-- <script>
          // Tutorial - https://youtu.be/VufN46OyFng

          // Targetting all classes & id from HTML

        let id = (id) => document.getElementById(id);

        let classes = (classes) => document.getElementsByClassName(classes);

        let firstName = id("firstName"),
        laststName = id("lastName"),
        email = id("email"),
        phone = id("Phone"),
        password = id("password"),
        cPassword = id("cPassword"),
        form = id("form"),
        errorMsg = classes("error"),
        successIcon = classes("success-icon"),
        failureIcon = classes("failure-icon");


        // Adding the submit event Listener

        form.addEventListener("submit", (e) => {

          engine(firstName, 0, "first name cannot be blank");
          engine(lastName, 1, "last name cannot be blank");
          validphone(phone, 3);
          checkpass(password, 4);
          confirmpass(cPassword, 5);
          validemail(email, 2);
        });

        // engine function which will do all the works
        
        let engine = (id, serial, message) => {
          if (id.value.trim() === "") {
            errorMsg[serial].innerHTML = message;
            id.style.border = "2px solid red";
            // icons
            failureIcon[serial].style.opacity = "1";
            successIcon[serial].style.opacity = "0";
          }
          else {
            errorMsg[serial].innerHTML = "";
            // icons
            failureIcon[serial].style.opacity = "0";
            }
        };

        let validemail = (email, serial) =>{
          var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          if (email.value.trim() === "") {
            errorMsg[serial].innerHTML = "e-mail cannot be blank";
            email.style.border = "2px solid red";
          // icons
          failureIcon[serial].style.opacity = "1";
          successIcon[serial].style.opacity = "0";
          }
          else{
            errorMsg[serial].innerHTML = "";
            // icons
            failureIcon[serial].style.opacity = "0";
            if (email.value.match(validRegex)){
              errorMsg[serial].innerHTML = "";
              // icons
              failureIcon[serial].style.opacity = "0";
            }   
            else{
              errorMsg[serial].innerHTML = "please enter a valid email";
              email.style.border = "2px solid red";
              // icons
              failureIcon[serial].style.opacity = "1";
              successIcon[serial].style.opacity = "0";
            }
          }
        }

        let checkpass = (password, serial)=>{
          var lowerCaseLetters = /[a-z]/g;
          var upperCaseLetters = /[A-Z]/g;
          var numbers = /[0-9]/g;

          if (password.value.trim() === "") {
            errorMsg[serial].innerHTML = "Password cannot be blank";
            password.style.border = "2px solid red";
            // icons
            failureIcon[serial].style.opacity = "1";
            successIcon[serial].style.opacity = "0";
          }
          else {
            errorMsg[serial].innerHTML = "";
            // icons
            failureIcon[serial].style.opacity = "0";
            if (password.value.match(lowerCaseLetters)&& password.value.match(upperCaseLetters)&&password.value.match(numbers)){
              if(password.value.length >=8 && password.value.length <=20){
                errorMsg[serial].innerHTML = "";
                // icons
                failureIcon[serial].style.opacity = "0";
              }
            }
            else{
              errorMsg[serial].innerHTML = "password must contain numbers and upper and lower character";
              password.style.border = "2px solid red";
              // icons
              failureIcon[serial].style.opacity = "1";
              successIcon[serial].style.opacity = "0";
            }
          }
        }

        let confirmpass = (cPassword, serial)=>{

          if (cPassword.value.trim() === "") {
            errorMsg[serial].innerHTML = "Password cannot be blank";
            cPassword.style.border = "2px solid red";
            // icons
            failureIcon[serial].style.opacity = "1";
            successIcon[serial].style.opacity = "0";
          }
          else {
            errorMsg[serial].innerHTML = "";
            // icons
            failureIcon[serial].style.opacity = "0";
            if (cPassword.value.match(password.value)){
              errorMsg[serial].innerHTML = "";
              // icons
              failureIcon[serial].style.opacity = "0";
            }
            else{
              errorMsg[serial].innerHTML = "password must be the same";
              cPassword.style.border = "2px solid red";
              // icons
              failureIcon[serial].style.opacity = "1";
              successIcon[serial].style.opacity = "0";
            }
          }
        }

        let validphone = (phone, serial)=>{
          var phoneno = /^\d{11}$/;
          if (phone.value.trim() === "") {
            errorMsg[serial].innerHTML = "phone number cannot be blank";
            phone.style.border = "2px solid red";
            // icons
            failureIcon[serial].style.opacity = "1";
            successIcon[serial].style.opacity = "0";
          }
          else {
            errorMsg[serial].innerHTML = "";
            // icons
            failureIcon[serial].style.opacity = "0";
            if (phone.value.match(phoneno)){
              errorMsg[serial].innerHTML = "";
              // icons
              failureIcon[serial].style.opacity = "0";
            }
            else{
              errorMsg[serial].innerHTML = "please enter a valid phone number";
              phone.style.border = "2px solid red";
              // icons
              failureIcon[serial].style.opacity = "1";
              successIcon[serial].style.opacity = "0";
            }
          }

        }
        </script>   -->
</body>
</html>