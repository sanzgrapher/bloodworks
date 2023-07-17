<?php

class BBAdmin
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        $eventlist = $this->eventDetail();
        $data = [
            "events" => $eventlist,

        ];



        $this->view('bbadmin/events',$data); // from controller class 

    }
    private function eventDetail()
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";
        $data = [
            "bb_id" => "18"
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;

    }
}
