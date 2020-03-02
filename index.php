<?
//Общие настройки
ini_set('display_errors', 0);
error_reporting(E_ALL);

session_start();

//Подключение файлов системы и установка констант
/**
 * ОБЯЗАТЕЛЬНО УКАЗАТЬ НОМЕР АККАУНТА
 */
define('ID_ACCOUNT', 30); //указать номер своего аккаунта
/**
 * ОБЯЗАТЕЛЬНО УКАЗАТЬ НОМЕР АККАУНТА
 */

define('ROOT', dirname(__FILE__));
define('HOST', "https://".$_SERVER['HTTP_HOST']."/".ID_ACCOUNT);


require_once(ROOT.'/components/Router.php');

//Вызор Router
$router = new Router();
$router->run();
?>