<?php 

        require_once 'dadosCliente.php';
        $db = new DB_Functions();
        
        
        $id = $_POST['id'];
        $user = $db->getUserByID($id);
        if ($user != false) {
            // user found
            $response["error"] = FALSE;
            $response["uid"] = $user["unique_id"];
            $response["user"]["name"] = $user["name"];
            $response["user"]["email"] = $user["email"];
            $response["user"]["cpf"] = $user["cpf_cliente"];
            $response["user"]["tel"] = $user["tel_cliente"];
            $response["user"]["cel"] = $user["cel_cliente"];
            $response["user"]["end"] = $user["endereco_cliente"];
            $response["user"]["created_at"] = $user["created_at"];
            $response["user"]["updated_at"] = $user["updated_at"];
            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = TRUE;
            $response["error_msg"] = "Usuário não encontrado!";
            echo json_encode($response);
        }
 ?>