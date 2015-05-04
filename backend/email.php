<?php
if(isset($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['name']))
    {
        $message = 'Vous n\'avez pas saisi votre nom...';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['email']))
    {
        $message = 'Et si il s\'agit d\'une question ? Je r�pond comment ? :D';
    }
    
    ini_set('SMTP','smtp.gmail.com');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $corp_message = $_POST['corp_message'];

    $mail = 'alan.morin71@gmail.com'; // D�claration de l'adresse de destination.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    //=====D�claration des messages au format texte et au format HTML.
    $message_txt = "Salut � tous, voici un e-mail envoy� par un script PHP.";
    $message_html = "<html><head></head><body><b>Salut � tous</b>, voici un e-mail envoy� par un <i>script PHP</i>.</body></html>";
    //==========

    //=====Cr�ation de la boundary
    $boundary = "-----=".md5(rand());
    //==========

    //=====D�finition du sujet.
    $sujet = "MESSAGE PROVENANT DU PORTFOLIO";
    //=========

    //=====Cr�ation du header de l'e-mail.
    $header = "From: ".$name."".$email."".$passage_ligne;
    $header.= "Reply-to: \"NaDA\" <nadanicht@mail.fr>".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    //==========

    //=====Cr�ation du message.
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format texte.
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format HTML
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    //==========

    //=====Envoi de l'e-mail.
    mail($mail,$sujet,$message,$header);
    //==========

}
?>