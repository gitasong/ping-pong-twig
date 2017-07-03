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

    $app->post("/view_ping_pong", function() use ($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        // var_dump("My Ping Pong Generator = " . $my_PingPongGenerator);
        $error_message = $my_PingPongGenerator->validate($_POST['num']);
        // var_dump("Error message = " . $error_message);
        if (!($error_message)) {
            $num_arr = $my_PingPongGenerator->count($_POST['num']);
        } else {
            $num_arr = [];
        }

        // var_dump($num_arr);

        return $app['twig']->render('display_pong.html.twig', array('num_arr' => $num_arr, 'error_message' => $error_message));
    });

    return $app;
?>
