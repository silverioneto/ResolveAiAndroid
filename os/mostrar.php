<?php 

require_once 'OS_DAO.php';

$db = new OS_DAO();


if (isset($_POST['opcao'])) {
	$userid = $_POST['userid'];
	$os = $db->mostrarOSCliente($userid);

	if($os){
		$response['error'] = FALSE;
		$response['os']['numeroos'] = $os['_id'];
		$response['os']['tipoequip'] = $os['tipo_equip_os'];
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