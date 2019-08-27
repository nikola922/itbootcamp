<?php
    session_start();

    require_once 'konekcija.php';

    // Podesavanje id logovanog korisnika
    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
    $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Uredi profil</title>
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
table {
    width:100%;
    margin: 0;
}
tr {
    background-color:#ffffff;
}
tr:hover {
    background-color:  #ececff;
    cursor: pointer;
}
th {
    color: #ffffff;
    background-color: lightblue;
    font-family: Poppins-Regular;
    font-size: 18px;
    padding-top: 19px;
    padding-bottom: 19px;
    padding-left: 10px;
}
td {
    font-family: Poppins-Regular;
    font-size: 15px;
    color:  black;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 15px;
    border-bottom: 1px solid #f2f2f2;
}

td:nth-child(even) {
    background-color: lightyellow;
}
td:nth-child(odd) {
    background-color: #a4b2b5;
}
a {
       background: #395870;
       background: linear-gradient(#00ffb5, #293f50);
       border-right: 1px solid rgba(0, 0, 0, .3);
       color: #fff;
       padding: 12px 20px;
       text-decoration: none;
       text-align:center;
       }
   a:hover {
       background: #314b60;
       box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .3);
       }
                
                ul.topnav {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: lightgreen;
                }
                img{
                  width:100%;
                  height:400px;
                }

                ul.topnav li {float: left;}

                ul.topnav li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

                ul.topnav li a:hover:not(.active) {background-color: #111;}

                ul.topnav li a.active {background-color: #4CAF50;}
                
                ul.topnav li.right {float: right;}

                @media screen and (max-width: 600px) {
                ul.topnav li.right, 
                ul.topnav li {float: none;}
                }

                h1{
                    color:#6c7ae0;
                    text-align:center;
                }
        </style>
    </head>

    <body>
    <div class="wrapper">
        <header class="header">
            
            <div class="white">
                <img src="img/slika.png" alt="">
            </div>

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="home.php">Pocetna</a></li>
                                <li><a href="prijatelji.php">Prijatelji</a></li>
                                <li><a href="forma.php">Profil</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


