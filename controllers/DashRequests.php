<?php

class Dash
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class
        $loggedindata = $this->getUserData();
        $requestlist = $this->requestlist();

        $data = [
            "loggedinuser" => $loggedindata,
            "requests" => $requestlist,

        ];
        if (isset($_POST['complete'])) {
            // die("complete");
            $this->completeTransaction();
        }





        $this->view('dash/requests',$data); // from controller class 

    }
    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid'); // functions file sends the session id
        if (!$getsessionid) {
            redirect("../login");
            die();
        }
        $data = [
            "id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }
    public function completeTransaction()
    {
        $id = $_POST['req_id'];
        $completeTransaction = new Model;
        $completeTransaction->table = "request_list";
        $data = [
            "transaction_status" => "completed"
        ];
        $completeTransaction->update($id, $data, 'req_id');
      
        redirect(HOSTNAME . "dash/requests");
    }
    private function requestlist()
    {
        $requestlist = new Model;
        $requestlist->table = "request_list";
        $requestlist->order_column = "req_id";
        $getsessionid = getLoggedinUser('userid');
        if (!$getsessionid) {
            redirect("../login");
            die();
        }
        $data = [
            "user_id" => "$getsessionid"
        ];
        $requestlist = $requestlist->where($data);
        return $requestlist;




        // Do something with the $eventlist data
        // For example, you can pass it to the view or perform further operations
    }
}
