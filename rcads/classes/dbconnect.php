<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author wizdom75
 */
class dbConnect {
    //
    public function __construct(){
        try{    
            $servername = '';
            $username = '';
            $password = '';
            $dbname = '';
    

    
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
//set PDO error mode exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8 
        echo 'Connection succeded';
    } catch (Exception $ex) {
        echo 'Connection failed '.$ex->getMessage();

    }
}
}
