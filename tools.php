#!/usr/bin/php -q
<?php
// Check platform requirements
define('APP', __DIR__);
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

include_once __DIR__ . '/vendor/autoload.php';

use Tools\App;
use Cake\Core\functions;
use Cake\Core\Configure;
use Cake\Console\CommandRunner;

Configure::write('debug', 'true');

// Build the runner with an application and root executable name.
$runner = new CommandRunner(new App(), 'tool');
exit($runner->run($argv));
