<?php

    $subject = "Servitec ALLINONE Consultas";
    
    $emailsSend = ["beto1perk@gmail.com"];
    
    $to = "$emailsSend[0]";

    $message = "
    <html>
    <head>
        <title>Email-HANKOOKALVILLANTAS Consultas</title>
    </head>
    <body>
    <p>Este <strong>mensaje de consulta</strong> fue enviado desde  https://hankookalvillantas.com/</p>
    <table style='margin:0!important'>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Nombres y Apellidos:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userName']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Email:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userEmail']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Telefono:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userPhone']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Asunto:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userIssue']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#F9FF00;color:#000;padding:8px;'><b>Mensaje:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userMessage']."</td>
        </tr>

    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);  
        
    $nameValue = "";
    $lastNameValue = "";
    $phoneValue = "";
    $emailValue = "";
    $messageValue =  "";

    echo `<script>
                if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            </script>`; 

    header("location:index.html");

    
?>