<?php

class Controller
{

    public function view($name) // here the controller loads the respective view
    {
        
       

        $filename = "views/" . $name . ".views.php";


        show ("contorller - >".$filename);
        if (file_exists($filename)) {
          
            require $filename;
        } else {
           
            $filename = "views/404.views.php";
            require $filename;
        }
        
    }
}
