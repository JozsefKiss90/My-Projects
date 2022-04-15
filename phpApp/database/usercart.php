<?php

// Use to fetch product data
class Usercart
{
    public $db = null; 

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }  
    public function getCart($session_id = null, $table1 = 'cart', $table2 = 'user2'){
        if (isset($session_id)){
            $result = $this->db->con->query("SELECT * FROM {$table1} LEFT JOIN {$table2} ON {$table1}.user_id={$table2}.user_id WHERE session_id={$session_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
          }
        }
        public function getProduct($item_id = null, $table= 'product'){
          if (isset($item_id)){
              $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

              $resultArray = array();

              // fetch product data one by one
              while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  $resultArray[] = $item;
              }

              return $resultArray;
          }
      }

      public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }
  }


  