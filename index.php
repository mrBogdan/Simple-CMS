<?php
    define('ROOT', dirname(__FILE__));

    require_once 'core/Autoload.php';

    $core = Core::getInstance();
    $core->run($_GET['path']);

