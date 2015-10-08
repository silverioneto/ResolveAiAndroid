<?php 

require_once 'OS_DAO.php';

$db = new OS_DAO();


if (isset($_POST['opcao'])) {
	$userid = $_POST['userid'];
	$os = $db->mostrarOSCliente($userid);

	if($os){

		while($row = mysql_fetch_array($os))
		{
		   $results[] = array(
		      
		      'osnumero' => $row['_id'],
		      'equipamento' => $row['tipo_equip_os'],
		      'descricao' => $row['descri_equip_os'],
		      'defeito' => $row['defeito_equip_os'],
		      'status' => $row['status_os']
		   );
		}
		

		$response['error'] = FALSE;
		$response['os'] = $results;
		echo json_encode($response);
	}else{
		$response["error"] = TRUE;
        $response["error_msg"] = "Não foi possível consultar Ordens de Serviço!";
        echo json_encode($response);
	}

}else{
	$response["error"] = TRUE;
    $response["error_msg"] = "Não foi possível consultar Ordens de Serviço!";
    echo json_encode($response);
}

 ?>