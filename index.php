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
require_once('./controller/RegisterController.php');
require_once('./controller/LoginController.php');

/**
 * sehr schlecht code
 */

if(isset($_GET['url']) && $_GET['url'] !='')
{
    $request = $_GET['url'];

    $userPost = $_POST;
    $name = $_POST['name'];
    //var_dump($userPost); 

    $request = trim($request);
    $request = explode('/',$request);
    $controller = ucfirst($request[0]).'Controller';
    $function = $request[1];

    $myController = new $controller();
    $result = $myController->$function($name);
    echo json_encode($result);
}
else
{
    echo json_encode('no url found , bad request');
}