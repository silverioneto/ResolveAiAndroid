<?php 

require_once 'OS_DAO.php';

$db = new OS_DAO();


if (isset($_POST['opcao'])) {
	$userid = $_POST['userid'];
	$osid = $_POST['osid'];
	$os = $db->buscarOS($osid,$userid);

	if($os){

		$response['error'] = FALSE;
		$response['os']['tipo_equip'] = $os['tipo_equip_os'];
		$response['os']['descri_equip'] = $os['descri_equip_os'];
		$response['os']['defeito_equip'] = $os['defeito_equip_os'];

		echo json_encode($response);
	}else{
		$response["error"] = TRUE;
        $response["error_msg"] = "Não foi possível consultar Ordem de Serviço!";
        echo json_encode($response);
	}

}else{
	$response["error"] = TRUE;
    $response["error_msg"] = "Não foi possível consultar Ordem de Serviço!";
    echo json_encode($response);
}

 ?>