<?php  

/**
* 
*/
class Registruj
{
    private $ime;
    private $prezime;
    private $korisnicko;
    private $email;
    private $sifra;
    private $drzava;
    private $grad;
    private $adresa;
    private $cxn;

    function __construct($podaci)
    {
        if(is_array($podaci))
        {
            $this->setData($podaci);
        }
        else
        {
            throw new Exception("Error");
        }
        $this->connectToDb();

        $this->registracijaKorisnika();
    }

    private function setData($podaci) 
    {
        $this->ime = $podaci['ime'];
        $this->prezime = $podaci['prezime'];
        $this->korisnicko = $podaci['korisnicko'];
        $this->email = $podaci['email'];
        $this->sifra = $podaci['sifra'];
        $this->drzava = $podaci['drzava'];
        $this->grad = $podaci['grad'];
        $this->adresa = $podaci['adresa'];
    }

    private function connectToDb() 
    {
        include 'models/db.php';
        $parametri = "include/parametri.php";
        $this->cxn = new Baza($parametri);
    }

    function registracijaKorisnika()
    {
        $query = "INSERT INTO `korisnici` (`korisnik_id`, `ime`, `prezime`, `korisnicko`, `email`, `sifra`, `drzava`, `grad`, `adresa`) VALUES ('', '$this->ime', '$this->prezime', '$this->korisnicko', '$this->email', '$this->sifra', '$this->drzava', '$this->grad', '$this->adresa')";

        $sql = mysql_query($query);
        if($sql) {   
            header('Location:index.php');
            echo "<script>alert('Uspesno ste se registrovali! ');</script>";
        } else throw new Exception("Greska, nije uspela registracija!");
        
    }
    function close()
    {
        $this->$cxn->close();
    }
}

?>