<?php
// Include config file
require_once "../config.php";
 


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
        $sql = "SELECT id FROM about_user WHERE name = ?";
        
        $name = trim($_POST["name"]);

        $email = trim($_POST["email"]);
    
        $mobile = trim($_POST["mobile"]);

        $dob = $_POST['dob'];

        
          $gender=$_POST['gender'];
        

        $about= trim($_POST["about"]);
    

        
        // Prepare an insert statement 
        $sql = "INSERT INTO about_user (name, email, mobile, dob, gender, about) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_email, $param_mobile, $param_dob, $param_gender, $param_about);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_mobile = $mobile;
            $param_dob = $dob;
            $param_gender = $gender;
            $param_about = $about;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../UserDetails/UserDetailsAcademics.php");
            } else{
                echo  '<script>alert("Something went wrong,please try again letter")</script>';
            }

            // Close statement
            mysqli_stmt_close($stmt);
          }
        }
    
    // Close connection
    mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Details</title>
    <link rel="stylesheet" href="UserDetailsAbout.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Just share your details with us and we will make wonderful Resume Portfolio for you.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>CET Bhubaneswar</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>navneetg174@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>7908843993</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/navneet.kumargupta.315">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/Navneet174">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/its__navneet/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/navneetgupta174/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" autocomplete="off" method="post">
            <h3 class="title">Your Details</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" required />
              <label for="">Full Name</label>
              <span>Full Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" required />
              <label for="">Email</label>
              <span>Email</span>
              
            </div>
            <div class="input-container">
              <input type="tel" name="mobile" class="input" required />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>

            <div class="input-container">
              <input type="date" name="dob" class="input" required />
              <label for="">DOB</label>
              <span>DOB</span>
            </div>

            <div class="input-container">
              <select name="gender" class="input" required>
                <option value="" disabled selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Not disclosed">Not disclose</option>
              </select>
            </div>

            
            <div class="input-container textarea">
              <textarea name="about" class="input"></textarea>
              <label for="">About Yourself</label>
              <span>About Yourself</span>
            </div>
            <input type="submit" class="btn" value="Next" />
          </form>
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>
