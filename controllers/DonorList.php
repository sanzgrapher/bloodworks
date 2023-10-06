<?php


class Donorlist
{
    use Controller;
    public function index($a = "", $b = "", $c = "")
    {




        $donor = $this->donor();
        $data = [

            "donors" => $donor
        ];

        if (isset($_POST['sendmail'])) {

            $this->sendemail();
        }

        $this->view('donor-list', $data); // Pass the $bloodbanklist to the view
    }
    public function sendemail()
    {
        // GET DONOR EMAIL from user table
        $getuserdata = new Model;
        $getuserdata->table = "user";
        $getuserdata->order_column = "id";

        $data = [
            "id" => $_POST['id']
        ];
        $getuserdata = $getuserdata->where($data);

        $to = $getuserdata[0]->email;
        $donor_id = $getuserdata[0]->id;





        $subject = "Blood Request";

        $description = "This email is written to you from WebApp BloodWorks .An peer to peer Blood request is made by user to you.
        <br> If you are avaiable to donate blood contact to the below information to perform peer to peer donation from nearest hospitals " .
            "<br><b>Patients Name</b> :" . $_POST['fname'] . $_POST['lname'] .
            "<br> <b>Patient Contact</b> : " . $_POST['phone_no'] .
            "<br> <b>Patient Address </b>: " . $_POST['address'] .
            "<br><b> Patient Blood Group</b> " . $_POST['bloodgroup'] .
            "<br><b> Required Before</b> : " . $_POST['required_date'] .
            "<br> <b>Urgency</b> : " . $_POST['urgency'] .
            "<br> <b>Patient Blood Reason</b> : " . $_POST['reason'] .
            "<br><br> <b>Thank You</b> ";

        $resp = smtp_mailer("$to", "BloodWorks : $subject", "$description");

        if ($resp) {

            $addBloodBank = new Model;
            $addBloodBank->table = "request_list";
            $description = "
            Patients Name :" . $_POST['fname'] . $_POST['lname'] .
                "<br> Patient Contact : " . $_POST['phone_no'] .
                "<br> Patient Address : " . $_POST['address'] .
                "<br> Patient Blood Group " . $_POST['bloodgroup'] .
                "<br> Required Before : " . $_POST['required_date'] .
                "<br> Urgency : " . $_POST['urgency'] .
                "<br> Patient Blood Reason : " . $_POST['reason'];


            $data = [
                "user_id" => getLoggedinUser('userid'),
                "transaction_type" => "private",
                "donor_id" => $donor_id,
                "transaction_status" => "pending",


                "req_description" => $description,
                "required_blood_group" => $_POST['bloodgroup'],
                "required_date" => $_POST['required_date'],
                "req_blood_unit" => '1',
            ];
            $addBloodBank->insert($data);
        } else {
            setcookie("email", "Email has not been sent to the donor", time() + 10, "/");
            redirect("donorlist");
            die();
        }






        // show($resp);
        // set cookie msg
        if ($resp == "Sent") {
            setcookie("email", "Email has been sent to the donor", time() + 10, "/");
            redirect("donorlist");
            die();
        } else
            setcookie("email", "Email has not been sent to the donor", time() + 10, "/");
        redirect("donorlist");
        die();
    }
    private function donor()
    {
        $donorlist = new Model;
        $donorlist->table = "user";
        $data = [
            "donor_availability" => "Available"
        ];
        $donor_list = $donorlist->where($data);




        return $donor_list;
        // Do something with the $bloodbanklist data
        // For example, you can pass it to the view or perform further operations
    }
}
