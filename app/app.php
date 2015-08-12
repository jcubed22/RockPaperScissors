<?php 
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/RockPaperScissors.php";
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path'=>__DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home_page.html.twig');
	});
	
	$app->get("/one_player", function() use ($app) {
		return $app['twig']->render('one_player.html.twig');
	});
	$app->get("/one_player_result", function() use ($app) {
		$game = new RockPaperScissors;
		$result = $game->rochambeau($_GET['player1'], $game->computerPlayer());
		return $app['twig']->render('results.html.twig', array('result' => $result));
	});
	$app->get("/two_player", function() use ($app) {
		return $app['twig']->render('two_player.html.twig');
	});
	$app->get("/two_player_result", function() use ($app) {
		$game = new RockPaperScissors;
		$result = $game->rochambeau($_GET['player1'], $_GET['player2']);
		return $app['twig']->render('results.html.twig', array('result' => $result));
	});
	return $app;
?>