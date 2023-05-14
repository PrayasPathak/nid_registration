<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./css/utility.css">

<header class="mb-2">
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="#">NID Registration</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavbar" aria-controls="headerNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="headerNavbar">
        <ul class="navbar-nav mt-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-upper" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-upper" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-upper" href="./news.php">News</a>
          </li>
          <li class="nav-item">
            <a href="./faq.php" class="nav-link text-upper">Faq</a>
          </li>
        </ul>
        <div class="nav-btn-group ms-auto d-flex gap-2">
          <form action="./register.php">
            <button class="btn btn-outline-success btn-register" name="register" type="submit">Register</button>
          </form>
          <form action="./signin.php">
            <button class="btn btn-outline-info" name="signin" type="submit">Signin</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>
