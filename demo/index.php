<?php
define('WEBROOT_DIR', dirname(__FILE__));

require ( dirname ( dirname ( __FILE__ ) )."/NightPHP/NightPHP.php" );

$NightPHP = new NightPHP;

$NightPHP -> Run();
