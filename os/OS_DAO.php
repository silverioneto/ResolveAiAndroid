<?php 

class OS_DAO{

private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }

    public function InserirOS($OS)
    {
    	 $query = " INSERT INTO os ( id_func, id_cliente, tipo_equip_os, ident_equip_os, descri_equip_os, defeito_equip_os, solucao_equip_os, valor_total_os, status_os, descri_serv_os, valor_serv_os )  VALUES ( '$id_func', '$id_cliente', '$tipo_equip_os', '$ident_equip_os', '$descri_equip_os', '$defeito_equip_os', '$solucao_equip_os', '$valor_total_os', '$status_os', '$descri_serv_os', '$valor_serv_os' ) "; 
		 $result = mysql_query($query); 

		 if( $result )
		 {
		 	echo json_encode($result);
		 }
		 else
		 {
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