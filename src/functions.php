<?php

function compareCurrentPage(string $page){
    $currentPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $currentPage = substr($currentPage,0,-4);

    if($currentPage != "index" && $currentPage == $page){
        return true;
    }else{
        return false;
    }
}