<?php
 
require_once 'OS_DAO.php';
require_once 'ordemservico.php';
$db = new OS_DAO();
$os = new OrdemServico();
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['opcao'])) {

    $opcao = $_POST['opcao'];
    $id_func = $_POST['id_func'];  
    $id_cliente = $_POST['id_cliente'];  
    $tipo_equip_os = $_POST['tipo_equip_os'];  
    $ident_equip_os = $_POST['ident_equip_os'];  
    $descri_equip_os = $_POST['descri_equip_os'];  
    $defeito_equip_os = $_POST['defeito_equip_os'];  
    $solucao_equip_os = $_POST['solucao_equip_os'];  
    $valor_total_os = $_POST['valor_total_os'];  
    $status_os = $_POST['status_os'];  
    $descri_serv_os = $_POST['descri_serv_os'];  
    $valor_serv_os = $_POST['valor_serv_os'];

    if($opcao == 1){
        $id_func = '1';
        $os->

   
        // create a new user
        $user = $db->storeUser($name, $email, $password);
        if ($user) {
            // user stored successfully
            $response["error"] = FALSE;
            $response["uid"] = $user["unique_id"];
            $response["user"]["name"] = $user["name"];
            $response["user"]["email"] = $user["email"];
            $response["user"]["created_at"] = $user["created_at"];
            $response["user"]["updated_at"] = $user["updated_at"];
            echo json_encode($response);
        } else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Erro Desconhecido!";
            echo json_encode($response);
        }
    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Não foi possível solicitar OS!";
    echo json_encode($response);
}
?>