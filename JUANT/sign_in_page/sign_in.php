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
        <link rel="stylesheet" href="sign_in.css">
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
                            <a class="navbar-brand" href="#">
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
                                <h2 class="text-center ml-5 heading"> HELLO AGAIN</h3>
                                <p class="msg-info text-center">WELCOME BACK YOU HAVE <br>BEEN MESSED</p>
                                
                                <form id="form" method="POST">
                                
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
                                    


                                    <button  name="submit" class="getStarted text-center" type="submit" id="submit"> SIGN IN</button>
                                </form>
                                
                            </div>

                        </div>


                        <div class="bottom text-center mb-2">
                            <p href="#" class="sm-text mx-auto mb-1">have an account already?<a href="http://localhost/JUANT/JUANT/signUpPage/sign_up.php" class="btn btn-white ml-2">SIGN UP NOW</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

   <?php
   
   if(isset($_POST['submit'])){
      require '../signUpPage/dp.php';
      $insert=$db->prepare("SELECT * FROM Owner WHERE email=:email And pass=:pass ");
      $insert->bindparam("email",$_POST['email']);
      $insert->bindparam("pass",$_POST['password']);
      $insert->execute();
      if($insert->rowcount()==1){
        echo "<script> window.open('http://localhost/JUANT/dash_board/index.php','_self')</script>"; 
      
      }
      else{
        echo'helohelossssssshelossss';
      }
   }
   
   ?>



       <!--  <script>
          // Tutorial - https://youtu.be/VufN46OyFng

          // Targetting all classes & id from HTML

        let id = (id) => document.getElementById(id);

        let classes = (classes) => document.getElementsByClassName(classes);

        let email = id("email"),
        password = id("password"),
        form = id("form"),
        errorMsg = classes("error"),
        successIcon = classes("success-icon"),
        failureIcon = classes("failure-icon");


        // Adding the submit event Listener

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            checkpass(password, 1);
            validemail(email, 0);
        });

        let validemail = (email, serial) =>{
          var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
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


        </script> -->
</body>
</html>