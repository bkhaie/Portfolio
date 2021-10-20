<?php

if(isset($_POST['versturen']))
{
    $Gebruikersnaam = $_POST['Naam'];
    $Email = $_POST['Email'];
    $Onderwerp = $_POST['Onderwerp'];
    $Bericht = $_POST['Bericht'];

    if(empty($Gebruikersnaam) || empty($Email) || empty($Onderwerp) || empty($Bericht))
    {
        header('location:index.php?error');
    }
    else
    {
        $to = "info@badrkit.nl";

        if(mail($to,$Onderwerp,$Bericht,$Email))
        {
            header("location:Contact.php?success");
        }
    }
}
else
{
    header("location:Contact.php");
}
?>