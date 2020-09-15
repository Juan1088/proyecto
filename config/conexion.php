<?php

class Database{
    public static function conexion(){
        $db= mysqli('localhost','root','','sitrack');
        $db->query("SET NAME 'utf8'");
        return $db;
        
}
    
}
