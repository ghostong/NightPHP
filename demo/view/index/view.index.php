<?php
echo <<<PHPEOF
<html>
    <head>
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
PHPEOF;

