<?php
require_once($_SERVER['DOCUMENT_ROOT']."/inc/common.php");

$contentblock = 'content!!';

$contentDoc = <<<EOL
<p>ヒアドキュメントです！！</p>
<p>ヒアドキュメントです！！</p>
<p>ヒアドキュメントです！！</p>
EOL;

$contentInc = 'company';


echo $twig->render('roottest.twig',
                        array(
                            'contentblock' => $contentblock,
                            'contentDoc' => $contentDoc,
                            'contentInc' => $contentInc,
                        )
                    );
