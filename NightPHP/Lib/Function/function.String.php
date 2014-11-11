<?php

//convert GBK string to UTF-8
function gb2u($str){
    return mb_convert_encoding($str,'UTF-8','GBK');
}

//convert UTF-8 string to GBK
function u2gb($str){
    return mb_convert_encoding($str,'GBK','UTF-8');
}

//sub GBK string
function SubGbkStr($str,$start,$length=''){
    $length or $length = mb_strlen($str,'GBK');
    $RetStr = mb_substr($str,$start,$length,'GBK');
    return $RetStr;
}

//sub UTF-8 string
function SubUtf8Str($str,$start,$length=''){
    $length or $length = mb_strlen($str,'UTF-8');
    $RetStr = mb_substr($str,$start,$length,'UTF-8');
    return $RetStr;
}
