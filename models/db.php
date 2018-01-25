<?php 
    class Baza
    {
        private $host;
        private $user;
        private $passowrd;
        private $db;

        function __construct($filename)
        {
            if (is_file($filename)) include $filename;
            else throw new Exception("Error!");
            
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->db = $db;

            $this->connect();
        }
        private function connect()
        {
            if(!mysql_connect($this->host, $this->user, $this->password))
                throw new Exception("Nije uspostavljena veza sa serverom");
            
            if(!mysql_select_db($this->db))
                throw new Exception("Nije pronadjena baza podataka");
        }

        function close()
        {
            mysql_close();
        }
    }
?>