<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app_>get("/view_ping_pong", function() use ($app) {
        $num_arr 
        return $app['twig']->render('display_pong.html.twig', array('num_arr' => $num_arr, 'error_message' => $error_message));
    }
    return $app;
?>
