<?php
// Include config file
require_once "../config.php";
 


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
        $sql = "SELECT id FROM user_academics WHERE school_matriculation = ?";
        
    
        $school_matriculation = $_POST["school_matriculation"];
    
        $school_intermediate = $_POST["school_intermediate"];

        $college= $_POST["college"];
    

        
        // Prepare an insert statement
        $sql = "INSERT INTO user_academics (school_matriculation, school_intermediate, college) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_school_matriculation, $param_school_intermediate, $param_college);
            
            // Set parameters
            $param_school_matriculation = $school_matriculation;
            $param_school_intermediate = $school_intermediate;
            $param_college = $college;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: userDetails_skills.php");
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
    <title>Academics Details</title>
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
          <h3 class="title">Academics Details</h3>
          

         

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
              <input type="text" name="school_matriculation" class="input" />
              <label for="">School (Matriculation) </label>
              <span>School (Matriculation) </span>
            </div>
            <div class="input-container">
                <input type="text" name="school_intermediate" class="input" />
                <label for="">School (Intermediate) </label>
                <span>School (Intermediate) </span>
              </div>
            <div class="input-container">
              <input type="text" name="college" class="input" />
              <label for="">Current Institution </label>
              <span>Current Institution</span>
              
            </div>
            
            <input type="submit" class="btn" value="Next" />
          </form>
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>