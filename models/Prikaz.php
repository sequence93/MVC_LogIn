<?php 
    
    class Prikaz extends ListUser 
    {
    private $tablename;
    
    public function __construct($tablename) {
        $this->tablename = $tablename;
        $this->connectToDb();
    }
    function getAllData()
    {
         $query = "SELECT * FROM `$this->tablename`";   
         if (!$sql = mysql_query($query)) {
            throw new Exception("Error: Can not excute the query.");
        } else {
            $num = mysql_num_rows($sql);
            if($num>0)
            {
                for($i=0; $i<$num; $i++)
                {
                    $data[$i] = mysql_fetch_array($sql);
                }                    
            }
        }
        return $data;
    }
}
?>