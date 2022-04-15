<?php
class User {
  public $db = null;

  public function __construct(DBController $db)
  {
      if (!isset($db->con)) return null;
      $this->db = $db;
  }
  public function insertUser($params = null, $table = "user2") {
    if ($this->db->con != null){
        if ($params != null){

          $columns = implode(',', array_keys($params));

          $values = implode(',' , array_values($params));
          $sql = sprintf("SELECT session_id FROM user2 WHERE session_id = %s LIMIT 1", $params["session_id"]);
          
            $res = $this->db->con->query($sql);

            if (mysqli_num_rows($res) == 0) {
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                // execute query
                $result = $this->db->con->query($query_string);
                if(!$result) {
                  echo("Error description: " . $mysqli -> error);
                }
                else {return $result;}
              } 
              else {
                
              }
            }

    }
 
  }
  public function addUser($session){
      if (isset($session)){
          $params = array(
              "session_id" => $session,

          );

          // insert data into cart
          $result = $this->insertUser($params);


      }
  }

  public function getUser($session_id = null, $table= 'user2'){
    if (isset($session_id)){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE session_id={$session_id}");

        $resultArray = array();

        // fetch product data one by one
        while ($user = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $user;
        }

        return $resultArray;
    }
}

}


 ?>
