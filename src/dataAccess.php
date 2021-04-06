<?php

require_once 'data.php';
require_once 'functions.php';

$instance = null;

function connect(){
    $instance = new mysqli($dbDatas["host"],$dbDatas["user"],$dbDatas["password"],$dbDatas["database"]);

    if($instance === false){
        echo "Failed to connect to database";
    }
}