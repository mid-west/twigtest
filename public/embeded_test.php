<?php
require_once($_SERVER['DOCUMENT_ROOT']."/../lib/Twig/Autoloader.php");

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/../tpl");
$twig = new Twig_Environment($loader, array(
    //'cache' => $_SERVER['DOCUMENT_ROOT']."/../cache",
));


echo $twig->render('embeded_test.twig',
                        array(

                        )
                    );
