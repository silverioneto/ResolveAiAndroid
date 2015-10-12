<?php 
require_once 'OS_DAO.php';

$db = new OS_DAO();

if (isset($_POST['userid'])) {

	$userid = $_POST['userid'];

	$response['error'] = FALSE;
	$result = $db->buscarQTD($userid,0);	
	$response['qtdOS'] = $result['COUNT(*)'];

	$result = $db->buscarQTD($userid,1);
	$response['qtdSolicitada'] = $result['COUNT(*)'];

	$result = $db->buscarQTD($userid,2);
	$response['qtdAnalise'] = $result['COUNT(*)'];

	$result = $db->buscarQTD($userid,3);
	$response['qtdAgendada'] = $result['COUNT(*)'];

	$result = $db->buscarQTD($userid,4);
	$response['qtdAtendida'] = $result['COUNT(*)'];

	$result = $db->buscarQTD($userid,5);
	$response['qtdCancelada'] = $result['COUNT(*)'];

	echo json_encode($response);
}else{
	$response["error"] = TRUE;	
    $response["error_msg"] = "Não foi possível consultar Estatísticas!";
    echo json_encode($response);
}



 ?>


