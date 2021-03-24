<?php
//Send Email to
if(isset ($_POST["email"]) && $_POST["email"] !="" )
{
  
    $from = "exemple@from.fr";
    $to= "exemple@to.fr";
    $entreprise = $_POST["entreprise"];
    $name = $_POST["nomPrenom"];
    $numero = $_POST["numero"];
    $message = utf8_decode ($_POST["message"])."\r\n";
    $message =  "De: " . $name . "numéro: " . $numero . " " . $_POST["message"];
    $head = "From :" . $from;

    mail($to,$entreprise,$message,$head);
    echo "L'email a été envoyé.";
}

?>