<?php

$datas = array();

$datas[1] = "test";
$datas[2] = "autre test";

if (!empty($datas)){
    return json_encode($datas);
}