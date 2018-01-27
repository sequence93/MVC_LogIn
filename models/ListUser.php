<?php

class ListUser {
    
    
    private $cxn;
    
    function connectToDb()
    {
        include 'models/db.php';
        $parametri = "include/parametri.php";
        $this->cxn = new Baza($parametri);
    }
    
    function close()
    {
        $this->cxn->close();
    }
    
}
?>
