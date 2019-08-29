<?php
    // Konekcija ka bazi
    
    require_once 'konekcija.php';
  
        $newPass= "";
        $newPass2= "";
        $newUsername="";
    

    if(!empty($_POST)){
        $newUsername = $conn->real_escape_string($_POST['newUsername']);
        $newPass = $conn->real_escape_string($_POST['newPass']);
        $newPass2 = $conn->real_escape_string($_POST['newPass2']);

        if(empty($newUsername)){
            echo "Morate uneti username";
        }
        else {
            $sql= "SELECT username 
            FROM korisnici
            WHERE username = '$newUsername'";
            $result = $conn->query($sql);

            
            if($result->num_rows == 0){
                if($newPass == $newPass2){
                        if(empty($newPass2)){
                            echo "Pasword ne sme biti prazan string";
                        }
                        else{
                            $newPass2 = md5($newPass2);
                            $sql= "INSERT INTO korisnici
                            (username, pass)
                            VALUE ('$newUsername', '$newPass2')";
                            $result = $conn->query($sql);
                            header('Location:login.php');
                        }
                    
                }
                else {
                    echo "Username mora biti jedinstven";
                }
            }

        }
    }   
    
    

   
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
            <style>
                table {
                width:100%;
                margin: 0;
                }
                img{
                            width: 450px;
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
                background-color: #6c7ae0;
                font-family: Poppins-Regular;
                font-size: 18px;
                padding-top: 19px;
                padding-bottom: 19px;
                padding-left: 10px;
                }
                td {
                font-family: Poppins-Regular;
                font-size: 15px;
                color:  #666666;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 15px;
                border-bottom: 1px solid #f2f2f2;
                }
                td:nth-child(even) {
                background-color: lightblue;
                }
                td:nth-child(odd) {
                background-color: #d8d8ef;
                }
                a {
                    background: #4CAF50;
                    border-right: 1px solid rgba(0, 0, 0, .3);
                    color: #fff;
                    padding: 12px 20px;
                    text-decoration: none;
                    text-align:center;
                }
                a:hover {
                    background: #4CAF50;
                    box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .3);
                }
                
                ul.topnav {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: lightblue;
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
            <div class="blue">
                <img src="img/slika.png" alt="">
            </div>
            

            <form action="signup.php" method = "POST">
            <label for="pass">Username:</label>
            <input type="text" name="newUsername" value=""><br>
            <br>
            <br>
            <label for="newPass">Sifra:</label>
            <input type="password" name="newPass" value="">
            <br>
            <br>

            <label for="newPass2">Ponovljena sifra:</label>
            <input type="password" name="newPass2" value="">
            <br>
            <br>    
            <input type="submit" value="Registruj se">

        </form>

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                
                            </ul>
                       
                        </div>
                    </div>
                </div>
        
                <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                        </div>
                    </div>
        </footer>
    </div>




        
        
</body>

</html>