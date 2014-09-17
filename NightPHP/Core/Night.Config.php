<?php
#Path Config

##version
define('NP_NAME','NightPHP');
define('NP_VERSION','0.0.1(beta)');

##Framework
defined('NP_FUNC_F')  or define('NP_FUNC_F'  ,NP_CORE_P.'Night.Function.php'); //Core Function
defined('NP_CLASS_F') or define('NP_CLASS_F' ,NP_CORE_P.'Night.Class.php'); //Core Class
defined('NP_LIB_P')   or define('NP_LIB_P'  ,NP_P.'Lib'.NP_DS); //Core Lib
defined('NP_CLASS_P') or define('NP_CLASS_P',NP_LIB_P.'Class'.NP_DS); //Core Lib Class Path
defined('NP_FUNC_P')  or define('NP_FUNC_P' ,NP_LIB_P.'Function'.NP_DS); //Core Lib Function Path

##User
defined('U_APP_P')   or define('U_APP_P'  ,WEBROOT_DIR.NP_DS); //User App Path
defined('U_LIB_P')   or define('U_LIB_P'  ,U_APP_P.'lib'.NP_DS); //User App lib Path
defined('U_CLASS_P') or define('U_CLASS_P',U_LIB_P.'class'.NP_DS); //Core Lib Class Path
defined('U_FUNC_P')  or define('U_FUNC_P' ,U_LIB_P.'function'.NP_DS); //Core Lib Class Path

defined('U_LOGIC') or define('U_LOGIC','logic'); //Logic dir name
defined('U_COMBO') or define('U_COMBO','combo'); //Combo dir name
defined('U_VIEW')  or define('U_VIEW','view'); // View dir name

defined('U_L_P') or define('U_L_P',U_APP_P.U_LOGIC.NP_DS); //Project Logic Dir
defined('U_C_P') or define('U_C_P',U_APP_P.U_COMBO.NP_DS); //Project Combo Dir
defined('U_V_P') or define('U_V_P',U_APP_P.U_VIEW.NP_DS); //Project View Dir

defined('CT_PARAM') or define('CT_PARAM' , 'ct');
defined('AC_PARAM') or define('AC_PARAM' , 'ac');

