<?php

$datas = array();

$datas[1] = "test";
$datas[2] = "auitre test";

if (!empty($datas)){
    return json_encode($datas);
}