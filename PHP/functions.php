<?php
    require 'config.php';

    function dbConnect(){
        $mysqli = new mysqli('localhost', 'username', 'password', 'database_name');
        if($mysqli->connect_error){
            die('Connection failed: ' . $mysqli->connect_error);
        }
        return $mysqli;
    }

function getAktuelles(){

    $msqli = dbConnect();

    $result = $msqli-> query('SELECT title FROM aktuelles');

    $titel = array(); // Initialize the $titel array
    while($row = $result->fetch_assoc()){
        $titel[] = $row;
    }
    return $titel;
}