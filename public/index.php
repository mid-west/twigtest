<?php
require_once($_SERVER['DOCUMENT_ROOT']."/../lib/Twig/Autoloader.php");

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/../tpl");
$twig = new Twig_Environment($loader, array(
    //'cache' => $_SERVER['DOCUMENT_ROOT']."/../cache",
));

//
$data = array('a','b','c','d','e');//tplで直接参照可能($data[0]のように渡しても良い)
$define1 = 'defined!';//

//フィルタ
$htmltags = '<p>firstname, lastname</p>';

echo $twig->render('index.twig',
                        array(
                            'value1' => $define1,
                            'value2' => $data,
                            'value3' => $data[1],
                            'name' => $htmltags,
                        )
                    );
