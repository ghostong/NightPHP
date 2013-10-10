<?php

define ('NP_DS' , DIRECTORY_SEPARATOR);

defined ('NP_P') or define('NP_P',dirname(__FILE__).NP_DS); //Framework path

defined ('NP_CORE_P') or define ('NP_CORE_P',NP_P.'Core'.NP_DS); //Framework core path

require (NP_CORE_P.'Night.Config.php'); //Core config file

require (NP_FUNC_F); //Core function

require (NP_CLASS_F); //Core class
