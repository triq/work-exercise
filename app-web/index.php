<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
//Basic route, the simplest one
$app->get('/', function(){
	//load models here...
	$g = "some model";
	//interface for view: g = array of stats.
	$r = include('stats_view.php');
	return new Symfony\Component\HttpFoundation\Response($r);
});

$app['debug'] = true;

$app->run();

?>