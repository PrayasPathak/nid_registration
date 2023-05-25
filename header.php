<!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hero">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#faq">Faq</a>
            </li>
          </ul>
          <div>
            <button
              class="btn btn-outline-info"
              data-bs-toggle="modal"
              data-bs-target="#registerModal"
            >
              Register
            </button>
            <button
              class="btn btn-outline-success"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
            >
              Login
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Register Modal -->

    <div class="container">
      <div class="modal fade modal-lg" id="registerModal">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-md-down">
          <!-- Modal Content Goes Here -->

          <div class="modal-content">

            <!-- Header Section of the modal goes here -->

            <div class="modal-header">
              <h4 class="modal-title ms-auto me-auto">Registration Form</h4>
              <button class="btn-close" data-bs-toggle="modal" data-bs-dismiss="#modal"></button>
            </div>
            
            <!-- Modal Body -->
             <div class="modal-body">
              <form class="row g-3" novalidate action="./register.php" method="post">
                <div class="col-md-6 col-12 col-lg-6">
                  <label for="fname" class="form-label">First Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    placeholder="Enter your first name"
                    name="first_name"
                    required
                  />
                </div>
                
                <div class="col-md-6 col-12 col-lg-6">
                  <label for="lname" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lname"
                    placeholder="Enter your last name"
                    name="last_name"
                    required
                  />
                </div>

                <div class="col-md-6 col-12 col-lg-6">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Enter your email address"
                    name="email"
                    required
                  />
                </div>

                <div class="col-md-6 col-12 col-lg-6">
                  <label for="citizenship_no" class="form-label"
                    >Citizenship Number</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="citizenship_no"
                    placeholder="Enter your citizenship number"
                    name="citizenship_number"
                    maxlength="11"
                    required
                  />
                </div>

                <div class="col-md-6 col-12 col-lg-6">
                  <label for="perm_address" class="form-label"
                    >Permanent Address</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="perm_address"
                    placeholder="Enter your permanent address"
                    name="permanent_address"
                    required
                  />
                </div>

                <div class="col-md-6 col-12 col-lg-6">
                  <label for="temp_address" class="form-label"
                    >Temporary Address</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="temp_address"
                    placeholder="Enter your temporary address"
                    name="temporary_address"
                    required
                  />
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                  <label for="nationality" class="form-label"
                    >Nationality</label
                  >
                  <input
                    type="text"
                    name="nationality"
                    id="nationality"
                    placeholder="Enter your Nationality"
                    class="form-control"
                    required
                  />
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                  <label class="form-label">Religion</label>
                  <select class="form-select" aria-label="Select your religion">
                    <option value="hinduism" selected name="religion">
                      Hinduism
                    </option>
                    <option value="buddhism" name="religion">Buddhism</option>
                    <option value="muslim" name="religion">Muslim</option>
                    <option value="christianity" name="religion">
                      Christianity
                    </option>
                  </select>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                  <label for="dob" class="form-label">Birth Date</label>
                  <input
                    type="date"
                    name="birth_date"
                    id="dob"
                    class="form-control"
                    required
                  />
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                  <label class="form-label text-center gender-label"
                    >Gender</label
                  >
                  <div class="form-check form-check-inline">
                    <input type="radio" name="gender" id="male" />
                    <label for="male" class="form-check-label">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" name="gender" id="female" />
                    <label for="female" class="form-check-label">Female</label>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <label for="municipality_name" class="form-label"
                    >Municipality</label
                  >
                  <input
                    type="text"
                    name="municipality_name"
                    id="municipality_name"
                    placeholder="Enter your municipality name"
                    class="form-control"
                    required
                  />
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <label for="photo" class="form-label"
                    >Choose your photo</label
                  >
                  <input
                    type="file"
                    name="profile"
                    id="photo"
                    class="form-control"
                  />
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                  <label for="municipality_name" class="form-label"
                    >Municipality</label
                  >
                  <input
                    type="text"
                    name="municipality_name"
                    id="municipality_name"
                    placeholder="Enter your municipality name"
                    class="form-control"
                    required
                  />
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <label for="municipality_name" class="form-label"
                    >Municipality</label
                  >
                  <input
                    type="text"
                    name="municipality_name"
                    id="municipality_name"
                    placeholder="Enter your municipality name"
                    class="form-control"
                    required
                  />
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <label for="municipality_name" class="form-label"
                    >Municipality</label
                  >
                  <input
                    type="text"
                    name="municipality_name"
                    id="municipality_name"
                    placeholder="Enter your municipality name"
                    class="form-control"
                    required
                  />
                </div>

                <div
                  class="col-12 col-md-12 col-lg-12 d-flex justify-content-center gap-1"
                >
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                  <p class="lead text-center form-paragraph align-self-center">
                    Already registered.
                    <a href="./signin.php" class="form-login-link">Login</a>
                  </p>
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Login Modal -->

    <div class="container">
      <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-fullscreen-md-down">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title m-auto">Login Form</h4>
              <button
                class="btn-close"
                data-bs-dismiss="modal"
                data-bs-target="#loginModal"
              ></button>
            </div>
            <div class="modal-body">
              <form action="./login.php" class="row" novalidate>
                <div class="col-12 col-md-12 col-lg-12">
                  <label for="citizenship_no" class="form-label">
                    Citizenship Number
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="citizenship_no"
                    name="citizenship"
                    placeholder="Enter your citizenship number"
                    required
                  />
                </div>
                <button type="submit" class="btn btn-lg btn-success mt-2 w-100 m-auto">
                  Login
                </button>
              </form>
            </div>
            <div class="modal-footer">
              <button
                class="btn btn-danger"
                data-bs-dismiss="modal"
                data-bs-target="#loginModal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Script for form validation -->
<script>
      const form = document.querySelector('form');
      form.addEventListener('submit', (e) => {
        if (!form.checkValidity()) {
          e.preventDefault();
        }
        form.classList.add('was-validated');
      });
    </script>