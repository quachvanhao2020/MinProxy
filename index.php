<?php
error_reporting(0);
error_reporting(E_ALL);
require_once __DIR__."/vendor/autoload.php";
use Proxy\Http\Request;
use Proxy\Proxy;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$request = Request::createFromGlobals();
$proxy = new Proxy();
$response = $proxy->forward($request,$_ENV['HOST'].$_SERVER['REQUEST_URI']);
$response->send();