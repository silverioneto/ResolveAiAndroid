<?php 

class dadosCliente {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once '../include/DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }

    public function getUserByID($id){
        $result = mysql_query("SELECT * FROM users AS u JOIN cliente AS c ON c.users_uid = u.uid WHERE uid = '$id'") 
                    or die(mysql_error());

        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            return $result;
        }else{
            return false;
        }
    }
}
 

 ?>