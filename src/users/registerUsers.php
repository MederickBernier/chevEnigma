<?php
session_start();

require_once '../functions.php';
require_once '/data/users.data.php';
require_once '../data.php';

/*if(!refererVerificator('login.php')){
    $path = '../../register.php';
    header("Location:".$path);
    exit;
}*/


echo "REGISTER";
//create the dataAccess object