<?php
    define('ROOT', dirname(__FILE__));

    require_once ROOT . '/core/Autoload.inc.php';

    $core = Core::getInstance();
    $core->run($_GET['path']);

