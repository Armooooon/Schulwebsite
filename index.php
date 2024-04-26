<?php
require_once 'CLASS/class.php';
require_once'CLASS/db.php'; 
//init
db::init();
//$person = person::getById($_GET['idPerson']);
//$personen = person::GetAllPersonByFunktion("Schüler");

//view
require_once 'VIEW/index.php';