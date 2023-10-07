<?php
include_once "Bloodbank.php";
class  BBAdmin extends BloodBank
{
    use Controller;

    public function index($a = "", $b = "", $c = "")
    { // default function should be in every class


        $loggedindata = $this->getUserData();
        $bb_id = getLoggedinUser('bb_id'); 
        $bloodstock = $this->getBloodStockDetails($bb_id); //


        if(isset($_POST['updatebloodstock'])){
            $this->updateBloodStock();
        }
        

        $data = [
            "loggedinuser" => $loggedindata,
            "bloodstock" => $bloodstock,

        ];
        


        $this->view('bbadmin/bloodstock' ,$data); // from controller class 

    }
    public function getUserData()
    {
        $getuserdata = new Model;
        $getuserdata->table = "blood_banks";
        $getuserdata->order_column = "bb_id";
        $getsessionid = getLoggedinUser('bb_id'); // functions file sends the session id
        if (!$getsessionid) {
            redirect(HOSTNAME . "bbadmin/login");
            die();
        }
        $data = [
            "bb_id" => "$getsessionid"
        ];
        $getuserdata = $getuserdata->where($data);
        return $getuserdata;
    }

    



    public function updateBloodStock(){
      // update blood group blood stock
        $updateBloodStock = new Model;
        $updateBloodStock->table = "bloodstock";
        $getsessionid = getLoggedinUser('bb_id');
        if (!$getsessionid) {
            redirect(HOSTNAME . "bbadmin/login");
            die();
        }

        // $data = [
        //         "bb_id" => $id,
        //         "a_pos" => "0",
        //         "a_neg" => "0",
        //         "b_pos" => "0",
        //         "b_neg" => "0",
        //         "ab_pos" => "0",
        //         "ab_neg" => "0",
        //         "o_pos" => "0",
        //         "o_neg" => "0"

        //     ];
        // from form
        $data = [
            "a_pos" => $_POST['a_pos'],
            "a_neg" => $_POST['a_neg'],
            "b_pos" => $_POST['b_pos'],
            "b_neg" => $_POST['b_neg'],
            "ab_pos" => $_POST['ab_pos'],
            "ab_neg" => $_POST['ab_neg'],
            "o_pos" => $_POST['o_pos'],
            "o_neg" => $_POST['o_neg']

        ];

        $updateBloodStock->update($getsessionid, $data, 'bb_id');
        redirect(HOSTNAME . "bbadmin");
      


    }

}
