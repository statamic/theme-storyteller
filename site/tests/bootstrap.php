<?php

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$statamic = '../../statamic';
$control_panel = 'cp';
$locale = 'en';
$site_root = '/';
define('STATAMIC_ROOT', __DIR__.'/../');
define('APP', realpath(__DIR__.'/../../statamic'));

require __DIR__ . '/../../statamic/bootstrap/start.php';
