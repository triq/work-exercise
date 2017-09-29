<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/MYAPP/showstats/{name}', function($name) use($app) {
	$str_view = include('view/stats.php');
    return $str_view; 
});

$app->run();

?>