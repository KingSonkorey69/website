<?php

switch ($_SERVER['HTTP_HOST']) {
    case 'http://206.189.207.206':
        define('servername', "localhost");
        define('username', "mutall");
        define('password', "mutall");
        define('dbname', "samuel");

        break;
    
    default:

        define('servername', "localhost");
        define('username', "root");
        define('password', "");
        define('dbname', "samuel");
}
