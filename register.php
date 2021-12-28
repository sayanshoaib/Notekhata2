<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NoteKhata - Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/signup.css">

  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                <form action="registerProcess.php" method="POST">
    
                  <div class="form-floating mb-3">
                    <label for="myusername">Username</label>
                    <input type="text" class="form-control" id="myusername" name="myusername" placeholder="myusername" required autofocus>
                  </div>
    
                  <div class="form-floating mb-3">
                    <label for="myemail">Email address</label>
                    <input type="email" class="form-control" id="myemail" name="myemail" placeholder="name@example.com" required>
                  </div>
    
                  <hr>
    
                  <div class="form-floating mb-3">
                    <label for="myinstitute">Institute Name</label>
                    <input type="text" class="form-control" id="myinstitute" name="myinstitute" placeholder="Institute Name" required>
                  </div>
    
                  <div class="form-floating mb-3">
                    <label for="mypassword">Password</label>
                    <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Password" required>
                  </div>
    
                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                  </div>
    
                  <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>
    
                  <hr class="my-4">
    
                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                      <i class="fab fa-google me-2"></i> Sign up with Google
                    </button>
                  </div>
    
                  <div class="d-grid">
                    <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                      <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                    </button>
                  </div>
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>