<?php 

        require_once 'dadosCliente.php';
        require_once 'cliente.php';
        require_once 'user.php';
        $db = new dadosCliente();
        $cliente = new Cliente();
        $user = new User();
        
        $id = $_POST['id'];
        $cliente->cpf = $_POST['cpf'];
        $cliente->tel = $_POST['tel'];        
        $cliente->cel = $_POST['cel']; 
        $cliente->end = $_POST['end']; 
        $user->name = $_POST['nome'];
        $user->email = $_POST['email'];
         

        $user = $db->alterarCliente($id,$cliente,$user);
        if ($user != false) {
            // user found
            $response["error"] = FALSE;
            
            echo json_encode($response);
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = TRUE;
            $response["error_msg"] = "Não foi possível salvar dados!";
            echo json_encode($response);
        }
 ?>