<?php
/**
 * in production we are using Autoloader
 * require functions is today absolited
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');

require_once('./controller/UserController.php');

$user = new UserController();

$result = $user->register();
echo json_encode($result);