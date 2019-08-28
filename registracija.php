<?php
    require_once 'konekcija.php';

    if(!empty($_POST))
    {
        
        $user=$conn->real_escape_string($_POST['user']);
        $pass=$conn->real_escape_string($_POST['pass']);
        $repeatPass=$conn->real_escape_string($_POST['repeatPass']);
    
    }




?>

        <form method="POST" action="registracija.php">
            <label >Username:</label>
            <input type="text" name="user" value="">
            <br><br>
            <label >Password:</label>
            <input type="password" name="pass" value="">
            <br><br> 
            <label >Repeat password:</label>
            <input type="password" name="repeatPass" value="">
            <br><br>   
            <input type="submit" value="Register">
        </form>