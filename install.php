<?php

$_GET['p'] ? $_GET['p'] :$_GET['p'] = 1;
$CoreFile = $_POST['CoreFile'];
$ProjPath = $_POST['ProjPath'];

echo 'step'.$_GET['p'] ."<br/>";

if($_GET['p'] == 1){

    echo <<<EOF
    NightPHP  安装程序<br/>
    请指定安装程序和安装目录的相对路径
    <form method='post' action='install.php?p=2'>
        核心程序路径:<input type='text' name='CoreFile' value='$CoreFile' /><br/>
        项目安装目录:<input type='text' name='ProjPath' value='$ProjPath' /><br/>
        <input type='submit' value='下一步'/>
    </form>
EOF;

}elseif($_GET['p'] == 2){

    $aaa = $bbb = false;

    if ($_POST['mnext']){
        is_dir($ProjPath) || mkdir($ProjPath);
        $tips1 = $ProjPath.'目录创建成功<br/>';
    }
    
    if ($CoreFile && is_file($CoreFile)){
        $aaa = true;
    }else{
        echo <<<EOF
            没有找到 $CoreFile 文件<br/>
            <form method='post' action='install.php?p=1'>
                <input type='hidden' name='CoreFile' value='$CoreFile' />
                <input type='hidden' name='ProjPath' value='$ProjPath' />
                <input type='submit' value='上一步' />
            </form>

EOF;
        exit;
    }

    if(is_dir($ProjPath)){
        $bbb = true;
    }else{
        echo <<<EOF
        没有找到 $ProjPath 目录<br/>
        是否创建?
        <form method='post' action='install.php?p=1'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='上一步' />
        </form>
        <form method='post' action='install.php?p=2'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='下一步' name='mnext'/>
        </form>
EOF;

    }

    if ($aaa && $bbb){

        echo <<<EOF
        $tips1
        符合安装条件,是否继续?<br/>
        <form method='post' action='install.php?p=1'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='上一步' />
        </form>
        <form method='post' action='install.php?p=3'>
            <input type='hidden' name='CoreFile' value='$CoreFile' />
            <input type='hidden' name='ProjPath' value='$ProjPath' />
            <input type='submit' value='下一步'/>
        </form>
EOF;
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
        'view/index/view.index.php',
        'lib/class/class.test.php',
        'lib/function/function.test.php',
    );

    foreach($fileArr as $val){
        $file=$ProjPath."/".$val;
        is_file($file) || touch($file);
    }

    //index.php
    $indexFileStr = "<?php
require ( \"".realpath($CoreFile)."\" );
\$NightPHP = new NightPHP;
\$NightPHP -> Run();";
    file_put_contents ($ProjPath.'/index.php',$indexFileStr);

    $viewFileStr="<?php
    echo <<<NPEOF
    Hello World
NPEOF;
";

    file_put_contents ($ProjPath.'/view/index/view.index.php',$viewFileStr);

    echo '安装成功!!';


}
