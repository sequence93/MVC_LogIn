<?php

    if (!isset($_SESSION['korisnicko'])) 
    {
        include '/login.php';
        die();
    }

    include 'models/ListUser.php';
    include 'models/Prikaz.php';
    $tablename = "Korisnici";
    $displaySec = new Prikaz($tablename);
    $SecDataDisplay = $displaySec->getAllData();
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MVC LogIn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mladen Milosavljevic">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  <table id="Korisnici">
    <tr>
      <th>ID</th>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Korisnicko</th>
      <th>Email</th>
      <th>Drzava</th>
      <th>Grad</th>
      <th>Adresa</th>
    </tr>
    <?php
    for ($i = 0; $i < count($SecDataDisplay); $i++) {
        echo "            
                <tr>
                    <td>{$SecDataDisplay[$i]['korisnik_id']}</td>
                    <td>{$SecDataDisplay[$i]['ime']}</td>
                    <td>{$SecDataDisplay[$i]['prezime']}</td>
                    <td>{$SecDataDisplay[$i]['korisnicko']}</td>
                    <td>{$SecDataDisplay[$i]['email']}</td>
                    <td>{$SecDataDisplay[$i]['drzava']}</td>
                    <td>{$SecDataDisplay[$i]['grad']}</td>
                    <td>{$SecDataDisplay[$i]['adresa']}</td>
                </tr>
            ";
        }
    ?>
  </table>
</body>
</html>
