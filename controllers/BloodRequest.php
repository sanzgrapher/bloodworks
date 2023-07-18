<?php


class BloodRequest

{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {


        $loggedindata = $this->getUserData();
      


        $data = [
            "loggedinuser" => $loggedindata,
        

        ];
        if (isset($_POST['request-blood'])) {

            $this->requestBlood();
        }


        $this->view('bloodrequest',$data);

        // if (isset($_POST['add-bloodbank'])) {

        //     $this->addBloodBanks();
        // }
    }

    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";
        $getsessionid = getLoggedinUser('userid');
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
    public function requestBlood()
    {
        $addBloodBank = new Model;
        $addBloodBank->table = "request_list";
        $description = "Patients Name :". $_POST['fname'] . $_POST['lname'] ."<br> Patient Contact : " . $_POST['phone_no'] ."<br> Patient Address : ". $_POST['address'] ."<br> Patient Blood Group " . $_POST['bloodgroup'] . "<br> Required Before : " . $_POST['required_date'] . "<br> Urgency : " . $_POST['urgency'] ."<br> Patient Blood Reason : " . $_POST['reason'];
        $data = [
            "user_id" => $_POST['id'],
            "transaction_status" => "pending",
           
            "req_description" => $description,
        ];
        $addBloodBank->insert($data);
        redirect(HOSTNAME . "");
    }

    
}
