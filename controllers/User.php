<?php


class User
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    {
    }



    public function getUserData()
    {

        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid');
        // if (!$getsessionid) {
        //     redirect("../login");
        //     die();
        // }
        $data = [
            "id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }
    function u_totalDonated($user_id)
    {
        // calculate total danation of user
        // from event_participants and request_list
        // ----------------------------------------------------
        $totalDonated_eve = 0;

        $evenntsfromuser = $this->totalUserEvents($user_id, "countblood");

        $totalDonated_eve = $evenntsfromuser;

        $requestDonated = $this->totalP2Pdonated($user_id);

        $totalDonated_req = $requestDonated;

        $tot_Blood_Donated_User = $totalDonated_req + $totalDonated_eve;

        // ----------------------------------------------------

        return $tot_Blood_Donated_User;
    }
    public function totalUserEvents($user_id, $what = "")
    {
        $totalUserEvents = new Model;
        $totalUserEvents->table = "event_participants";
        $totalUserEvents->order_column = "participation_id";
        $data = [
            "user_id" => "38",
            "transaction_status" => "completed"
        ];
        $eventDonated = $totalUserEvents->where($data);

        if ($eventDonated != null) {
            if ($what == "count") {
                $eventDonated = count($eventDonated);
            } elseif ($what == "countblood") {
                $totalDonated_eve = 0;
                foreach ($eventDonated as $event) {
                    $totalDonated_eve += $event->blood_unit;
                }
                return $totalDonated_eve;
            }
        } else {
            $eventDonated = 0;
            return $eventDonated;
        }
        // show($eventDonated);



        return $eventDonated;
    }
    public function totalP2Pdonated($user_id, $what = '')
    {
        $totalP2Pdonated = new Model;
        $totalP2Pdonated->table = "request_list";
        $totalP2Pdonated->order_column = "req_id";
        $data = [
            "donor_id" => '38',
            "transaction_status" => "completed"
        ];
        $requestDonated = $totalP2Pdonated->where($data);

        if ($requestDonated != null) {

            if ($what = 'count') {
                $totalp2preq = count($requestDonated);
                return $totalp2preq;
            } elseif ($what == "countblood") {

                $totalDonated_req = 0;
                foreach ($requestDonated as $donation) {
                    $totalDonated_req += $donation->req_blood_unit;
                }
                return $totalDonated_req;
            }
        }
        else {
            return $totalDonated_req=0;
        }
    }
}
