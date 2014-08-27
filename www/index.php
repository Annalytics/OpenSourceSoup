<?php
require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Soup\Soup as Soup;

$twigView = new \Slim\Views\Twig();

$app = new \Slim\Slim(array(
		'view' => $twigView,
		'templates.path' => '../templates/',
		'mode' => 'production'
));

$capsule = new Capsule;

$app->config(array(
		'log.enable' => true,
		'debug' => false
));
$capsule->addConnection(array(
		'driver'    => 'mysql',
		'host'      => 'localhost',
		'database'  => 'test',
		'username'  => 'soup',
		'password'  => 'soup',
		'prefix'    => '',
		'charset'   => 'utf8',
		'collation' => 'utf8_general_ci',
));

$capsule->bootEloquent();
$capsule->setAsGlobal();
$conn = $capsule->connection();

$app->get('/', function() use ($app) {
	$soups = Soup::all();
	
	$app->render("index.html", array('hello' => 'Hello World', 'soups' => $soups));
});

$app->get('/addsoup', function() use ($app) {
	
	$soup1 = Soup::create(array('name' => 'Tomato', 'temperature' => 'hot'));
	$soup2 = Soup::create(array('name' => 'Vichyssoise', 'temperature' => 'cold'));
	$app->response->redirect('/');
});

$app->run();
?>