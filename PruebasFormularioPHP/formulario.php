<?php

if(isset($_POST['Enviar'])){
    if(!empty($_POST['Nombre'] )&& !empty($_POST['Asunto']) && !empty($_POST['Mensaje']) && !empty($_POST['Email'])){
      
        $Nombre=$_POST['Nombre'];
        $Asunto=$_POST['Asunto'];
        $Mensaje=$_POST['Mensaje'];
        $Email=$_POST['Email'];

        $header="From : noreply@example.com" . "\r\n" ;
        $header.="Reply-To: noreply@example.com" . "\r\n";
        $header.="X-Mailer: PHP/" . phpversion(); 

        $mail=@mail($Email,$Asunto,$Mensaje,$header);

        if($mail){
            echo"<h4>E-Mail enviado exitosamente</h4>";
        }
    }
}
?>