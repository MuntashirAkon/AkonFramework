<?php
session_start();

require_once __DIR__ . '/../autoload.php';

use App\Route;
use Config;

date_default_timezone_set('UTC');

// If SSL is enabled but request is in HTTP, redirect to HTTPS
if(Config::USE_ONLY_SSL AND !((!empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') || (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443'))){
    header("Location: https://{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}");
    exit();
}

/**
 * For a $location, only letters, digits, underscores, dots, and hyphens are allowed
 */
$location = '/';
if(php_sapi_name() == 'cli-server') $location = $_SERVER['REQUEST_URI'];
else{
    preg_match('/^(\/?[\w\.\-]+)+(?(?=&))/', $_SERVER['QUERY_STRING'], $matches); // (?(?=&))
    $location = '/' . (isset($matches[0]) ? $matches[0] : '');
}

/**
 * Add routes
 *
 * Example codes:
 *
 * - without parameters
 * <code>
 * Route::add(Route::GET, '/', 'Main@home');
 * </code>
 *
 * - with parameters
 * <code>
 * Route::add(Route::POST, '/login', 'User@login', ['email' => Route::EMAIL, 'pass' => Route::STRING, 'remember' => Route::BOOLEAN]);
 * </code>
 *
 */

/**
 * Load views or do other specific tasks describe in the respective controller
 */
Route::load(Route::verify(strtoupper($_SERVER['REQUEST_METHOD']), $location));
exit;