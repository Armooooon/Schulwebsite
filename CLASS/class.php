<?php
//von Aron Halaoui
define('HOST', 'http://127.0.0.1/Schulwebseite/');
//Inkludieren benötigter klassen
include_once 'Layout.php';
include_once 'db.php';
//Verbindungsaufbau siehe CLASS/DB.php
db::init();
//db::connect('127.0.0.1', 'root', 'dbHOST', 'dbNAME');