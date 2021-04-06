<?php
session_start();

require_once '../functions.php';
require_once '../dataAccess.php';
require_once '../data.php';

if(!refererVerificator('login.php')){
    $path = '../../register.php';
    header("Location:".$path);
    exit;
}

//create the dataAccess object
$dbObject = new DataAccess($dbDatas["user"],$dbDatas["host"],$dbDatas["password"],$dbDatas["database"]);

