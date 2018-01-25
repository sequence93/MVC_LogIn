<?php  
    if ($_POST) {

        //login
        if (isset($_POST['submit']) AND $_POST['submit'] == "Login") 
        {
            $korisnicko = $_POST['korisnicko'];
            $sifra = $_POST['sifra'];

            try {
                include './models/Login.php';
                $login = new Login($korisnicko, $sifra);

                if ($login == TRUE) 
                {
                   session_start();
                   $_SESSION['korisnicko'] = $korisnicko;
                   header('Location:index.php');
                   
                }
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }
        //registracija
        if (isset($_POST['submit']) AND $_POST['submit'] == "Registruj") {
            $podaci['ime'] = $_POST['ime'];
            $podaci['prezime'] = $_POST['prezime'];
            $podaci['korisnicko'] = $_POST['korisnicko'];
            $podaci['email'] = $_POST['email'];
            $podaci['sifra'] = $_POST['sifra'];
            $podaci['drzava'] = $_POST['drzava'];
            $podaci['grad'] = $_POST['grad'];
            $podaci['adresa'] = $_POST['adresa'];
            
            try 
            {
                include './models/Register.php';
                new Registruj($podaci);
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }
    } 
    else {
        include '/login.php';
    }
?>