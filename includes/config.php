<!-- config -->
<?php
// function hostname(){

//     $hostname = "http://localhost/bloodworks/";
//     return $hostname;
// }



define('HOSTNAME', "http://bloodworks.local/");


if ($_SERVER['SERVER_NAME'] == 'localhost') {

    // CHANGE ACCORDNGLY ON THE SERVER

    define('DBNAME', 'bloodworks');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'http://bloodworks.local/');
} else {

    define('DBNAME', 'bloodworks');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'http://bloodworks.local/');

    // // CHANGE ACCORDNGLY ON THE SERVER
    // define('DBNAME', 'mvc_tut');
    // define('DBHOST', 'localhost');
    // define('DBUSER', 'root');
    // define('DBPASS', '');

    // define('ROOT', 'http://mvc.local/public');
}


//TRUE FOR SHOWING ERRORS
define('DEBUG', TRUE);

?>
