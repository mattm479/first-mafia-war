<?php
session_start();
date_default_timezone_set('America/New_York');
require_once '../vendor/autoload.php';

use Fmw\Application;

$application = new Application();

require_once 'global_func.php';

checkLevel($application);
