<?php
echo <<<NPEOF
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=GBK">
        <title>$PageTitle</title>
        <style>
            .teachtitle{
                font-size:18px;
            }
        </style>
    </head>
    <body>
        <h3>$PageTitle</h3>
        <hr/>
        $PageShow
    </body>
</html>
NPEOF;

