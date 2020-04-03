<?php
return array
(
    '404' => 'site/404/',

    // Главная страница
    'index.php' => 'site/index/', // actionIndex в SiteController
    'first' => 'site/first/', // actionFirst в SiteController
    'two' => 'site/two/', // actionTwo в SiteController
    'three' => 'site/three/', // actionThree в SiteController
    'four' => 'site/four/', // actionFour в SiteController
    'five' => 'site/five/', // actionFive в SiteController
    'register' => 'site/register/',
    'login' => 'site/login/',
    'logout' => 'site/logout/',
    'currency' => 'site/currency/',

    //новости
    'news/([a-zA-Z0-9]+)/([a-zA-Z0-9]+)' => 'site/404/',
    'news/([a-zA-Z]+)' => 'site/404/',
    'news/([0-9]+)' => 'site/showNews/$1/',
    'news' => 'site/showNews/',

    //тест
    'test/([a-zA-Z0-9]+)/([a-zA-Z0-9]+)' => 'site/404/',
    'test/([a-zA-Z]+)' => 'site/404/',
    'testFirst' => 'site/testFirst/',
    'testTwo' => 'site/testTwo/',
    'testThree' => 'site/testThree/',
    'testFour' => 'site/testFour/',

    '([a-zA-Z0-9]+)' => 'site/404/',
    '' => 'site/index/', // actionIndex в SiteController

);