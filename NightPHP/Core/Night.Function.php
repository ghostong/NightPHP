<?php

function NC($ClassName){
    $IncFile = NP_CLASS_P.'class.'.$ClassName.'.php';
    require_once ($IncFile) ;
    return new $ClassName;
}

function NF($FunctionFile){
    $IncFile = NP_FUNC_P.'function.'.$FunctionFile.'.php';
    require_once ($IncFile) ;
}


function UC($ClassName){
    $IncFile = U_CLASS_P.'class.'.$ClassName.'.php';
    require_once ($IncFile) ;
    return new $ClassName;
}

function UF($FunctionFile){
    $IncFile = U_FUNC_P.'function.'.$FunctionFile.'.php';
    require_once ($IncFile) ;
}

function npinfo(){
    $IncFile = NP_CORE_P.'Night.InfoPage.php';
    require($IncFile);
}
