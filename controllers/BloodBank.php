<?php
// class name should match the file name so we find the class file name
// require_once "BBAdminEvents.php"; // include the parent class

class BloodBank 
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
           $bb_id=$a;




           $eventlist = $this->eventDetail($bb_id);
        $bloodstock = $this->getBloodStockDetails($bb_id);

        //    $eventlist= $eventlist[0];
        $bbDetails = $this->bbDetails($bb_id);
        $data = [
            "bbData" => $bbDetails,
            "events" => $eventlist,
            "bloodstock" => $bloodstock,

        ];

        $this->view('bloodbank', $data); 





    }
    public function bbDetails($bb_id){
        $bbDetails = new Model;
        $bbDetails->table = "blood_banks";
        $bbDetails->order_column = "bb_id";
        $data = [
            "bb_id" => $bb_id
        ];

        $bbDetails = $bbDetails->where($data);
        return $bbDetails;


    }

    public function eventDetail($bb_id)
    {
        $eventlist = new Model;
        $eventlist->table = "event";
        $eventlist->order_column = "event_id";

        $data = [
            "bb_id" => $bb_id
        ];

        $eventlist = $eventlist->where($data);
        return $eventlist;
    }
    public function getBloodStockDetails($bb_id)
    {
        $getBStock = new Model;
        $getBStock->table = "bloodstock";
        // $getBStock->order_column = "bb_id";
       
        if (!$bb_id) {
            // redirect(HOSTNAME . "bbadmin/login");
            // die();
        }

        $data = [
            "bb_id" => "$bb_id"
        ];

        $getBStock = $getBStock->first($data);
        return $getBStock;
    }


}
