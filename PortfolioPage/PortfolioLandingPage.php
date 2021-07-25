<?php
// Include config file
require_once "../config.php";

// Initialize the session
session_start();

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../LOGIN/LoginSignup.php");
    exit;
}

$sql = "SELECT * FROM `about_user`";
$result = mysqli_query($link, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);


// Display the rows returned by the sql query
if($num> 0){
    $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        $fullname= $row['name'] ; 
        $dob= $row['dob'] ;
        $gender= $row['gender'] ;
        $about= $row['about'] ;

}

$sql2 = "SELECT * FROM `user_academics`";
$result2 = mysqli_query($link, $sql2);

// Find the number of records returned
$num2 = mysqli_num_rows($result2);


// Display the rows returned by the sql query
if($num2> 0){
    $row2 = mysqli_fetch_assoc($result2);
        
        $matriculation=$row2['school_matriculation'];
        $intermediate=$row2['school_intermediate'];
        $college= $row2['college'] ;
}



$sql3 = "SELECT * FROM `user_skills`";
$result3 = mysqli_query($link, $sql3);

// Find the number of records returned
$num3 = mysqli_num_rows($result3);


// Display the rows returned by the sql query
if($num3> 0){
    $row3 = mysqli_fetch_assoc($result3);
        
        $skill_main=$row3['skill_main'];
        $skill1=$row3['skill1'];
        $skill2=$row3['skill2'];
        $skill3=$row3['skill3'];
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>My Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"> <?php echo $fullname; ?> </a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Sign Out</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color"> <?php echo $fullname; ?>  </span><br> <?php echo $skill_main; ?></h1>

                    <a href="#" class="button">Download CV</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-facebook' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/avatar.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/avatar.png" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am <?php echo $fullname; ?></h2>
                        

                        <p class="about__text">

                        <p><b>DOB :</b> <?php echo $dob; ?></p>
                        <p><b> Gender :</b>  <?php echo $gender; ?></p>
                        <p><b>Matriculation : </b> <?php echo $matriculation; ?></p>
                        <p><b>Intermediate : </b> <?php echo $intermediate; ?></p>
                        <p><b>Graduation : </b> <?php echo $college; ?></p>  <br><br>
                        
                        <p><?php echo $about; ?></p>

                        </p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>


                        <div class="skills__data">
                            <div class="skills__names">
                                
                                <span class="skills__name"><?php echo $skill_main; ?></span>
                            </div>
                            
                            
                        </div>
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                
                                <span class="skills__name"><?php echo $skill1; ?></span>
                            </div>
                            
                            
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                
                                <span class="skills__name"><?php echo $skill2; ?></span>
                            </div>
                           
                            
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                
                                <span class="skills__name"><?php echo $skill3; ?></span>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                        <input type="text" placeholder="Name" class="contact__input">
                        <input type="mail" placeholder="Email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="button" value="Send" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title"> <?php echo $fullname; ?>   </p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2021 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>