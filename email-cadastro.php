<?php 
    include('conexao.php');

    $wnome = $_POST['nome'];
    $wemail = $_POST['email'];

    $sql = "SELECT * FROM bdcadastro where email='$wemail'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
    echo $wemail;

    if (!$rows) {
        try{
            $sql = "INSERT INTO bdcadastro(nome, email)
                    VALUES(:snome, :semail)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":snome", $wnome);
            $stmt->bindParam(":semail", $wemail);
            $stmt->execute();

            echo("<script>");
            echo("alert('Cadastrado com SUCELSO!');");
            echo("location.href='home.html';");
            echo("</script>");
        
        } catch (PDOException $e){
            echo "Erro ". $e->getMessage();
        } finally{
            $this->$conn = null;
        }
    } else{
        echo("<script>");
        echo("alert('Este email já consta em nosso banco de dados!');");
        echo("location.href='email-cadastro.html';");
        echo("</script>");
    }
?>
