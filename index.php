<?php
session_start();  
    if (!isset($_SESSION['korisnicko'])) 
    {
        include '/LoginController.php';
        die();
    }
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
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="prettyPhoto.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header">
            <ul>
              <li><a class="active" href="index.php">Home</a></li>
              <li><a href="?page=listuser">List All User</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <section id="page">
                <?php
                    if (@$_GET[page]) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo "Fajl nije pronadjen";
                        }
                    }   else {
                        include './main.php';
                    }
                ?>
            </section>
        </div>
    </div>
    <footer>
        <p>Copyright - Mladen Milosavljevic</p>
    </footer>
</body>
</html>