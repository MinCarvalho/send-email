<?php 
    include('conexao.php');

    $senha = $_POST['senha'];
    $usuario = $_POST['usuario'];

    $sql = "SELECT * FROM p_login where usuario='$usuario'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
    echo $usuario;

    if (!$rows) {
        try{
            $sql = "INSERT INTO p_login(usuario, senha)
                    VALUES(:susuario, :ssenha)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":susuario", $usuario);
            $stmt->bindParam(":ssenha", $senha);
            $stmt->execute();

            echo("<script>");
            echo("alert('Cadastrado com sucesso!');");
            echo("location.href='index.html';");
            echo("</script>");
        
        } catch (PDOException $e){
            echo "Erro ". $e->getMessage();
        } finally{
            $this->$conn = null;
        }
    } else{
        echo("<script>");
        echo("alert('Este usuario já consta em nosso banco de dados!');");
        echo("location.href='index.html';");
        echo("</script>");
    }
?>