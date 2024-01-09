<?php

$verifyjavascript='';
$usermessage='';
                
    // Testing the fields
    if(isset($_POST['name'])) {
        $regNom=('#^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \'-]{5,50}$#');
        $regEmail=('#^[a-z0-9._-]+@{1}[a-z0-9._-]{2,}[.]{1}[a-z]{2,}$#');
        $regPhone=('#^[0-9]{10,20}$#');
        $regMessage=('#^(.){4,750}$#');  
        
        // If a field has an error
        if(!preg_match($regNom, $_POST['name']) || !preg_match($regEmail, $_POST['mail']) || !preg_match($regPhone, $_POST['phone']) || !preg_match($regMessage, $_POST['message'])) {
            $verifyjavascript='Veuillez réactiver votre javascript.';
        // If all fields are ok
        } else {
            $_POST=array_map('trim', $_POST);
            $_POST=array_map('htmlspecialchars', $_POST);
            
            // var for the mail function for the admin
            $maildest='carrejennifer@gmail.com';
            $sujetdest='Un message de jennifer-carre.com';
            $messagedest='Bonjour Administrateur,<br>Vous avez reçu le message suivant :<br>De : '.$_POST['name'].'<br>Son adresse-mail : '.$_POST['mail'].'<br>Le numéro de téléphone : '.$_POST['phone'].'<br>Son message : '.$_POST['message'].'<br>Belle journée !';
                    
            $headersdest='From: contact@jennifer-carre.com' . "\r\n";
            $headersdest.='Reply-To: '.$_POST['mail'] . "\r\n";
            $headersdest.='Mime-Version: 1.0 ' . "\r\n";
            $headersdest.='Content-type: text/html; charset="UTF-8"' . "\r\n";
            
            // var for the mail function for the client
            $mailclient=$_POST['mail'];
            $sujetclient='Message automatique de jennifer-carre.com';
            $messageclient='Bonjour '.$_POST['name'].'<br>J\'ai bien reçu votre message.<br>Vous allez recevoir une réponse le plus vite possible.<br>Bonne journée<br>Jennifer Carré';
                    
            $headersclient='From: contact@jennifer-carre.com' . "\r\n";
            $headersclient.='Reply-To: noreply@jennifer-carre.com' . "\r\n";
            $headersclient.='Mime-Version: 1.0 ' . "\r\n";
            $headersclient.='Content-type: text/html; charset="UTF-8"' . "\r\n";
                    
                    
                    
                    
            if(mail($maildest, $sujetdest, $messagedest, $headersdest) && mail($mailclient, $sujetclient, $messageclient, $headersclient)) {
                $usermessage='Votre message a bien été envoyé.';
            } else {
                $usermessage='Nous avons rencontré une erreur. Veuillez réessayer ultérieurement.';
            }   
        }   
    }


?>