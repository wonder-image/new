<?php

    $FRONTEND = true;
    $PRIVATE = false;
    $PERMIT = [];

    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    require_once $ROOT."/vendor/wonder-image/app/wonder-image.php";

    if ($_POST['post']) { 

        unset($_POST['post']);
        
        $VALUES = [];

        foreach ($_POST as $key => $value) {

            if (is_array($value)) {
                $VALUES[$key] = json_encode($value);
            } else {
                $VALUES[$key] = sanitize($value);
            }

        }

        $ATTACHMENT = [];
        if (isset($_FILES) && !empty($_FILES)) {
            foreach ($_FILES as $key => $value) {

                $VALUES[$key] = uploadFiles($value, $TABLE->FORM[$key]['input']['format'], $PATH->rUpload.'/form/');
                
                foreach (json_decode($VALUES[$key]) as $key => $file) {
                    array_push($ATTACHMENT, $PATH->rUpload.'/form/'.$file);
                }

            }
        }
        
        $SQL = sqlInsert('form', $VALUES);
        $REQUEST_ID = $SQL->insert_id;

        if (isset($VALUES['email']) && !empty($VALUES['email'])) {

            $BODY_SOCIETY = "Ecco i dettagli:<br>Nome: <b>".$VALUES['name']." ".$VALUES['surname']."</b><br>Email: <b>".$VALUES['email']."</b><br>Cellulare: <b>".$VALUES['phone']."</b><br>";
            $BODY_SOCIETY .= "Dettagli: <br>".$VALUES['request'];
            $BODY_SOCIETY .= "<br><br><br><a href='$PATH->backend/form/view.php?id=$REQUEST_ID'>Clicca qui</a> per vedere la richiesta.";
            
            $BODY_CLIENT = "Buongiorno ".$VALUES['name']."<br>La tua richiesta è stata inviata correttamente!";

            sendMail($SOCIETY->email, $SOCIETY->email, "Nuovo contatto dal sito", $BODY_SOCIETY, $ATTACHMENT);
            sendMail($SOCIETY->email, $VALUES['email'], "Richiesta inviata", $BODY_CLIENT);

        }

    }

?>