<?php

// Make auto loading work.
include '../vendor/autoload.php';

function isPost() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function isGet() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

// Pretty errors.
$whoops = new Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PlainTextHandler());
$whoops->register();

$location = trim($_SERVER['REQUEST_URI'], '/');
if (strpos($location, '?') >= 0) {
    $location = explode('?', $location)[0];
}

$parts = explode('/', $location);
$controllerName = array_shift($parts) ?: 'home';
$controllerAction = array_shift($parts) ?: 'index';

$pageFile = "../pages/$controllerName/$controllerAction.php";
if (!file_exists($pageFile)){
    $pageFile = "../pages/404.php";
}


$controllerClass = "\\App\\Controllers\\{$controllerName}Controller";
/** @var \App\Core\Controller $controller */
$controller = new $controllerClass();
$controller->$controllerAction();

$data = $controller->getData();

include '../layouts/template.php';
