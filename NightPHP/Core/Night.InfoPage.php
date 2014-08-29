<?php
$nptitle = NP_NAME.' Version '.NP_VERSION;
$npname = NP_NAME;

$allconstant = get_defined_constants(true);
$constantArr = $allconstant['user'];
$constantList ='';
foreach ($constantArr as $key => $val){
    $constantList .="<tr><td class='npkey'>{$key}</td><td class='npval '>$val</td></tr>";
}


echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=Content-Type content='text/html;charset=utf-8'>
        <title>npinfo()</title>
        <style>
            body {text-align: center;font-size:14px;}
            td, th { border: 1px solid #000000; font-size: 75%; }
            .npkey {background-color: #ccccff; font-weight: bold; color: #000000; }
            .npval {background-color: #cccccc; color: #000000; }
        </style>
    </head>
    <body>
        <table align='center' style='font-size:32px;font-weight:bold;background:#9999cc;width:600px;height:34px;'>
            <tr><td>{$nptitle}</td></tr>
        </table>
        
        <h1>constant</h1>
        <table align='center' style='text-align:left;'>
            <tr><td class='npkey' colspan=2> NP:System CT:control AC:action P:path F:file L:logic C:combo V:view</td></tr>
            $constantList
        </table>
    </body>
</html>";
