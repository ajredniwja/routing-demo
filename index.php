<?php
    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base Class
    $f3 = Base :: instance();

    //Set debug level
    //will take care of php errors as well which gives 500 error
    $f3->set('DEBUG', 3);

    //Define a default route
    $f3->route('GET /', function ()
    {
        $view = new View;
        //echo $view->render
        //('views/home.html');
        echo '<h1>Hello, world!</h1>';
    }
    );


    //this will be shown if user goes to url ..328/routing-demo/page1
    $f3->route('GET /page1', function ()
    {
        $view = new View;
        echo '<h1>This is your page 1</h1>';
    }
    );


    //this will be shown if user goes to url ..328/routing-demo/page2/subpage-a
    $f3->route('GET /page2/subpage-a', function ()
    {
        $view = new View;
        echo '<h1>This is your page 2, subpage-a</h1>';
    }
    );


//Run fat free
    $f3->run();