<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin_login.css">

    <style>
            .full
            {
                    border:2px black;
            }

            </style>
</head>
<body>
    
    <!-- <div class="container">
        <div class="full">
        <h2>Admin Login</h2>
        <form action="admin_authenticate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            <button type="submit">Login</button>
        </form>
        </div>
    </div> -->
    
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5" style="    border: 1px solid;
    width: 555px;
    text-align: center;
    margin: 100px auto;
    height: 223px;">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

              <div data-mdb-input-init class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
              </div>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
               

              <div data-mdb-input-init class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
              </div>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
              

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              <div>
              <!-- <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a> -->
              </p>
            </div>      
            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>
