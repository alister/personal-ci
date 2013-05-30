<?php

chdir(dirname(__DIR__));    // set cwd to the basedir.
require_once 'vendor/autoload.php';

defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(__DIR__ . '/../application'));
