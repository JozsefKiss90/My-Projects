<?php

class Items
{
    public $db = null; 

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function insertItems ($params = null, $table = "items"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
               
                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
         }
    }

    public function addItems($array, $id){
        if (isset($array)){
            for ($x = 0; $x < count($array); $x++) {
            $params = array (
                "user_id" => $id,
                "quantity" => implode(array_values($array[$x][0])),
                "price" =>  implode(array_values($array[$x][1])),
                "item_id" => implode(array_values($array[$x][2]))
            );
            $result = $this->insertItems($params);
        }
        }
    }

    public function getItems($user_id = null, $item_id = null, $table = 'items'){
        if (isset($user_id)){
            $result = $this->db->con->query("SELECT quantity, price FROM {$table} WHERE user_id={$user_id} AND item_id={$item_id} ORDER BY order_id DESC
            LIMIT 1");
            $resultArray = array();

            // fetch product data one by one
            while ($user = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $user;
            }

            return $resultArray;
        }
        else {
            echo "wuut";
        }   
    }

}
