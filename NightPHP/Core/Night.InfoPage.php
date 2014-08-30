<?php
$nptitle = NP_NAME.' Version '.NP_VERSION;
$npname = NP_NAME;

$allconstant = get_defined_constants(true);
$constantArr = $allconstant['user'];
$constantList ='';
foreach ($constantArr as $key => $val){
    $val = str_replace(array('/','\\'),NP_DS,$val);
    $constantList .="<tr><td class='npkey'>{$key}</td><td class='npval '>$val</td></tr>";
}


echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=Content-Type content='text/html;charset=utf-8'>
        <title>npinfo()</title>
        <style>
            body {text-align:center;font-size:14px;}
            td, th { border:1px solid #000000;font-size:75%;padding:8px}
            .npkey {background-color:#ccccff;font-weight:bold;color:#000000;}
            .npval {background-color:#cccccc;color:#000000;}
        </style>
    </head>
    <body>
        <table align='center' style='font-size:32px;font-weight:bold;background:#9999cc;width:600px;height:34px;'>
            <tr><td>{$nptitle}</td></tr>
        </table>
        
        <h1>Constant</h1>
        <table align='center' style='text-align:left;'>
            <tr><td class='npkey' colspan=2> NP:System CT:Control AC:Action P:Path F:File L:Logic C:Combo V:View</td></tr>
            $constantList
        </table>

        <h1>About</h1>
        <table align='center' style='text-align:left;'>
            <tr><td class='npkey'>Author</td><td class='npval'>Ghost</td></tr>
            <tr><td class='npkey'>QQ</td><td class='npval'>8445223</td></tr>
            <tr><td class='npkey'>Email</td><td class='npval'>ghostong@126.com</td></tr>
            <tr><td class='npkey'>GitHub</td><td class='npval'>https://github.com/ghostong/NightPHP</td></tr>
            <tr><td class='npkey'>Documentation</td><td class='npval'>http://ghostong.sinaapp.com/nightphp</td></tr>
            <tr><td class='npkey'>Last updated</td><td class='npval'>2014-08-30</td></tr>
        </table>
    </body>
</html>";
