<?php

function NC($ClassName,&$Var=false){
    $IncFile = NP_CLASS_P.'class.'.$ClassName.'.php';
    require_once ($IncFile) ;
	if($Var!==false){
		$Var = new $ClassName;
		return $Var;
	}
}

function NF($FunctionFile){
    $IncFile = NP_FUNC_P.'function.'.$FunctionFile.'.php';
    require_once ($IncFile) ;
}


function UC($ClassName,&$Var=false){
    $IncFile = U_CLASS_P.'class.'.$ClassName.'.php';
    require_once ($IncFile) ;
	if($Var!==false){
		$Var = new $ClassName;
		return $Var;
	}
}

function UF($FunctionFile){
    $IncFile = U_FUNC_P.'function.'.$FunctionFile.'.php';
    require_once ($IncFile) ;
}

function npinfo(){
    $IncFile = NP_CORE_P.'Night.InfoPage.php';
    require($IncFile);
}
