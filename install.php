<?php

$_GET['p'] ? $_GET['p'] :$_GET['p'] = 1;
$CoreFile = $_POST['CoreFile'];
$ProjPath = $_POST['ProjPath'];

echo <<<PNEOF
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=GBK">
        <title>NightPHP��װ����-Step {$_GET['p']}</title>
    </head>
    
    <body>
    <h3>Step {$_GET['p']} </h3>

PNEOF;

if($_GET['p'] == 1){

    echo <<<PNEOF
    NightPHP  ��װ����<br/>
    ��ָ����װ����Ͱ�װĿ¼�����·��
    <form method='post' action='install.php?p=2'>
        ���ĳ���·��:<input type='text' name='CoreFile' value='$CoreFile' /><br/>
        ��Ŀ��װĿ¼:<input type='text' name='ProjPath' value='$ProjPath' /><br/>
        <input type='submit' value='��һ��'/>
    </form>
PNEOF;

}elseif($_GET['p'] == 2){

    $aaa = $bbb = false;

    if ($_POST['mnext']){
        is_dir($ProjPath) || mkdir($ProjPath);
        $tips1 = $ProjPath.'Ŀ¼�����ɹ�<br/>';
    }
    
    if ($CoreFile && is_file($CoreFile)){
        $aaa = true;
    }else{
        echo <<<PNEOF
            û���ҵ� $CoreFile �ļ�<br/>
            <form method='post' action='install.php?p=1'>
                <input type='hidden' name='CoreFile' value='$CoreFile' />
                <input type='hidden' name='ProjPath' value='$ProjPath' />
                <input type='submit' value='��һ��' />
            </form>

PNEOF;
        exit;
    }

    if(is_dir($ProjPath)){
        $bbb = true;
    }else{
        echo <<<PNEOF
        û���ҵ� $ProjPath Ŀ¼<br/>
        �Ƿ񴴽�?
        <form method='post' action='install.php?p=1'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='��һ��' />
        </form>
        <form method='post' action='install.php?p=2'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='��һ��' name='mnext'/>
        </form>
PNEOF;

    }

    if ($aaa && $bbb){

        echo <<<PNEOF
        $tips1
        ���ϰ�װ����,�Ƿ����?<br/>
        <form method='post' action='install.php?p=1'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='��һ��' />
        </form>
        <form method='post' action='install.php?p=3'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='��һ��'/>
        </form>
PNEOF;
    }
}elseif($_GET['p'] == 3){

    $dirArr = array (
        'logic/index',
        'combo/index',
        'view/index',
        'lib/class',
        'lib/function',
    );

    foreach ($dirArr as $val) {
        $dir = $ProjPath."/".$val;
        is_dir($dir) || mkdir( $dir ,NULL,true);
    }

    $fileArr = array (
        'index.php',
        'logic/index/logic.index.php',
        'combo/index/combo.index.php',
        'view/index/view.index.html',
        'lib/class/class.test.php',
        'lib/function/function.test.php',
    );

    foreach($fileArr as $val){
        $file=$ProjPath."/".$val;
        is_file($file) || touch($file);
    }

    //index.php
    $indexFileStr = "<?php
require ( '".realpath($CoreFile)."' );
\$NightPHP = new NightPHP;
\$NightPHP -> Run();";
    file_put_contents ($ProjPath.'/index.php',$indexFileStr);

    $viewFileStr="<?php
    echo <<<PNEOF
    Hello World
PNEOF;
";

    file_put_contents ($ProjPath.'/view/index/view.index.php',$viewFileStr);

    echo '��װ�ɹ�!!��ͨ����������ʰ�װĿ¼';


}

echo "</body>
</html>";
