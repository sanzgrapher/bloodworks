<?php

 
class Events 
{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {

        $eventlist = $this->eventLists();  
        $data = [
            "events" => $eventlist,

        ];


        $this->view('events',$data);
    }
    private function eventLists()
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        // $data = [
        //     "bb_status" => "verified"
        // ];

        $eventlist = $eventlist->findAll();
        return $eventlist;



        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }
}
