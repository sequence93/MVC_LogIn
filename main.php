<h2>Hello <?php  
    if (isset($_SESSION['korisnicko'])) 
    {
        echo $_SESSION['korisnicko'];
    }
?></h2>