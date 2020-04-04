<?php error_reporting(E_ALL ^ E_NOTICE);


// Include Config
require('config.php');

require('classes/Bootstrap.php');

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();