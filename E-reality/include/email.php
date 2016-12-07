<?php


    session_start();


    $errors= [];


    // Condition : champs 'name'
    if (isset($_POST['Name'])) {
        if (empty($_POST['Name'])) {
            $errors[] = 'Your name is empty';
        } else if (strlen($_POST['Name'])>50) {
            $errors[] = 'Your name is too long (superieur à 50 caractères)';
        }
    }


    // Condition : champs 'email'
    if (isset($_POST['Email'])) {
        if (empty($_POST['Email'])) {
            $errors[] = 'Votre adresse mail est vide';
        } else if (mb_strlen($_POST['Email'])>100){
            $errors[] = 'Your name is too long  (100 caractères)';
        } else if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Your email address is invalid';
        }
    }


    // Condition : champs 'sujet'
    if (isset($_POST['Subject'])) {
        if (empty($_POST['Subject'])) {
            $errors[] = 'You don\'t have written your subject';
        } else if (strlen($_POST['Subject'])<1) {
            $errors[] = 'Your Subject is too short (1 caractères)';
        }
    }


    // Condition : champs 'textara'
    if (isset($_POST['Message']) && empty(trim($_POST['Message']))) {
        $errors[] = 'You don\'t have written your message';
    }


    // Exécution des résultats
    if (isset($_POST['Name']) && count($errors)==0 ) {
        $TO = "contact@e-reality.fr";
        $h = "From: " . $TO;
        $Subject = stripslashes($_POST['Subject']);
        $message = "";
        foreach ($_POST as $key=>$value) {
            $message .= $key." : ". $value ."<br />\n";
        }
        //print_r($message);


       if (mail($TO, $subject, $message, $h)){
           header("location: ../merci.php");
       }else {
           // RAFRAICHISSEMENT de la page
           $errors[] = 'Error sending email;';
           $_SESSION['errors'] = $errors;
           $_SESSION['field'] = $_POST;
           header('location: ../index.php');
       }


    } else {
        // RAFRAICHISSEMENT de la page
        $_SESSION['errors'] = $errors;
        $_SESSION['field'] = $_POST;
        header('location: ../index.php');
    }
?>
