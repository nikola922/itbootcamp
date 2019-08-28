<?php
    
    // Konekcija ka bazi
    $servername = "localhost";
    $username = "ambulanta";
    $password = "admin123";
    $database = "mreza";

    // Objekat konekcije
    $conn = new mysqli($servername, $username,
        $password, $database);

    if($conn->connect_error)
    {
        die("Neuspela konekcija! Razlog: "
            . $conn->connect_error);
    }

    $conn->set_charset('utf8');

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drustvena mreza IT Bootcamp gen.1</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
<style>
img {
  width: 100%;
  height: 400px;
  
}
</style>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            
            <div class="white">
                <img src="img/slika.png" alt="">
            </div>
            <div class="container">
                
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="home.php">Pocetna</a></li>
                                <li><a href="prijatelji.php">Prijatelji</a></li>
                                <li><a href="forma.php">Profil</a></li>
                                <li><a href="login.php">Uloguj se</a></li>
                                <li><a href="registracija.php">Registruj se</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                            <h1>Dobrodosli na drustvenu mrezu</h1>
                            <p>Izmenite profil, sklapajte nova prijateljstva i upotpunite svoje vreme</p>
                            <button><a href="prijatelji.php">Prijatelji</a></button>
                            <button><a href="forma.php">Profil</a></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                            <h3>Ulogujte se bezbedno na novu socijalnu mrezu</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                 
                        </div>
                    </div>
                    <!--<div class="col-md-8">
                        <div class="footer-text">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>About Us</h3>
                                        <p><a href="#">Our Team</a></p>
                                        <p><a href="#">Company</a></p>
                                        <p><a href="#">Jobs</a></p>
                                        <p><a href="#">Newsletter</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Help Center</h3>
                                        <p><a href="#">Documentations</a></p>
                                        <p><a href="#">Tutorials</a></p>
                                        <p><a href="#">Term Of Use</a></p>
                                        <p><a href="#">Privecy Policy</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Tools</h3>
                                        <p><a href="#">Create Account</a></p>
                                        <p><a href="#">Log In</a></p>
                                        <p><a href="#">Services</a></p>
                                        <p><a href="#">Sitemap</a></p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single">
                                        <h3>Get In Touch</h3>
                                        <p><a href="#">Contact Us</a></p>
                                        <p><a href="#">Request A Demo</a></p>
                                        <p><a href="#">+12 323 323 323</a></p>
                                        <p><a href="#">support@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </footer>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>
</body>

</html>