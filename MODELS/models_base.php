<?php

class base
{


    public function loadDb()
    {
        return $db = new PDO('mysql:host=mysql-tpphp.alwaysdata.net;dbname=tpphp_bd', 'tpphp', 'ericzemour');
    }

    public function execQuery($query)
    {
        return $this->loadDb()->query($query);
    }

}