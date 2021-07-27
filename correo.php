<?php
// echo "<h4> !Pa ver ! </h4>";
if (isset ($_POST ['enviar'])) {
    if (!empty($_POST['name']) && !empty ($_POST['asunto'])&& !empty ($_POST['msg']) && 
    !empty ($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = mail($email,$asunto,$header);
        if ($mail) {
            echo "<h4> !Mail enviado exitosamente! </h4>";
        }
    }
}

    