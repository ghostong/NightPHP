<?php

class string {

    static public function RandString($len,$type){
        $len = intval ( abs($len) );
        $uchar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lchar = 'abcdefghijklmnopqrstuvwxyz';
        $num   = str_repeat('0123456789',3);
        $typeOp = array ( 
            1=>$uchar,
            2=>$lchar,
            3=>$num,
            4=>$uchar.$lchar,
            5=>$uchar.$num,
            6=>$lchar.$num,
            7=>$uchar.$lchar.$num,
        );
        if (isset ($typeOp[$type])){
            return substr ( str_shuffle( str_repeat($typeOp[$type],3) ),0,$len );
        }else{
            return false;
        }
    }

























}
