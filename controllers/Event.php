<?php
// class name should match the file name so we find the class file name


class Event
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
        $event_id=$a;

        $eventDetails = $this->eventDetails($event_id);

        $data = [
            "eventData" => $eventDetails,

        ];


        $this->view("event", $data); // from controller class 


    }

    public function eventDetails($event_id){
        $eventDetails = new Model;
        $eventDetails->table = "event";
        $eventDetails->order_column = "event_id";
        $data = [
            "event_id" => $event_id
        ];

        $eventDetails = $eventDetails->where($data);
        return $eventDetails;
    }
    

}
