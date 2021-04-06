<?php
require_once '../functions.php';

if(!refererVerificator('login.php')){
    $path = '../../login.php';
    header("Location:".$path);
    exit;
}

echo "<pre>";

print_r($_POST);

echo "</pre>";