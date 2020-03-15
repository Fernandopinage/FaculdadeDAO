<?php 

require_once "../app/db/ConnectFactory.php";

   abstract class Dao{


    public function __construct()
    {
        $this->con = ConnectFactory :: getConection();
    }


   


    }


?>