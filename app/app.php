<?php
    date_default_timezone_set('America/Los_Angeles');
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
        $space = ' ';
        $numbers = array ("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $keyword_spacepos = strpos($keyword, $space);
        $keywords_numbers = array();
        foreach ($numbers as $number) {
            $keyword_numberpos = strpos($keyword, $number);
            if ($keyword_numberpos === false) {
                $keywords_numbers = array();
            } else {
                array_push($keywords_numbers, strpos($keyword, $number));
            }
        }

        if ($keyword_spacepos === false) {
            $error_input = "";
        } else {
            $error_input = "Please enter a single word without numbers or spaces";
        }
        if (!empty($keywords_numbers)) {
            $error_input = "Please enter a single word without numbers or spaces";
        }
        $stringtosearch = $_POST['string_to_search'];

        if (empty($keyword) || empty($stringtosearch)) {
            $error_input = "Please enter a single word without numbers or spaces and a word or sentence to compare it to";
        }

        $result = $new_word_frequency->CountRepeats($keyword, $stringtosearch);

        return $app['twig']->render('result.html.twig', array('result' => $result, 'keyword' => $keyword, 'stringsearch' => $stringtosearch, 'error' => $error_input));

    });

    return ($app);
 ?>
