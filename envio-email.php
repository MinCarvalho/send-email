<?php
require_once 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$conn = new mysqli($host, $username, $password, $dbname);

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$sql = "SELECT email FROM bdcadastro";
$result = $conn->query($sql);
$count = 0;

    if(isset($_POST['send'])){
        
        while($row = $result->fetch_assoc()) {
            $name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $subject = htmlentities($_POST['subject']);
            $message = htmlentities($_POST['message']);
            
            $email = $row["email"];
         
              
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'carvalhoteste09@gmail.com';
            $mail->Password = 'zpqjnhzoosszvilb';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
                
            $mail->setFrom('carvalhoteste09@gmail.com');
            $mail->addAddress($email);
           
            $mail->isHTML(true);
            $mail->Subject = ($_POST["subject"]);
            $mail->Body = $_POST["message"];
            
          
            $mail->send();
            
            $count++;

            echo("<script>");
            echo("alert('E-mail enviado com sucesso!');");
            echo("location.href='home.html';");
            echo("</script>"); }  

    } else {
        echo("<script>");
        echo("alert('Falha no envio!');");
        echo("location.href='home.html';");
        echo("</script>");
    }


?>