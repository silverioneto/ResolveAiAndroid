<?php
 
require_once 'OS_DAO.php';
require_once 'ordemservico.php';
$db = new OS_DAO();
$os = new OrdemServico();

if (isset($_POST['opcao'])) {

    $opcao = $_POST['opcao'];
    $id_func = $_POST['id_func'];  
    $id_user = $_POST['id_user'];  
    $tipo_equip_os = $_POST['tipo_equip_os'];  
    $ident_equip_os = $_POST['ident_equip_os'];  
    $descri_equip_os = $_POST['descri_equip_os'];  
    $defeito_equip_os = $_POST['defeito_equip_os'];  
    $solucao_equip_os = $_POST['solucao_equip_os'];  
    $valor_total_os = $_POST['valor_total_os'];  
    $status_os = $_POST['status_os'];  
    $descri_serv_os = $_POST['descri_serv_os'];  
    $valor_serv_os = $_POST['valor_serv_os'];
    $osID = $_POST['osid'];

        $os->id_func = '1';
        $os->id_user = $id_user;
        $os->tipo_equip = $tipo_equip_os;
        $os->descri_equip = $descri_equip_os;
        $os->defeito_equi = $defeito_equip_os;
        $os->status = $status_os;

    if($opcao == '1'){ //Inserir
        

        $ordemservico = $db->InserirOS($os);
        if ($ordemservico) {
            $numeroos = mysql_insert_id();
            // user stored successfully
            $response["error"] = FALSE;
            $response["numeroos"] = $numeroos;
            
            echo json_encode($response);
        } else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Não foi possível solicitar OS!";
            echo json_encode($response);
        }
    } else if($opcao == '2'){ //Alterar
        $ordemservico = $db->alterarOS($osID,$os);

        if ($ordemservico) {
            $numeroos = mysql_insert_id();
            // user stored successfully
            $response["error"] = FALSE;
            $response["numeroos"] = $numeroos;
            
            echo json_encode($response);
        } else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Não foi possível alterar OS!";
            echo json_encode($response);
        }

    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Algo inesperado ocorreu :(!";
    echo json_encode($response);
}
?>