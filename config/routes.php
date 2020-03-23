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

    //новости
    'news/([a-zA-Z0-9]+)/([a-zA-Z0-9]+)' => 'site/404/',
    'news/([a-zA-Z]+)' => 'site/404/',
    'news/([0-9]+)' => 'site/showNews/$1/',
    'news' => 'site/showNews/',

    '([a-zA-Z0-9]+)' => 'site/404/',
    '' => 'site/index/', // actionIndex в SiteController

);