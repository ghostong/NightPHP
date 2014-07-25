<?php

class NightPHP {

    public $Page404 = false; //Is open 404 page
    private $CoFile; //Combo file name
    private $ViFile; //View file name
    private $argvRet = array(); //$_GET argv
    private $ErrFile = '';

    public function Run () { //Main
        $this -> argvRet = $this -> getArgv();
        try {
            $this -> getLogicFile();
            require ($this -> logicFile);
            if (defined('NP_READ_COMBO')){
                $this -> getComboFile();
                require ($this -> comboFile);
            }
            if (defined('NP_READ_VIEW')){
                $this -> getViewFile();
                require ($this -> viewFile);
            }
        }catch(Exception $NPError){
            $err = $NPError -> getMessage();
            $this -> NPException($err);
        }
    }

    public function ReadCombo($ComboFille = false){
        define('NP_READ_COMBO',true);
        if ($ComboFille){
            $this -> CoFile = $ComboFille;
        }

    }

    public function ReadView($ViewFile = false){
        define('NP_READ_VIEW',true);
        if ($ViewFile){
            $this -> ViFile = $ViewFile;
        }
    }

    private function getArgv(){
        $CtParam = $_GET[CT_PARAM]? $_GET[CT_PARAM] : 'index';
        $AcParam = $_GET[AC_PARAM]? $_GET[AC_PARAM] : 'index';
        $Ret = array('CtParam' => $CtParam,'AcParam' => $AcParam);
        return $Ret;
    }

    private function getLogicFile(){
        $this -> logicFile = U_L_P.$this -> argvRet['CtParam'].NP_DS.U_LOGIC.'.'.$this -> argvRet['AcParam'].".php";
        if (!is_file($this -> logicFile)) {
            $this -> ErrFile = $this -> logicFile;
            throw new Exception('NightPHP404');
        }
    }

    private function getComboFile(){
        if ($this -> CoFile){
            $this -> comboFile = $this -> CoFile;
        }else{
            $this -> comboFile = U_C_P.$this->argvRet['CtParam'].NP_DS.U_COMBO.'.'.$this -> argvRet['AcParam'].".php";
        }
        if (!is_file($this -> comboFile)) {
            $this -> ErrFile = $this -> comboFile;
            throw new Exception('NightPHP404');
        }
    }

    private function getViewFile(){
        if ($this -> ViFile) {
            $this -> viewFile = $this -> ViFile;
        }else{
            $this -> viewFile = U_V_P.$this -> argvRet['CtParam'].NP_DS.U_VIEW.'.'.$this -> argvRet['AcParam'].".html";
        }
        if (!is_file($this -> viewFile)) {
            $this -> ErrFile = $this -> viewFile;
            throw new Exception('NightPHP404');
        }
    }

    private function NPException($err){
        if($err=='NightPHP404'){
            if($this -> Page404){
                die('404 Page');
            }else{
                die('No such file '.$this -> ErrFile);
            }
        }else{
            echo $err;
        }
        
    }

}
