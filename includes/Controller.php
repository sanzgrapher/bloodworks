<?php

trait Controller
{

    public function view($name, $data=[]) // here the controller loads the respective view
    {
        if (!empty($data)){
        extract($data);
        // show("ram . $data");
        }
       

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





