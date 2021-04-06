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

function refererVerificator(string $page){
    $ref = in_array("HTTP_REFERER",$_SERVER) ? parse_url($_SERVER["HTTP_REFERER"]) : null;
    if(is_null($ref) || empty($ref)){
        return false;
    }else{
        $refPage = substr($ref["path"],12);

        if($page === $refPage){
            return true;
        }else{
            return false;
        }
    }
}