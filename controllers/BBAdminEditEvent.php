<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class

        $eveid=$b;

      
       
        $eventlist = $this->eventDetail($eveid);
        $data = [
            "events" => $eventlist,

        ];


        $this->view('bbadmin/editevent', $data); // from controller class 


    }
    private function eventDetail($eveid)
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        $data = [
            "bb_id" => "18",
            "event_id" => $eveid
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;



        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }


}
