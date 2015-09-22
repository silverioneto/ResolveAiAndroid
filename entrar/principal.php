<?php 

        require_once '../include/DB_Functions.php';
        $db = new DB_Functions();
        
        
        $email = $_POST['email'];
        $user = $db->getUserByEmail($email);
        if ($user != false) {
            // user found
            $response["error"] = FALSE;
            $response["uid"] = $user["unique_id"];
            $response["user"]["name"] = $user["name"];
            $response["user"]["email"] = $user["email"];
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