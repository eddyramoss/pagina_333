<?php
 if(isset($_POST['enviar'])){
     if(!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'] && !
     empty($_POST['correo']) {
        $nombre = $_POST['nombre'];
        $nombre = $_POST['telefono'];
        $nombre = $_POST['mensaje'];
        $nombre = $_POST['correo'];
        $header = "From: eddyinf605@gmail.com" . "\r\n";
        $header = "Reply-To eddyinf605@gmail.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($correo,$telefono,$mensaje,$header);
        if ($mail){
            echo 'enviado';
        }
     }
 }
?>