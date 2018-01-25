<?php
    /**
    * 
    */
    class Login
    {
        private $korisnicko;
        private $sifra;
        private $cxn;
        
        function __construct($korisnicko, $sifra)
        {
            $this->setData($korisnicko, $sifra);
            $this->connectToDb();
            $this->getData();
        }

        function setData($korisnicko, $sifra) {
            $this->korisnicko = $korisnicko;
            $this->sifra = $sifra;
        }
        private function connectToDb() {
            include 'models/db.php';
            $parametri = "include/parametri.php";
            $this->cxn = new Baza($parametri);
        }
        private function getData() {
            $query = "SELECT * FROM `korisnici` WHERE `korisnicko` = '$this->korisnicko' AND `sifra` = '$this->sifra'";
            $sql = mysql_query($query);
            
            if(mysql_num_rows($sql) > 0) 
            {
                return TRUE;
            }
            else
            {
                throw new Exception("Korisnicko i sifra nisu ispravni, pokusajte ponovo.");   
            }
        }
    function close() 
    {
        mysql_close();
    }
    }
?>