<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>sign up</title>
      <link href="{{asset('https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css')}}" rel="stylesheet">
   <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('public-style/css/style.css')}}">
   </head>
   <body>
     
      <section class="Login" >
         <div class="container mt-5 ">
         <div class="row justify-content-center">
         <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card mb-5">
               <div class="login-card-header mt-3">Sign Up and Start Learning! </div>
               <div class="card-body">
                  <div id="form-register" >
                     <div class="form-group ">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" class="form-control email-input" name="email">
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="name" class="control-label">Name</label>
                        <input id="name" type="text" class="form-control full-name-input" name="name" value="" >
                        <div class="error"></div>
                     </div>
                     <div class="form-group">
                        <label>Profile image</label>
                        <div class="d-flex flex-wrap mt-3 ">
                           <label >
                              <input type="radio" class="checkbox" name="image-profile" value="bt1">  
                              <div class="avatar">
                                 <img class="avatar-img mini-avatar" src="img/bt1.png" id="avatar-1" alt="">
                              </div>
                           </label>
                           <label >
                              <input type="radio" class="checkbox" name="image-profile" value="bt2">  
                              <div class="avatar">
                                 <img class="avatar-img mini-avatar" src="img/bt2.png" id="avatar-2" alt="">
                              </div>
                           </label>
                           <label >
                              <input type="radio" class="checkbox" name="image-profile" value="bt3">  
                              <div class="avatar">
                                 <img class="avatar-img mini-avatar" src="img/bt3.png" id="avatar-3" alt="">
                              </div>
                           </label>
                           <label >
                              <input type="radio" class="checkbox" name="image-profile" value="bt4">  
                              <div class="avatar">
                                 <img class="avatar-img mini-avatar" src="img/bt4.png" id="avatar-4" alt="">
                              </div>
                           </label>
                        </div>
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control password-input" autocomplete="off" name="password" >
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control conf-password-input" autocomplete="off" name="password_confirmation" >
                        <div class="error"></div>
                     </div>
                     <div class="form-group">
                        <button type="button" class="btn primaryBtn full-width signup-button register white" id='signup'>
                        Register 
                        </button>
                     </div>
                  </div>
                  <div class="mt-4">
                     <span>Already have an account? <a class="ms-1 regster-href" href="login.html">Login</a> </span>
                  </div>
               </div>
            </div>
         </div>
         <div>
      </section>
      <aside class="floaty-bar">
         <div class="main-header box-shadow-header floaty">
         <div class="container">
            <div class="footer d-flex align-items-center ">
               <div class="col-md-4 center">
                  <i class="fas fa-book-open me-1"></i> <span class="white" >Quizes</span>
               </div>
               <div class="border"></div>
               <div class="col-md-4 center">
                  <i class="fas fa-rabbit me-1"></i><a class="white" href="about.html">About</a>
               </div>
            </div>
         </div>
      </aside>
      <footer>
         <div class="container">
            <div class="footer-link  d-flex justify-content-between">
               <div class="d-flex">
                  <div><a class="link" href="about.html">About</a></div>
                  <div><a class="link" href="#">Help</a></div>
                  <div><a class="link" href="#">Privacy</a></div>
                  <div><a class="link" href="#"> Terms </a></div>
                  <div><a class="link" href="#">Contact</a></div>
               </div>
               <div class="link copyright">Copyright © 2021 Turtles.</div>
            </div>
         </div>
      </footer>
      <script src="js/registration.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
   </body>
</html>