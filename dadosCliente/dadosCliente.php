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

    public function alterarCliente($id,$cliente,$user){
        $result = mysql_query("UPDATE cliente set cpf_cliente = '$cliente->cpf',
                                                  tel_cliente = '$cliente->tel',
                                                  cel_cliente = '$cliente->cel',
                                                  endereco_cliente = '$cliente->end'  
                                                  WHERE users_uid = '$id'") or die(mysql_error());

        $result2 = mysql_query("UPDATE users set name = '$user->name' , email = '$user->email' WHERE uid = '$id'");

        if($result && $result2){
            
            return true;
        }else{

            return false;
        }

        /*$no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            return $result;
        }else{
            return false;
        }*/

    }
}
 

 ?>