<?php 

class OS_DAO{
    

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

    public function InserirOS($os){
    	 $query = "INSERT INTO ordem_servico ( id_func, id_user, tipo_equip_os,descri_equip_os, 
                                defeito_equip_os, status_os )  
                    VALUES ('$os->id_func','$os->id_user','$os->tipo_equip','$os->descri_equip',
                            '$os->defeito_equi','$os->status');"; 
		 $result = mysql_query($query); 

		 if( $result )
		 {
		 	return $result;
		 }
		 else
		 {
		 	return NULL;
		 }
    }

    public function mostrarOSCliente($userid){
        $query = "SELECT * FROM ordem_servico WHERE id_user = '$userid';";

        $result = mysql_query($query);

        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {            
            return $result;
        }else{
            return false;
        }
    }

    public function buscarOS($osID,$userID){
        $query = "SELECT * FROM ordem_servico WHERE id_user = '$userID' AND _id = '$osID';";

        $result = mysql_query($query);

        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);            
            return $result;
        }else{
            return false;
        }
    }

    public function alterarOS($osID,$os){
        $query = "UPDATE ordem_servico set tipo_equip_os = '$os->tipo_equip',
                                           descri_equip_os = '$os->descri_equip',
                                           defeito_equip_os = '$os->defeito_equi'
                                           WHERE _id = '$osID' AND id_user = '$os->id_user';";                                             
        $result = mysql_query($query);                                         
        
        if ($result) {
                       
            return $result;
        }else{
            return NULL;
        }                                   
    }

    public function buscarQTD($userid,$status){
        if($status == 0){
            $query = "SELECT COUNT(*) FROM ordem_servico WHERE id_user = '$userid';";
        }else{
            $query = "SELECT COUNT(*) FROM ordem_servico WHERE id_user = '$userid' AND status_os = '$status';";
        }

        $result = mysql_query($query);                                         
        
        if ($result) {
            $result = mysql_fetch_array($result); 
                       
            return $result;
        }else{
            return NULL;
        }   
    }
}

/*

<?php //Query 

 //INSERT 
 $query = " INSERT INTO os ( id_func, id_cliente, tipo_equip_os, ident_equip_os, descri_equip_os, defeito_equip_os, solucao_equip_os, valor_total_os, status_os, descri_serv_os, valor_serv_os )  VALUES ( '$id_func', '$id_cliente', '$tipo_equip_os', '$ident_equip_os', '$descri_equip_os', '$defeito_equip_os', '$solucao_equip_os', '$valor_total_os', '$status_os', '$descri_serv_os', '$valor_serv_os' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //SELECT 
 $query = " SELECT id_func, id_cliente, tipo_equip_os, ident_equip_os, descri_equip_os, defeito_equip_os, solucao_equip_os, valor_total_os, status_os, descri_serv_os, valor_serv_os FROM os "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //UPDATE 
 $query = " UPDATE os SET  id_func = '$id_func',  id_cliente = '$id_cliente',  tipo_equip_os = '$tipo_equip_os',  ident_equip_os = '$ident_equip_os',  descri_equip_os = '$descri_equip_os',  defeito_equip_os = '$defeito_equip_os',  solucao_equip_os = '$solucao_equip_os',  valor_total_os = '$valor_total_os',  status_os = '$status_os',  descri_serv_os = '$descri_serv_os',  valor_serv_os = '$valor_serv_os' WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //DELETE 
 $query = " DELETE FROM os WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>

 */

 ?>