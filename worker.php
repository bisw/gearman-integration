<?php

define('GEARMAN_ROOT', __DIR__);

require GEARMAN_ROOT . '/config.php';
require_once GEARMAN_ROOT . '/fa_autoload.php';


$worker = new FaGearmanWorker();
$worker->processWorker();
