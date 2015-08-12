<?php 
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/RockPaperScissors.php";
	
	session_start();
	if(empty($_SESSION['list_of_moves'])) {
		$_SESSION['list_of_moves'] = array();
	}
	
	$app = new Silex\Application();
	
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path'=>__DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		RockPaperScissors::deleteAll();
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
	$app->get("/two_player_player1", function() use ($app) {
		return $app['twig']->render('two_player.html.twig');
	});
	$app->get("/two_player_player2", function() use ($app) {
		$game = new RockPaperScissors($_GET['player1']);
		$game->save();
		return $app['twig']->render('two_player_player2.html.twig');
	});
	$app->get("/two_player_result", function() use ($app) {
		$game2 = RockPaperScissors::getAll()[0];
		$game2->setPlayer2($_GET['player2']);
		$result = $game2->rochambeau($game2->getPlayer1(), $game2->getPlayer2());
		return $app['twig']->render('results.html.twig', array('result' => $result));
	});
	return $app;
?>