<?php

    $FRONTEND = true;
    $PRIVATE = false;
    $PERMIT = [];

    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    require_once $ROOT."/vendor/wonder-image/app/wonder-image.php";

    if ($_POST['post']) { 

        $FORM = json_decode($_POST['form']);

        $VALUES = [];

        foreach ($FORM as $key => $value) {

            if (is_array($value)) {
                $VALUES[$key] = json_encode($value);
            } else {
                $VALUES[$key] = sanitize($value);
            }

        }
        
        sqlInsert('form', $VALUES);

        if (isset($VALUES['email']) && !empty($VALUES['email'])) {

            $BODY_SOCIETY = "Ecco i dettagli:<br>Nome: <b>".$VALUES['name']." ".$VALUES['surname']."</b><br>Email: <b>".$VALUES['email']."</b><br>Richiesta: <br>".$VALUES['request']."";
            $BODY_CLIENT = "Buongiorno ".$VALUES['name']."<br>La tua richiesta è stata inviata correttamente!";

            sendMail($SOCIETY->email, $SOCIETY->email, "Nuovo contatto dal sito", $BODY_SOCIETY);
            sendMail($SOCIETY->email, $VALUES['email'], "Richiesta inviata", $BODY_CLIENT);

        }
    
    }

?>