<?php
    include('conexao.php');

    $wusuario = $_POST['usuario']; 
    $wsenha = $_POST['senha'];

    if(isset($_POST['usuario']) || isset($_POST['senha'])){
        if(strlen($_POST['usuario']) == 0){
            echo("<script>");
            echo("alert('Digite seu usuario');");
            echo("location.href='index.html';");
            echo("</script>");
        } else if(strlen($_POST['senha'] == 0)){
            echo("<script>");
            echo("alert('Digite sua senha');");
            echo("location.href='index.html';");
            echo("</script>");
            
        } else {
            $sql_code = "SELECT * FROM p_login WHERE usuario = '$wusuario' AND senha = '$wsenha'";
            $sql_query = $mysqli -> query($sql_code) or die("Falha na conexão" . $mysqli -> error);

            $quantidade = $sql_query -> num_rows;

            if($quantidade == 1){
                $wusuario = $sql_query -> fetch_assoc();

                if(session_id() == '') {
                    // checka se tem sessão, se a não tiver sessão , inicia a session
                   session_start();
               } 

               header("Location: home.html");

            } else {
               
                echo("<script>");
                echo("alert('Usuario ou senha incorretos');");
                echo("location.href='index.html';");
                echo("</script>");
                
                
            }
        }
    }
?>





