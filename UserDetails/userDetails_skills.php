<?php
// Include config file
require_once "../config.php";
 


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
        $sql = "SELECT id FROM user_skills WHERE skill_main = ?";

        $skill_main = $_POST["skill_main"];
    
        $skill1 = $_POST["skill1"];
    
        $skill2 = $_POST["skill2"];

        $skill3= $_POST["skill3"];

    

        
        // Prepare an insert statement
        $sql = "INSERT INTO user_skills (skill_main, skill1, skill2, skill3) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_skill_main, $param_skill1, $param_skill2, $param_skill3);
            
            // Set parameters
            $param_skill_main = $skill_main;
            $param_skill1 = $skill1;
            $param_skill2 = $skill2;
            $param_skill3 = $skill3;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../PortfolioPage/PortfolioLandingPage.php");
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
    <title>Skill Details</title>
    <link rel="stylesheet" href="userDetailsAcademics.css" />
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
          <h3 class="title">Skills Details</h3>
          

         

          <div class="social-media">
            
            <div class="social-icons">
              
            
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="#" autocomplete="off" method="post">
            <h3 class="title">Your Details</h3>
            <div class="input-container">
              <input type="text" name="skill_main" class="input" />
              <label for="">What do you want to be? </label>
              <span>What do you want to be? </span>
            </div>
            <div class="input-container">
                <input type="text" name="skill1" class="input" />
                <label for="">Skill_1 </label>
                <span>Skill_1 </span>
              </div>
            <div class="input-container">
              <input type="text" name="skill2" class="input" />
              <label for="">Skill_2 </label>
              <span>Skill_2</span>  
            </div>

            <div class="input-container">
              <input type="text" name="skill3" class="input" />
              <label for="">Skill_3 </label>
              <span>Skill_3</span>
              
            </div>
            
            <input type="submit" class="btn" value="Submit" />
          </form>
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>