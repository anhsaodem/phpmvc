<?php
define('_DIR_ROOT', __DIR__);
//XỬ LÝ HTTP ROOT
if (!empty($_SERVER['HTTPS'] && $_SERVER['HTTPS'] == 'on')) {
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}
$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', str_replace('\\','/',strtolower(_DIR_ROOT)));
$web_root.=$folder;

define("_WEB_ROOT",$web_root);

require_once 'configs/routes.php';
require_once 'app/App.php'; //LOAD APP
require_once 'core/Controller.php'; //LOAD BASE CONTROLLER
