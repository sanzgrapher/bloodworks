<?php
class App
{

    // default controller and function 

    private $controller = "Home";
    private $method = "index";

    public function splitURL()
    {
        // splitting the url from the routing from htaccess and converting the remaining parameters to an array
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", trim($URL, "/"));
        show($URL);
        return $URL;
    }

    public function loadController()

    {
        
        // loading the specific controller file 
        // (*)/index.php?url=*
        // first parameter indicates page 
        $URL = $this->splitURL(); // as split  Function is inside app class we need to use $this->


        // ok
        // $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";


        // $filename = "views/" . ucfirst($URL[0]) . ".views.php";
        // $filename = "views/" .$URL[0] . ".views.php";
        // $filename = "views/dash/" .$URL[1] . ".views.php";


        // views
        // if($URL[0] == "dash" && !isset($URL[1])){
        //     $filename = "views/dash/home"  . ".views.php";
        // }
        // elseif ($URL[0] == "dash" && isset($URL[1])) {
        //     $filename = "views/dash/" . $URL[1] . ".views.php";

        // }
        // else{
        //     $filename = "views/" .$URL[0] . ".views.php";
        // }
        // views

        // function dash(){

        // }


        // show($filename);


        // if (file_exists($filename)) {

        //     require $filename;
        //     // after including respective page take the class file and method
        //     $this->controller = ucfirst($URL[0]);
        //     unset($URL[0]);
        //     // show($URL);
        // }




        // views
            
          

        if ($URL[0] == "dash" && !isset($URL[1])) {
            $filename = "controllers/Dash"  . ".php";
        }
        elseif ($URL[0] == "dash" && isset($URL[1])) {
            $filename = "controllers/" . $URL[0].$URL[1] . ".php";

        }
        else{
            $filename = "controllers/" .$URL[0] . ".php";
        }





        // $filename = "controllers/" . ucfirst($URL[0]) . ".php";
       
        show("APP->".$filename);
       
        if (file_exists($filename)) {

            show("app->controller");
            show($filename);


            require $filename;


            // after including respective page take the class file and method
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {
            $filename = "controllers/_404.php";
            require $filename;
            $this->controller = "_404";
        }





        // elseif ($filename) {
        //     require $filename;
        //     echo "dash";
        //     // after including respective page take the class file and method
        //     $this->controller = ucfirst($URL[0]);
        //     unset($URL[0]);
        //     // show($URL);
        // }



        // else {
        //     // $filename = "../app/controllers/_404.php";
        //     $filename = "views/_404.php";
        //     require $filename;
        //     $this->controller = "_404";
        // }



        $controller = new $this->controller;

        if (!empty($URL[1])) {
            if (method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
    //     show($URL);
        call_user_func_array([$controller, $this->method], $URL);
    }
}
