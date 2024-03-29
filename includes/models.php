<?php

/**
 * Main Model Trait
 * 
 */

class Model
{
    use Database; // using trait database and can include multiples


    public $table = "users"; //inheritable

    protected $limit = '100';
    protected $offset = 0;
    protected $order_type = "desc";
    public $order_column = "id";

    public function findAll()
    {
        $query = "select * from $this->table order by $this->order_column $this->order_type limit  $this->limit offset $this->offset";
        return $this->query($query);
    }

    public function where($data, $data_not = [])
    {
        // return multiple row
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }


        $query = trim($query, " && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
        //    echo $query;
        // show($query);
        // die;
        $data = array_merge($data, $data_not);
        return $this->query($query, $data);
    }
    public function joinTables($table1, $table2, $columns = '*', $conditions = [], $orderColumn = null, $orderType = 'ASC', $limit = null, $offset = null)
    {
        $query = "SELECT $columns FROM $table1 INNER JOIN $table2 ON ";
     

        // Add join conditions
        foreach ($conditions as $key => $value) {
        
            $query .= "$key = $value AND ";
        }
      
        // Remove the trailing "AND" from the join conditions
        $query = rtrim($query, 'AND ');

        // Add ORDER BY clause if specified
        if (!empty($orderColumn)) {
            $query .= " ORDER BY $orderColumn $orderType";
        }

        // Add LIMIT and OFFSET if specified
        if (!empty($limit)) {
            $query .= " LIMIT $limit";
        }
        if (!empty($offset)) {
            $query .= " OFFSET $offset";
        }
        
        // Execute the query using your database connection and return the results
        // Replace $this->query with your actual database query execution method
        return $this->query($query);
    }


    public function one(){
        $query = "select * from $this->table  limit 1";
        return $this->query($query);
    }
   

    public function first($data, $data_not = [])
    {

            // die("hereeeee");

        // return one row
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }



        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        //    echo $query;
        //    die();
        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);
        if ($result) {
            return $result[0];
        }
        return false;
    }
    public function insert($data)
    {
         

        $keys = array_keys($data);


        $query = "insert into $this->table (" . implode(",", $keys) . ") values (:" . implode(" , :", $keys) . ")";
 
        $this->query($query, $data);
        return false;
    }
    public function update($id, $data, $id_column = 'id')
    {

       
       

        $keys = array_keys($data);

        $query = "update $this->table set ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . ", ";
        }




        $query = trim($query, ", ");

        $query .= " where $id_column = :$id_column ";
        // $data = [$id_column => $id];
        $data[$id_column] = $id;
        // echo $query;
        // die();
        $this->query($query, $data);
        return false;
    }

    public function delete($id, $id_column = 'id')
    {

        $data[$id_column] = $id;
        $query = "delete from $this->table where $id_column = :$id_column";

        
        $this->query($query, $data);

        return false;
    }
}
