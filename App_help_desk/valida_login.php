<?php 
    
    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [ 1 => 'Admistrativo', 2 => 'Usúario'];

    $usuarios_app = array(
        array('id' => 1,'email' => 'adm@teste.com.br','senha' => '123456' ,'perfil' => 1),
        array('id' => 2,'email' => 'user@teste.com.br','senha' => '123456' ,'perfil' => 1),
        array('id' => 3,'email' => 'marcelo@teste.com.br','senha' => '123456' ,'perfil' => 2),
        array('id' => 4,'email' => 'ana@teste.com.br','senha' => '123456' ,'perfil' => 2),
    );


    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil'];
        }

    }

    if ($usuario_autenticado){
        echo 'Usuário Autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['usuario_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


?>