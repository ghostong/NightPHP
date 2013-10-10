<?php

foreach ($TeachList as $key => $val) {
    $PageShow .= '<span class=\'teachtitle\'><b>'.$key . '.' . $val['title']."</b></span><br/>";
    if (is_array ( $val['content']) ){
        foreach ($val['content'] as $skey => $sval) {
            $PageShow .= '&nbsp;&nbsp;'.$skey .')'.$sval['title'].'<br/>';
            $PageShow .= '&nbsp;&nbsp;&nbsp;&nbsp;'.$sval['content'].'<br/>';
        }
    }else{
        $PageShow .= '&nbsp;&nbsp;'.$val['content']."<br/>";
    }
    $PageShow .='<br/>';
}
