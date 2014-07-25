<?php

$PageTitle = "Night 帮助手册";

$TeachList = array (
    1 => array (
        'title' =>'NightPHP 简介',
        'content' =>'NightPHP 是一种全新的PHP与HTML分层的设计理念.虽然没有达到彻底分开,但是他使PHP与HTML结合更简单!'
    ),
    2 => array (
        'title' =>'NightPHP 核心',
        'content' =>array (
            1 => array (
                'title'=>'NightPHP主文件(NightPHP.php)',
                'content' =>'新项目开启时,包含此文件即可开始开发'
            ),
            2 => array (
                'title' => 'NightPHP核心目录(Core)',
                'content' => '主目录中有三个文件 Night.Class.php , Night.Function.php , Night.Config.php . 分别为主类文件 , 主函数文件 , 主配置文件.',
            ),
            3 => array (
                'title' => '高级别函数与类库(Lib)',
                'content' => '用于存放高级别或跨项目的函数与类库.命名规范例如:function.String.php , class.String.php',
            ),
        ),
    ),
    3 => array (
        'title' => 'NightPHP 安装',
        'content' => array (
            1 => array (
                'title' =>'Step 1',
                'content' => '选择NighePHP核心文件 NightPHP.php 的所在位置,例如 ../../NightPHP.php . 选择Web服务要安装的目录,例如 /www/webroot',
            ),
            2 => array (
                'title' =>'Step 2',
                'content' => '如果符合条件请点下一步,如果没有找到NightPHP.php 请点上一步重新填写NightPHP.php所在路径,安装目录不存在时 请确认是否要创建',
            ),
            3 => array (
                'title' =>'Step 3',
                'content' => '安装成功,请修改安装文件install.php的文件名称,使用浏览器访问项目目录.',
            ),
        ),
    ),
    4 => array (
        'title' =>'NightPHP demo',
        'content' =>array(
            1 => array(
                'title' => '入口文件(index.php)',
                'content' => 'NightPHP 是单一入口模式的框架.方便管理与布局',
            ),
            2 => array (
                'title' => '函数与类库目录(lib)',
                'content' => '当前项目的函数与类文件写在此目录下',
            ),
            3 => array (
                'title' => '逻辑层目录(logic)',
                'content' => '单纯的PHP层,用于获取各种数据.子目录为CT名,文件为AC名.',
            ),
            4 => array (
                'title' => '整合层目录(combo)',
                'content' => '用户组合数据模型,拼合HTML.子目录为CT名,文件为AC名.',
            ),
            5 => array (
                'title' => '显示层目录(view)',
                'content' => '单纯的HTML显示层.子目录为CT名,文件为AC名.',
            ),
        ),
    ),
    5 => array (
        'title' => 'NightPHP 语言参考',
        'content' => array(
            1=> array(
                'title' => 'function NC(\'classname\');',
                'content' => '直接调用核心类',
            ),
            2=> array(
                'title' => 'function NF(\'function file\');',
                'content' => '直接包含核心函数文件',
            ),
            3=> array(
                'title' => 'function UC(\'classname\');',
                'content' => '直接调用用户类',
            ),
            4=> array(
                'title' => 'function UF(\'function file\');',
                'content' => '直接包含用户函数文件',
            ),
        ),
    ),
    6 => array (
        'title' => 'GitHub 托管地址',
        'content' => 'https://github.com/ghostong/NightPHP',
    ),
);


$this -> ReadCombo();
