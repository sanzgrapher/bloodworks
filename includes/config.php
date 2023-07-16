<!-- config -->
<?php
// function hostname(){

//     $hostname = "http://localhost/bloodworks/";
//     return $hostname;
// }






if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('HOSTNAME', "http://localhost/bloodworks/");

    // CHANGE ACCORDNGLY ON THE SERVER

    define('DBNAME', 'bloodworks');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('ROOT', 'http://localhost/bloodworks/');
} else {
    define('HOSTNAME', "http://bloodworks.local/");

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
