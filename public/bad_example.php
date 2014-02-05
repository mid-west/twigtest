<?php
require_once($_SERVER['DOCUMENT_ROOT']."/../lib/Twig/Autoloader.php");

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT']."/../tpl");
$twig = new Twig_Environment($loader, array(
    //'cache' => $_SERVER['DOCUMENT_ROOT']."/../cache",
    //'debug' => true,
));



echo $twig->render('bad_example.twig',
                        array(

                        )
                    );
