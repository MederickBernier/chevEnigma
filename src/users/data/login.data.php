<?php
session_start();

require_once '../../dataAccess.php';

/*
    This file will contain the functions specifics for the login, so sessions and other things around
*/

function login(string $username, string $password, string $confirmPassword){
    //make sure the sql instance is usable.
    usable();

    //prepare the sql query
    $stmt = $instance->prepare("SELECT * FROM players WHERE Username=? AND Password=?");

    //bind the params
    $stmt->bind("ss",$user, $pass);

    //hash password and confirmPassword
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedConfirmPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);

    if($hashedPassword === $hashedConfirmPassword){
        $user = $username;
        $pass = $hashedPassword;
        $stmt->execute();
    }

    $stmt->close();
    $instance->close();
}
