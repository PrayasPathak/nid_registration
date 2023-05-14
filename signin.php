<?php 
    require_once "connection.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $citizenship_number = $_POST['citizenship_no'];
        $password = $_POST['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>National ID Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/login.css" />
  </head>

  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">
                    Please enter your citizenship number and password
                  </p>

                  <div class="form-outline form-white mb-4">
                    <input
                      type="number"
                      id="citizenship_no"
                      class="form-control form-control-lg"
                      maxlength="11"
                      required
                    />
                    <label class="form-label" for="citizenship_no"
                      >Citizenship Number</label
                    >
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input
                      type="password"
                      id="password"
                      class="form-control form-control-lg"
                    />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2">
                    <a class="text-white-50 text-decoration-none" href="#"
                      >Forgot password?</a
                    >
                  </p>

                  <button
                    class="btn btn-outline-light btn-lg px-5"
                    type="submit"
                  >
                    Login
                  </button>
                </div>

                <div>
                  <p class="mb-0">
                    Don't have an account?
                    <a
                      href="./signup.php"
                      class="text-white-50 fw-bold text-decoration-none"
                      >Sign Up</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
