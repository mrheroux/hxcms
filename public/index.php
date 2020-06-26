<?php
/**
 * This file is part of the Hoopless package.
 *
 * (c) Ouxsoft <contact@ouxsoft.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use LivingMarkup\Autoloader;

require_once '../vendor/autoload.php';

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// define common directories
define('ROOT_DIR', dirname(__DIR__, 1) . '/');
define('PUBLIC_DIR', ROOT_DIR . 'public/');
define('ASSET_DIR', ROOT_DIR . 'assets/');
define('IMAGE_DIR', ASSET_DIR . 'images/');

// set include path
set_include_path(ROOT_DIR);

/**
 * Route traffic to a specific file
 * (chances are if response is blank the document is missing a root element)
 */

global $proc;
$proc = new LivingMarkup\Processor();
$proc->loadConfig(dirname(__DIR__, 1) . '/app/config/config.dist.yml');

$proc->parseBuffer();

$router = new Hoopless\Router();
$router->response();