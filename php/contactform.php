<?php

if (isset($_POST['verzenden'])) 
    $name = $_POST['naam'];
    $subject = $_POST['onderwerp'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['bericht'];

    $mailTo = "info@badrkit.nl";
    $headers = "From: ".$mailFrom;
    $txt = "U heeft een bericht ontvangen van ".$name.".\n\n".$message;

    mail($mailTo, $onderwerp, $txt, $headers);
    header("Location: Contact.php?mailsend");

?>