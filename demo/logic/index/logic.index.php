<?php

$PageTitle = "Night �����ֲ�";

$TeachList = array (
    1 => array (
        'title' =>'NightPHP ���',
        'content' =>'NightPHP ��һ��ȫ�µ�PHP��HTML�ֲ���������.��Ȼû�дﵽ���׷ֿ�,������ʹPHP��HTML��ϸ���!'
    ),
    2 => array (
        'title' =>'NightPHP ����',
        'content' =>array (
            1 => array (
                'title'=>'NightPHP���ļ�(NightPHP.php)',
                'content' =>'����Ŀ����ʱ,�������ļ����ɿ�ʼ����'
            ),
            2 => array (
                'title' => 'NightPHP����Ŀ¼(Core)',
                'content' => '��Ŀ¼���������ļ� Night.Class.php , Night.Function.php , Night.Config.php . �ֱ�Ϊ�����ļ� , �������ļ� , �������ļ�.',
            ),
            3 => array (
                'title' => '�߼����������(Lib)',
                'content' => '���ڴ�Ÿ߼�������Ŀ�ĺ��������.�����淶����:function.String.php , class.String.php',
            ),
        ),
    ),
    3 => array (
        'title' => 'NightPHP ��װ',
        'content' => array (
            1 => array (
                'title' =>'Step 1',
                'content' => 'ѡ��NighePHP�����ļ� NightPHP.php ������λ��,���� ../../NightPHP.php . ѡ��Web����Ҫ��װ��Ŀ¼,���� /www/webroot',
            ),
            2 => array (
                'title' =>'Step 2',
                'content' => '����������������һ��,���û���ҵ�NightPHP.php �����һ��������дNightPHP.php����·��,��װĿ¼������ʱ ��ȷ���Ƿ�Ҫ����',
            ),
            3 => array (
                'title' =>'Step 3',
                'content' => '��װ�ɹ�,���޸İ�װ�ļ�install.php���ļ�����,ʹ�������������ĿĿ¼.',
            ),
        ),
    ),
    4 => array (
        'title' =>'NightPHP demo',
        'content' =>array(
            1 => array(
                'title' => '����ļ�(index.php)',
                'content' => 'NightPHP �ǵ�һ���ģʽ�Ŀ��.��������벼��',
            ),
            2 => array (
                'title' => '���������Ŀ¼(lib)',
                'content' => '��ǰ��Ŀ�ĺ��������ļ�д�ڴ�Ŀ¼��',
            ),
            3 => array (
                'title' => '�߼���Ŀ¼(logic)',
                'content' => '������PHP��,���ڻ�ȡ��������.��Ŀ¼ΪCT��,�ļ�ΪAC��.',
            ),
            4 => array (
                'title' => '���ϲ�Ŀ¼(combo)',
                'content' => '�û��������ģ��,ƴ��HTML.��Ŀ¼ΪCT��,�ļ�ΪAC��.',
            ),
            5 => array (
                'title' => '��ʾ��Ŀ¼(view)',
                'content' => '������HTML��ʾ��.��Ŀ¼ΪCT��,�ļ�ΪAC��.',
            ),
        ),
    ),
    5 => array (
        'title' => 'NightPHP ���Բο�',
        'content' => array(
            1=> array(
                'title' => 'function NC(\'classname\');',
                'content' => 'ֱ�ӵ��ú�����',
            ),
            2=> array(
                'title' => 'function NF(\'function file\');',
                'content' => 'ֱ�Ӱ������ĺ����ļ�',
            ),
            3=> array(
                'title' => 'function UC(\'classname\');',
                'content' => 'ֱ�ӵ����û���',
            ),
            4=> array(
                'title' => 'function UF(\'function file\');',
                'content' => 'ֱ�Ӱ����û������ļ�',
            ),
        ),
    ),
    6 => array (
        'title' => 'GitHub �йܵ�ַ',
        'content' => 'https://github.com/ghostong/NightPHP',
    ),
);


$this -> ReadCombo();
