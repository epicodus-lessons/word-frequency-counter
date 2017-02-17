<?php
    date_default_timezone_set('America/Los Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('form.html.twig');
    });

    $app->post('/result', function() use ($app) {
        $new_word_frequency = new RepeatCounter;
        $keyword = $_POST['keyword'];
        $stringtosearch = $_POST['string_to_search'];
        $result = $new_word_frequency->CountRepeats($keyword, $stringtosearch);

        return $app['twig']->render('result.html.twig', array('result' => $result));

    });

    return ($app);
 ?>
