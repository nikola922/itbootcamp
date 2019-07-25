<html>

<body>
<p> Tekst u HTML-u.
</p>

<p> Dobrodosli <?php  echo $_POST['ime'];  echo  $_POST['prezime']; ?><br><br>
Vasa email adresa je : <?php echo $_POST["email"]  ?> <br><br>
Vas Website je: <?php  echo $_POST["website"]  ?> <br><br>
Vas komentar: <?php  echo $_POST["comment"]  ?> <br><br>
Vas pol:  <?php  echo $_POST["gender"]  ?> <br><br>

 </p>


</body>
</html>