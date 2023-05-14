<?php 
    require_once "connection.php";
    
    // Checks the form method before performing action on the data.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = stripslashes($_POST['first_name']);
        $last_name = stripslashes($_POST['last_name']);
        $email = stripslashes($_POST['email']);
        $citizenship_number = stripslashes($_POST['citizenship_number']);
        $permanent_address = stripslashes($_POST['permanent_address']);
        $temporary_address = stripslashes($_POST['temporary_address']);
        $nationality = stripslashes($_POST['nationality']);
        $religion = stripslashes($_POST['religion']);
        $birth_date = stripslashes($_POST['birth_date']);
        $municipality_name = stripslashes($_POST['municipality_name']);   
        $gender = stripslashes($_POST['gender']);
        $religion = stripslashes($_POST['']);

        $insert = "INSERT INTO users (`first_name`, `last_name`, `email`, `citizenship_number`, `permanent_address`, `temporary_address`, `nationality`, `religion`, `birth_date`, `municipality_name`) VALUES('$first_name', '$last_name', '$email', '$citizenship_number', '$permanent_address', '$temporary_address', '$nationality', '$religion', '$birth_date', '$municipality_name')";

        $result = mysqli_query($con, $insert);
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>You\'ve Registered Successfully!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('Location: ./login.php');
        }else{
            echo "Form not submitted";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register National ID </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/register.css">
</head>

<body>

    <div class="form-container">
        <h3 class="display-6 text-center mb-3 registration-form-title">Registration Form</h3>
        <form class="row g-3" action="./signup.php" method="post">
            <div class="col-md-6 col-12 col-lg-6">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="first_name"
                    required>
            </div>
            <div class="col-md-6 col-12 col-lg-6">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="last_name"
                    required>
            </div>
            <div class="col-md-6 col-12 col-lg-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email"
                    required>
            </div>
            <div class="col-md-6 col-12 col-lg-6">
                <label for="citizenship_no" class="form-label">Citizenship Number</label>
                <input type="text" class="form-control" id="citizenship_no" placeholder="Enter your citizenship number"
                    name="citizenship_number" maxlength="11" required>
            </div>
            <div class="col-md-6 col-12 col-lg-6">
                <label for="perm_address" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" id="perm_address" placeholder="Enter your permanent address"
                    name="permanent_address" required>
            </div>
            <div class="col-md-6 col-12 col-lg-6">
                <label for="temp_address" class="form-label">Temporary Address</label>
                <input type="text" class="form-control" id="temp_address" placeholder="Enter your temporary address"
                    name="temporary_address" required>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" name="nationality" id="nationality" placeholder="Enter your Nationality"
                    class="form-control" required>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <label class="form-label">Religion</label>
                <select class="form-select" aria-label="Select your religion">
                    <option value="hinduism" selected name="religion">Hinduism</option>
                    <option value="buddhism" name="religion">Buddhism</option>
                    <option value="muslim" name="religion">Muslim</option>
                    <option value="christianity" name="religion">Christianity</option>
                </select>                
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <label for="dob" class="form-label">Birth Date</label>
                <input type="date" name="birth_date" id="dob" class="form-control" required>
            </div>
            <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                <label class="form-label text-center gender-label">Gender</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender" id="male">
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender" id="female">
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <label for="municipality_name" class="form-label">Municipality</label>
                <input type="text" name="municipality_name" id="municipality_name"
                    placeholder="Enter your municipality name" class="form-control" required>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <label for="photo" class="form-label">Choose your photo</label>
                <input type="file" name="profile" id="photo" class="form-control">
            </div>
            <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-around">
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="lead text-center form-paragraph">Already registered. <a href="./signin.php" class="form-login-link">Login</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
