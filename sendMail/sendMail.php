<?php

    session_start();

    //header('Content-type: text/html; charset=ISO-8859-1');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "./Exception.php";
    require "./PHPMailer.php";
    require "./SMTP.php";

    if(
        filter_input(INPUT_POST,"token") &&
        filter_input(INPUT_POST,"uname") &&
        filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL) &&
        filter_input(INPUT_POST,"phno") &&
        filter_input(INPUT_POST,"msg")
    ){

        if(isset($_POST['token']) && $_POST['token'] === $_SESSION['token']){
            
            $nome=filter_input(INPUT_POST,"uname");
            $email=filter_input(INPUT_POST,"email");
            $telefone=filter_input(INPUT_POST,"phno");
            $msg=filter_input(INPUT_POST,"msg");
            $curriculum=$_FILES['curri'];

            if ($curriculum["size"] > 0) {
                if ($curriculum['type'] !== "application/pdf") {
                    header("Location: ../error.php");
                    //echo "<script>window.location.href='../error.php?msg='; </script>";
                    //include_once "../error.php";
                    return false;
                }
            }

            try{

                $mail = new PHPMailer;

                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = "suitesmtp.penso.com.br";
                $mail->SMTPAuth = true;
                $mail->Username = "daniel.silva@sfa.adv.br";
                $mail->Password = "D@n1el@0107";
                $mail->SMTPSecure = "ssl";
                $mail->SMTPAutoTLS = false;
                $mail->Port = 465;
                $mail->CharSet="utf-8";

                $mail->setFrom($mail->Username, "SFA :: Mensagem enviada do website");
                $mail->addAddress($mail->Username, $email);
                $mail->isHTML(true);
                $mail->Subject = "Mensagem enviada por: ".$nome. " via website";
                $mail->Body = $msg;
                
                //Attachments
                $mail->addAttachment($curriculum['name']);
                $mail->addAttachment($curriculum['tmp_name'], $curriculum['name']);

                if($mail->send()) {
                    header("Location: ../success.php");
                }else{
                    header("Location: ../erro.php").$mail->ErrorInfo;
                }

            }catch(Exception $e){
                echo $mail->ErrorInfo;
            }
        }else{
            echo "Token não encontrado!";
        }

    }else{

       echo "<p>Dados inválidos</p>";
        return false;

    }