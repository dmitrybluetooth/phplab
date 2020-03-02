<?php
return array
(
    '404' => 'site/404/',

    // Главная страница
    'index.php' => 'site/index/', // actionIndex в SiteController
    'first.php' => 'site/first/', // actionFirst в SiteController
    '([a-zA-Z0-9]+)' => 'site/404/',
    '' => 'site/index/', // actionIndex в SiteController
);