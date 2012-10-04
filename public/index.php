<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(_FILE_)));

$url = &_GET['url'];

require_once(ROOT . DS . 'library' . DS . 'bootstrap.php');
require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'library' . DS . 'shared.php');

//purposely no ending php tag. This is to avoid injection of any extra whitespaces in our output.

