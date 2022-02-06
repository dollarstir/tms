<?php
require 'loader/autoloader.php';

$checker = new Session();
$checker->authpagechecker('/tms/home');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />
    <title>
      TUCEE Admin Login 
    </title>
    <link rel="icon" type="image/x-icon" href="common-assets/img/favicon.ico" />
    <!-- Common Styles Starts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="common-assets/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link
      href="common-assets/plugins/perfect-scrollbar/perfect-scrollbar.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="common-assets/plugins/highlight/styles/monokai-sublime.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="common-assets/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="common-assets/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="common-assets/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/basic-ui/custom_sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/authentication/auth_3.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Page Level Plugin/Style Ends -->
  </head>
  <body class="login-three">
    <!-- Loader Starts -->
    <div id="load_screen">
      <div class="boxes">
        <div class="box">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="box">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="box">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="box">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <!-- <p class="TUCEE-loader-heading">TUCEE</p> -->
    </div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-three-container">
      <div class="row main-login-three">
        <div class="col-xl-3 col-lg-3 col-md-2 d-none d-md-block p-0">
          <div class="login-bg"></div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div
            class="d-flex flex-column justify-content-between h-100 center-area"
          >
            <!-- <a>Login</a> -->
            <div>
              <p class="text-dark">Welcome Back</p>
              <h2 class="text-black">Login to your admin panel</h2>
            </div>
            <!-- <p class="text-dark d-none d-md-block m-0">TUCEE HUB</p> -->
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-6">
          <div
            class="d-flex flex-column justify-content-between h-100 right-area"
          >
            <!-- <a
              class="btn btn-sm w-25 bg-gradient-primary text-white ml-auto"
              href="auth_signup_3.html"
              >Sign up</a
            > -->
            <div>
              <form  class="supperlogin">
                <div class="login-three-inputs mt-5">
                  <input type="text" placeholder="Username" name="username" />
                  <i class="las la-user-alt"></i>
                </div>
                <div class="login-three-inputs mt-3">
                  <input type="password" placeholder="Password" name="password" />
                  <i class="las la-lock"></i>
                </div>
                <div class="login-three-inputs check mt-4">
                  <input
                    class="inp-cbx"
                    id="cbx"
                    type="checkbox"
                    style="display: none"
                  />
                  <label class="cbx" for="cbx">
                    <span>
                      <svg width="12px" height="10px" viewBox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                      </svg>
                    </span>
                    <span class="font-13 text-muted">Remember me ?</span>
                  </label>
                </div>
                <div
                  class="d-flex align-items-center justify-content-between mt-4"
                >
                  <button class="text-white btn bg-gradient-primary">
                    Login <i class="las la-key ml-2"></i>
                  </button>
                  <a
                    class="font-13 text-primary"
                    href="auth_forget_password_3.html"
                    >Forgot your Password ?</a
                  >
                </div>
              </form>
            </div>
            <!-- <div class="login-three-social social-logins mt-4">
              <div class="social-btn bg-gradient-primary">
                <a href="auth_login_3.html#" class="fb-btn">
                  <i class="lab la-facebook-f"></i>
                </a>
              </div>
              <div class="social-btn bg-gradient-primary">
                <a href="auth_login_3.html#" class="twitter-btn">
                  <i class="lab la-twitter"></i>
                </a>
              </div>
              <div class="social-btn bg-gradient-primary">
                <a href="auth_login_3.html#" class="google-btn">
                  <i class="lab la-google-plus"></i>
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="common-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/authentication/auth_2.js"></script>
    <!-- Page Level Plugin/Script Ends -->

    <script src="common-assets/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="assets/js/basicui/sweet_alerts.js"></script>
    <!-- Page Level Plugin/Script Ends -->

     <!-- php york script -->
     <script src="processor.js"></script>
  </body>
</html>
