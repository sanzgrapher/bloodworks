<?php
trait Database // trait can be used multipled in a class but not in extend
{

    public function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }

    public function query($query, $data = [])
    {
        // a query and data in array used for prepared statements
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);

        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }


    public function get_row($query, $data = [])
    {
        // a query and data in array used for prepared statements
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);

        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            if (is_array($result) && count($result)) {
                return $result[0];
            }
        }
        return false;
    }
}
