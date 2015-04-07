<?php
ini_set('display_errors', 1);
date_default_timezone_set('America/Sao_Paulo');

define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/angular/');

require ROOT.'vendor/autoload.php';
require ROOT.'autoload.php';
require ROOT.'connection.php';
require ROOT.'app/functions/functions.php';

$app = new Slim\slim(array(
    'debug' => true,
    'templates.path' => ROOT.'app/views'
));